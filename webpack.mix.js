const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/registration.js', 'public/js')
	.js('resources/js/autocomplete.js', 'public/js')
	.js('resources/js/colorPalette.js', 'public/js')
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/registration.scss', 'public/css')
    .sass('resources/sass/elements.scss', 'public/css');
