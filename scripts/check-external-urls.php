#!/usr/bin/env php
<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
 * Check external URLs in Blade templates for 404s.
 *
 * Scans resources/views/../.blade.php, extracts http/https URLs found in:
 *  - href, src, data-*, inline text
 * Skips:
 *  - mailto:, tel:, relative paths, asset()/route() helpers, localhost/internal domains
 * Performs a HEAD request first; if not allowed, falls back to GET.
 * Reports any URLs returning 404 or failing to connect.
 */

$root = dirname(__DIR__);
$viewsDir = $root . '/resources/views';

fwrite(STDOUT, "Starting external URL check...\n");

if (!is_dir($viewsDir)) {
    fwrite(STDERR, "Views directory not found: {$viewsDir}\n");
    exit(1);
}

/**
 * Recursively list Blade files.
 * @param string $dir
 * @return array<int,string>
 */
function listBladeFiles(string $dir): array
{
    $files = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    /** @var SplFileInfo $file */
    foreach ($rii as $file) {
        if ($file->isDir()) { continue; }
        $path = $file->getPathname();
        if (str_ends_with($path, '.blade.php')) {
            $files[] = $path;
        }
    }
    sort($files);
    return $files;
}

/**
 * Extract external URLs from a Blade file content.
 * @param string $content
 * @return array<int,string>
 */
function extractExternalUrls(string $content): array
{
    $urls = [];

    // Find http/https URLs in attributes or text
    $regex = '/https?:\\/\\/[A-Za-z0-9._~:\\/\-?#\[\]@!$&\'()*+,;=%]+/';
    if (preg_match_all($regex, $content, $matches)) {
        foreach ($matches[0] as $u) {
            $urls[] = $u;
        }
    }

    // Deduplicate
    $urls = array_values(array_unique($urls));

    // Filter out common skips
    $urls = array_values(array_filter($urls, function (string $url): bool {
        $lower = strtolower($url);
        if (str_starts_with($lower, 'mailto:') || str_starts_with($lower, 'tel:')) {
            return false;
        }
        // Skip localhost and internal dev domains
        $host = parse_url($url, PHP_URL_HOST) ?? '';
        if ($host === '' || $host === 'localhost' || str_ends_with($host, '.local') || str_ends_with($host, '.test')) {
            return false;
        }
        return true;
    }));

    return $urls;
}

/**
 * Perform HTTP request and return status code, or null on failure.
 * Tries HEAD first, then GET if necessary.
 * @param string $url
 * @param int $timeoutSeconds
 * @return int|null
 */
function httpStatus(string $url, int $timeoutSeconds = 8): ?int
{
    // Prefer curl if available for robust HEAD
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        if ($ch === false) { return null; }
        curl_setopt_array($ch, [
            CURLOPT_NOBODY => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => $timeoutSeconds,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_USERAGENT => 'TantusCorp-URL-Checker/1.0',
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
        ]);
        $ok = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE) ?: null;
        curl_close($ch);
        // If HEAD not allowed or ambiguous, fallback to GET
        if ($ok === false || $code === 405 || $code === 403 || $code === 0) {
            $ch = curl_init($url);
            if ($ch === false) { return $code; }
            curl_setopt_array($ch, [
                CURLOPT_NOBODY => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS => 5,
                CURLOPT_TIMEOUT => $timeoutSeconds,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_USERAGENT => 'TantusCorp-URL-Checker/1.0',
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
            ]);
            curl_exec($ch);
            $code2 = curl_getinfo($ch, CURLINFO_HTTP_CODE) ?: null;
            curl_close($ch);
            return $code2 ?? $code;
        }
        return $code;
    }

    // Fallback using get_headers
    $ctx = stream_context_create([
        'http' => [
            'method' => 'HEAD',
            'timeout' => $timeoutSeconds,
            'ignore_errors' => true,
            'header' => "User-Agent: TantusCorp-URL-Checker/1.0\r\n",
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);
    $headers = @get_headers($url, true, $ctx);
    if ($headers === false) {
        // Try GET
        $ctx = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => $timeoutSeconds,
                'ignore_errors' => true,
                'header' => "User-Agent: TantusCorp-URL-Checker/1.0\r\n",
            ],
        ]);
        $headers = @get_headers($url, true, $ctx);
        if ($headers === false) {
            return null;
        }
    }
    $statusLine = is_array($headers) && isset($headers[0]) ? $headers[0] : null;
    if (is_array($statusLine)) {
        // get_headers may return multiple status lines if redirects occurred
        $statusLine = end($statusLine);
    }
    if (!is_string($statusLine)) {
        return null;
    }
    if (preg_match('/\s(\d{3})\s/', $statusLine, $m)) {
        return (int)$m[1];
    }
    return null;
}

$bladeFiles = listBladeFiles($viewsDir);

fwrite(STDOUT, "Blade files found: " . count($bladeFiles) . "\n");

$allIssues = [];
$totalUrls = 0;

foreach ($bladeFiles as $file) {
    $content = file_get_contents($file);
    if ($content === false) { continue; }
    $urls = extractExternalUrls($content);
    fwrite(STDOUT, sprintf("Scanning %s: %d URL(s) found\n", $file, count($urls)));
    if (count($urls) === 0) { continue; }

    echo "\nFile: {$file}\n";
    foreach ($urls as $url) {
        $totalUrls++;
        $code = httpStatus($url);
        if ($code === 404 || $code === null) {
            $statusText = $code === null ? 'ERR' : (string)$code;
            echo "  [FAIL] {$statusText} -> {$url}\n";
            $allIssues[] = [ 'file' => $file, 'url' => $url, 'code' => $code ];
        } else {
            echo "  [OK]   {$code} -> {$url}\n";
        }
        // Be gentle to servers
        usleep(100_000); // 100ms
    }
}

echo "\nSummary:\n";
echo "  Files scanned: " . count($bladeFiles) . "\n";
echo "  URLs checked:  " . $totalUrls . "\n";
$failCount = count($allIssues);
if ($failCount > 0) {
    echo "  Failures:      {$failCount}\n";
    foreach ($allIssues as $issue) {
        $codeOut = $issue['code'] === null ? 'ERR' : (string)$issue['code'];
        echo "    - {$codeOut} {$issue['url']} (in {$issue['file']})\n";
    }
    exit(2);
} else {
    echo "  No 404s found.\n";
}

exit(0);
