let mix = require('laravel-mix');

mix.options({
    processCssUrls: true,
    imgLoaderOptions: {
      enabled: false,
    }
  });

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

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/bootstrap.js',     
    'resources/assets/js/adminlte.js', 
    'resources/assets/js/internetexplore.js',
    'resources/assets/js/jquerymask.js',
    'resources/assets/js/funcoes.js',


],'js/all.js')

.styles([
    'resources/assets/css/bootstrap.css',   
    'resources/assets/css/adminlte.css', 
    'resources/assets/css/fontsgoogle.css', 
    'resources/assets/css/fontawesome.css',     
    'resources/assets/css/skin-pasanaku.css',
    'resources/assets/css/style.css', 
    
], 'css/all.css');
    