import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/cindex.css', 'resources/css/cshow.css', 'resources/css/ccreate.css', 'resources/css/mindex.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
