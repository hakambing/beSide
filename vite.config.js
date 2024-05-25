import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // "resources/bootstrap/bootstrap.css",
                // "resources/jquery/jquery-3.7.1.min.js",
                // "resources/socket/socket.io.js",
                // "resources/bootstrap/masonry.pkgd.min.js",
                // "resources/bootstrap/bootstrap.bundle.js",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
