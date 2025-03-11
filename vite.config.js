import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/login_register_form.js', 'resources/css/login_register_form.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0', // Asegura que está accesible desde la red
        port: 5173,
        strictPort: true,
        hmr: {
            host: '172.31.74.20', // Usa la IP correcta de tu servidor
        },
    },
});
