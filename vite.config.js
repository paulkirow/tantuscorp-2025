import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss',
                'resources/css/theme.css',
                'resources/css/theme-elements.css',
                'resources/css/vendor/simple-line-icons.css',
                'resources/css/demo-construction.css',
                'resources/css/skin-construction.css',
            ],
            refresh: true,
        }),
    ],
    css: {
        devSourcemap: true,
    },
});
