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
mix.copy('node_modules/datatables.net-dt/css/jquery.dataTables.min.css', 'public/css');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js');
mix.copy('node_modules/sweetalert2/dist/sweetalert2.all.min.js', 'public/js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.browserSync('http://localhost/laravel/public/')

if (mix.inProduction())
{
	mix.version();
}