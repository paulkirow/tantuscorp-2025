<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class StripAbsoluteUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:strip-urls {--path= : Override the docs path to process}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Replace absolute site URLs with the base URL inside exported HTML files.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $docsPath = $this->option('path') ?: base_path('docs');

        // Use config values (do not call env() directly in runtime code)
        $siteUrl = (string) config('app.url');
        $baseUrl = (string) config('export.base_url', 'https://tantuscorp.com');

        if ($siteUrl === '') {
            $this->error('config("app.url") is not set. Please set APP_URL in your environment.');
            return self::FAILURE;
        }

        if (! is_dir($docsPath)) {
            $this->error("Docs path not found: {$docsPath}");
            return self::FAILURE;
        }

        $this->info("Processing HTML files under: {$docsPath}");
        $this->line("Replacing '{$siteUrl}' with '{$baseUrl}'");

        $filesIter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($docsPath));
        $processed = 0;
        foreach ($filesIter as $file) {
            if ($file->isFile() && strtolower($file->getExtension()) === 'html') {
                $contents = file_get_contents($file->getPathname());
                if ($contents === false) {
                    $this->warn('Unable to read: ' . $file->getPathname());
                    continue;
                }
                $updated = str_replace($siteUrl, $baseUrl, $contents);
                if ($updated !== $contents) {
                    $result = file_put_contents($file->getPathname(), $updated);
                    if ($result === false) {
                        $this->warn('Failed to write: ' . $file->getPathname());
                        continue;
                    }
                    $processed++;
                }
            }
        }

        $this->info("Updated {$processed} file(s).");
        return self::SUCCESS;
    }
}

