import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/sass/main.scss', 'public/assets/js/main.js'], // Укажите SCSS и JS точки входа
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~': path.resolve(__dirname, 'public/assets'), // Удобный алиас для доступа к файлам в public/assets
        },
    },
    optimizeDeps: {
        include: ['axios'], // Добавьте библиотеки, которые нужно предварительно обработать
    },
    build: {
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        // Указываем, куда сохранить итоговый CSS
                        return 'assets/css/[name][extname]'; // Переместить main.css в public/assets/css/
                    }
                    return 'assets/[name][extname]'; // Общая структура для других файлов
                },
            },
        },
    },
});