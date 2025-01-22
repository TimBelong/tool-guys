import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/js/main.js',
                'public/assets/sass/main.scss',
            ],
            refresh: true,
        }),
    ],
});
