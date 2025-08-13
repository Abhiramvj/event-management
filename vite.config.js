import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

        // Pass the configuration object directly to the tailwindcss() function
        tailwindcss({
            // Specify the paths to all of your template files
            content: [
                './resources/**/*.blade.php',
                './resources/**/*.js',
            ],

            // Define your theme customizations
            theme: {
                extend: {
                    // Add your custom brand color here
                    colors: {
                        'brand-purple': '#2F1943',
                    },
                },
            },

            // Add any plugins if needed in the future
            plugins: [],
        }),
    ],
});
