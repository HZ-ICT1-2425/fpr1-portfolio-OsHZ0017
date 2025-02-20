import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS Files
                'resources/css/base.css',
                'resources/css/index.css',
                'resources/css/profile.css',
                'resources/css/dashboard.css',
                'resources/css/blog.css',
                // JS Files
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
