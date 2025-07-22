<?php

$exportPath = __DIR__ . '/../docs';
$siteUrl = 'http://tantuscorp-2025.test'; // your dev URL

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($exportPath)
);

foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $contents = file_get_contents($file);
        $updated = str_replace($siteUrl, '', $contents);
        file_put_contents($file, $updated);
    }
}
