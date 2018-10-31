const mix = require('laravel-mix');

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

//mix.js('resources/js/app.js', 'public/js')
  // .sass('resources/sass/app.scss', 'public/css');
  mix.js('resources/y2018/m10/test/app.js', 'public/y2018/m10/js')
   .sass('resources/y2018/m10/test/app.scss', 'public/y2018/m10/css');

