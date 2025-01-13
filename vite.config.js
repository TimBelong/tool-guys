import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/sass/main.scss', 'public/assets/js/main.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~': path.resolve(__dirname, 'public/assets'),
        },
    },
    optimizeDeps: {
        include: ['axios'],
    },
    build: {
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        
                        return 'assets/css/[name][extname]';
                    }
                    return 'assets/[name][extname]';
                },
            },
        },
    },
});