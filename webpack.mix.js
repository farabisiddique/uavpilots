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

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/signup.js', 'public/js')
	.js('resources/js/datatable.js', 'public/js')
	.js('resources/js/datatable_home.js', 'public/js')
	.js('resources/js/approveordeclineUsersAjax.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');




    