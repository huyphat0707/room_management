const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .copy('node_modules/admin-lte/dist/img', 'public/dist/img');

mix.alias({
    '@config': path.resolve(__dirname, 'resources/js/src/config'),
    '@components': path.resolve(__dirname, 'resources/js/src/components'),
    '@container': path.resolve(__dirname, 'resources/js/src/container'),
    '@helper': path.resolve(__dirname, 'resources/js/src/helper'),
    '@layouts': path.resolve(__dirname, 'resources/js/src/layouts'),
    '@src': path.resolve(__dirname, 'resources/js/src'),
});