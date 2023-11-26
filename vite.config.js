import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        target: 'modules',
        outDir: 'public/build', // Specify the output directory for the production build
        assetsDir: 'assets', // Specify the assets directory for the production build
        manifest: true,
      },
});
