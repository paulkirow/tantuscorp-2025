<?php

$exportPath = __DIR__ . '/../docs';
$siteUrl = 'http://tantuscorp-2025.test'; // your dev URL
$basePath = '/tantuscorp-2025'; // your base path, if any
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($exportPath)
);

foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $contents = file_get_contents($file);
        $updated = str_replace($siteUrl, $basePath, $contents);
        file_put_contents($file, $updated);
    }
}
