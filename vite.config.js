import { defineConfig } from "vite";
import { resolve } from "path";
import Vue from "@vitejs/plugin-vue";
import ViteComponents from "unplugin-vue-components/vite";
// import ViteLaravel from "vite-plugin-laravel";
import ViteIcons from "unplugin-icons/vite";
// import TailwindCSS from "tailwindcss";
// import Autoprefixer from "autoprefixer";
import ViteIconsResolver from "unplugin-icons/resolver";
import {
    NaiveUiResolver,
    VueUseComponentsResolver,
} from "unplugin-vue-components/resolvers";

export default defineConfig(({ command, mode }) => ({
    base:
        command === "serve"
            ? process.env.ASSET_URL || ""
            : `${process.env.ASSET_URL || ""}/build/`,
    publicDir: false,
    build: {
        manifest: true,
        outDir: "public/build",
        rollupOptions: {
            input: "resources/js/app.js",
        },
    },
    resolve: {
        alias: {
            "@": resolve(__dirname, "resources/js"),
            // "/img": resolve(__dirname, "public/img"),
        },
    },
    plugins: [
        Vue({
            isProduction: mode === "production",
        }),
        ViteComponents({
            dirs: ["resources/js/Components"],
            directoryAsNamespace: true,
            resolvers: [
                /**
                 * Access thousands of icons as components on-demand universally
                 */
                /**
                 * auto import vue-use
                 */
                VueUseComponentsResolver(),

                /**
                 * auto import iconify
                 */
                ViteIconsResolver({
                    prefix: false,
                    enabledCollections: ["mdi"],
                }),

                /**
                 * auto import naive-ui
                 */
                NaiveUiResolver(),
            ],
        }),
        ViteIcons(),
        /**
        //  * Laravel Vite
        //  *
        //  * Laravel Vite is a project that aims to integrate Vite as seemlessly as possible with Laravel.
        //  */
        // ViteLaravel({
        //     postcss: [TailwindCSS(), Autoprefixer()],
        // }),
    ],

    // optimizeDeps: {
    //     include: ["tailwindConfig"],
    // },
    server: {
        fs: { allow: [`${process.cwd()}`] },
        port: process.env?.VITE_PORT ?? 3000,
    },
}));
