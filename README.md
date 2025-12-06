# Tantus Corp Website (Laravel)

This repository contains a Laravel 12 project with a Vite-powered frontend. It provides static site exports to the `docs` directory for GitHub Pages or similar hosting and includes tooling to validate and clean exported content.

## Project Overview
- Backend: Laravel 12 (PHP 8.4), serving pages and managing a static export process
- Frontend: Vite + vanilla JS (and Bootstrap styles)
- Export: `php artisan export` builds and copies assets to `docs/`

## Tech Stack
- PHP: 8.4
- Laravel Framework: v12
- Node.js: LTS recommended (e.g., 20.x)
- Package managers: Composer (PHP), npm (JS)
- Build tool: Vite
- CSS utilities: PurgeCSS (post export)

Key Laravel packages used:
- laravel/framework v12

## Prerequisites
- PHP 8.4 and Composer installed
- Node.js (>= 18, recommended 20) and npm installed
- macOS or Linux shell environment

## Environment Setup
This project uses environment files:
- `.env` for local development
- `.env.testing` for tests
- `.env.github-actions` for CI

Copy `.env.example` (if present) to `.env` and configure values. Typical settings:
- `APP_ENV=local`
- `APP_DEBUG=true`
- `APP_URL=http://localhost`
- Storage, cache, and logging per defaults

## Install Dependencies
Install PHP and JS dependencies:

```bash
composer install
npm install
```

## Build Processes
Primary build commands:

- Frontend build via Vite:
```bash
npm run build
```
This compiles assets from `resources/assets` or `resources/js/css/sass` into `public/` depending on Vite configuration.

- Laravel asset references use Vite manifest. If you see:
"Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest"
run:
```bash
npm run build
```
(or `npm run dev` in development).

## Static Export Workflow
The export process is configured in `config/export.php`.

- Export destination disk is set to `docs` (for GitHub Pages):
  - `disk => 'docs'`
- Included files: `public/` copied to the export root
- Exclusions: `.php`, `mix-manifest.json`, `.xls`, `.pdf`, `public/construction/*`
- Pre-export step:
  - `before.assets => npm run build`
- Post-export steps:
  - `after.purgecss => PurgeCSS scoped to docs`
  - `after.strip-urls => php scripts/strip-absolute-urls.php`
- Environment variable:
  - Set `EXPORT_URL` in your `.env` to your destination site base URL (the final published domain). Example:
    ```
    EXPORT_URL=https://www.example.com
    ```
    This ensures generated links and any absolute URLs in the export resolve correctly for the target site.

Run export:
```bash
php artisan export
```
Add flags to skip steps (example):
```bash
php artisan export --skip-assets --skip-purgecss
```

## PurgeCSS (docs-only)
PurgeCSS removes unused CSS from files under `docs`.

- Command (configured in `config/export.php` under `after`):
```bash
npx purgecss --css "docs/**/*.css" --content "docs/**/*.html" "docs/**/*.js" --output docs
```
- It scans HTML/JS in `docs` and purges CSS in `docs`, writing optimized CSS back into `docs`.

## Development Workflow
- Run Vite in dev mode with HMR:
```bash
npm run dev
```
- Build for production:
```bash
npm run build
```

## Useful Scripts
The `scripts/` directory contains utility scripts:
- `strip-absolute-urls.php`: Cleans absolute URLs from exported HTML (used in `after` step)
- `check-external-urls.php` and `.sh`: Validate external links

Run examples:
```bash
php scripts/strip-absolute-urls.php
php scripts/check-external-urls.php
bash scripts/check-external-urls.sh
```
