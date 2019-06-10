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


//Admin
mix
    .js('resources/js/admin/app.js', 'public/js/admin')
    .js('resources/js/admin/3rdParty/bootstrap-tab-history', 'public/js/admin')
    .sass('resources/sass/admin/app.scss', 'public/css/admin');
mix.combine(['node_modules/dropify/dist/js/dropify.js'] ,'./public/js/admin/dropify.js');

//Site
// mix
//     .js('resources/js/site/app.js', 'public/js/site')
//     .sass('resources/sass/site/app.scss', 'public/css/site');
