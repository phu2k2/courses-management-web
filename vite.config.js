import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        https: false,
        host: true,
        hmr: {host: 'localhost', protocol: 'ws'},
    },
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
