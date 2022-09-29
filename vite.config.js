import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/datatable.css',
                'resources/js/alpine.js',
                'resources/js/vanilla-datatables.js'
            ],
            refresh: true,
        }),
    ],
});
