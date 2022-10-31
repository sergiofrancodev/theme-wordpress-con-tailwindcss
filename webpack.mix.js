const mix = require('laravel-mix');


//Directory that contains our un-compiled CSS
mix.postCss('src/css/style.css', 'css', [
	require('tailwindcss'),
	require('postcss-custom-properties'),
])
.options({
	processCssUrls: false
});