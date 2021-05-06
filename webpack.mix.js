const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
/*
mix.styles([
        'resources/admin/assets/bootstrap/css/bootstrap.min.css',
        'resources/admin/assets/font-awesome/4.5.0/css/font-awesome.min.css',
        'resources/admin/assets/ionicons/2.0.1/css/ionicons.min.css',
        'resources/admin/assets/dist/css/AdminLTE.min.css',
        'resources/admin/assets/dist/css/skins/_all-skins.min.css'
    ],
    'public/css/admin.css')
    */
