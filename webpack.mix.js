let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/assets/js/datatables.js'], 'js/all.css')
   .sass('resources/assets/sass/app.scss', 'css')
    .styles(['resources/assets/css/style.css', 
    'resources/assets/css/skin-pasanaku.css'],
    'public/css/all.css');