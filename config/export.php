<?php

return [
    /*
     * If true, the exporter will crawl through your site's pages to determine
     * the paths that need to be exported.
     */
    'crawl' => false,

    /*
     * Add additional paths to be added to the export here. If you're using the
     * `crawl` option, you probably don't need to add anything here.
     *
     * For example: "about", "posts/featured"
     */
    'paths' => [
        '/',
        'accessories',
        'chillers',
        'contact',
        'cooling-load-analysis',
        'energy-audits',
        'free-cooling',
        'installation-and-startup',
        'portables',
        'products',
        'pumps-and-reservoirs',
        'temperature-control-units',
        'tower',
        'troubleshooting',
    ],

    /*
     * Files and folders that should be included in the build. Expects
     * key/value pairs with current paths as keys, and destination paths
     * as values.
     *
     * By default your `public` folder's contents will be added to the export.
     */
    'include_files' => [
        'public' => '',
    ],

    /*
     * File patterns that should be excluded from the included files.
     */
    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
        '/construction\/.*/',
    ],

    /*
     * Whether or not the destination folder should be emptied before starting
     * the export.
     */
    'clean_before_export' => true,

    /*
     * If set, the site will be exported to this disk. Disks can be configured
     * in `config/filesystems.php`.
     *
     * If empty, your site will be exported to a `dist` folder.
     */
    'disk' => 'docs',

    /*
     * Shell commands that should be run before the export starts when running
     * `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'before' => [
         'assets' => 'npm run build',
    ],

    /*
     * Shell commands that should be run after the export has finished when
     * running `php artisan export`.
     *
     * You can skip these by adding a `--skip-{name}` flag to the command.
     */
    'after' => [
        // Purge CSS in-place within docs/build/assets
        'purgecss' => 'npx purgecss --css "docs/build/assets/**/*.css" --content "docs/**/*.html" "docs/**/*.js" --output docs/build/assets',
        // Replace running the PHP script with an artisan command
        'strip-urls' => 'php artisan export:strip-urls',
        // Normalize permissions in the exported docs directory
        'permissions' => 'find docs -type f -exec chmod 644 {} \\; && find docs -type d -exec chmod 755 {} \\;',
        // Create a zip archive of the docs contents (without nesting the docs folder itself)
        'zip' => 'cd docs && zip -r ../docs.zip .',
    ],

    // Base URL for replacing absolute URLs in exported files
    'base_url' => env('EXPORT_URL', 'https://tantuscorp.com'),

];
