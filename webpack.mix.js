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

/*
 * Styles
 */
mix.sass('resources/assets/sass/app.scss', 'public/css');
	/*.styles([
		'resources/assets/css/custom.css',
	], 'public/css/custom.css');*/

/*
 * Scripts
 */
mix.js('resources/assets/js/app.js', 'public/js')
   	.extract([
   		'vue', 'jquery', 'bootstrap', 'daemonite-material', 'datatables.net-bs4',
   		'datatables.net-responsive-bs4'
   	])
	.babel([
		'resources/assets/js/landing.js',
	], 'public/js/landing.js')
	.babel([
		'resources/assets/js/dashboard.js',
	], 'public/js/dashboard.js');

/*
 * Copy Files
 */
mix.copy('node_modules/scrollreveal/dist/scrollreveal.min.js', 'public/js/scrollreveal.js')
	.copy('resources/assets/img/landing.jpg', 'public/img/landing.jpg')
	.copy('resources/assets/img/dashboard.jpg', 'public/img/dashboard.jpg')
   	.sourceMaps();

if (mix.inProduction()) {
    mix.version();
}

// mix.browserSync('ipca.test');
