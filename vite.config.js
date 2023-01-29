import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'],
            refresh: true,
        }),
        Vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                }
            }
        }),
    ],
});