import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // Master Stylesheet CSS
                'public/xvito-responsive-bootstrap/style.css',
                'public/xvito-responsive-bootstrap/nav-sidebar/style.css',
                // 'resources/css/welcome.css',

                // Active JS
                'resources/css/auth.css',

                // Plugins Js
                'public/xvito-responsive-bootstrap/js/jquery.min.js',
                'public/xvito-responsive-bootstrap/js/wow.min.js',
                'public/xvito-responsive-bootstrap/js/popper.min.js',
                'public/xvito-responsive-bootstrap/js/bootstrap.min.js',
                'public/xvito-responsive-bootstrap/js/bundle.js',
                
                // Active JS
                'public/xvito-responsive-bootstrap/js/canvas.js',
                'public/xvito-responsive-bootstrap/js/collapse.js',
                'public/xvito-responsive-bootstrap/js/settings.js',
                'public/xvito-responsive-bootstrap/js/template.js',
                'public/xvito-responsive-bootstrap/js/default-assets/active.js',
            ],
            refresh: true,
        }),
    ],
});
