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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/pages/characteristics/index.js', 'public/js/pages/characteristics/index.js')
   .js('resources/assets/js/pages/labels/create.js', 'public/js/pages/labels/create.js')
   .js('resources/assets/js/pages/labels/show.js', 'public/js/pages/labels/show.js')
   .js('resources/assets/js/pages/labels/index.js', 'public/js/pages/labels/index.js')
   .js('resources/assets/js/pages/collections/create.js', 'public/js/pages/collections/create.js')
   .js('resources/assets/js/pages/collections/show.js', 'public/js/pages/collections/show.js')
   .js('resources/assets/js/pages/collections/index.js', 'public/js/pages/collections/index.js')
   .js('resources/assets/js/pages/artists/create.js', 'public/js/pages/artists/create.js')
   .js('resources/assets/js/pages/artists/show.js', 'public/js/pages/artists/show.js')
   .js('resources/assets/js/pages/artists/index.js', 'public/js/pages/artists/index.js')
   .js('resources/assets/js/pages/tracks/create.js', 'public/js/pages/tracks/create.js')   
   .js('resources/assets/js/pages/tracks/show.js', 'public/js/pages/tracks/show.js')  
   .js('resources/assets/js/pages/tracks/index.js', 'public/js/pages/tracks/index.js')  
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
