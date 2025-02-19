import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    server: {
        host: '0.0.0.0', // Доступ снаружи контейнера
        port: 5173, // Стандартный порт Vite
        strictPort: true,
        hmr: {
            host: 'localhost', // Или IP машины-хоста
        },
        watch: {
            usePolling: true, // Нужен для работы в Docker
        },
    }
});
