var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
		mix.copy('./resources/assets/img', './public/img');
		mix.copy('./resources/assets/css/lib', './public/css/lib');
		mix.copy('./resources/assets/fonts', './public/fonts');
		mix.copy('./resources/assets/js/html5shiv.js', './public/js/html5shiv.js');
		mix.copy('./resources/assets/js/respond.min.js', './public/js/respond.min.js');

	  mix.styles([
	  	'lib/font-lineicons.css',
	  	'lib/toastr.min.css',
	  	'lib/bootstrap.min.css',
	  	'custom-animations.css',
	  	'lib/font-awesome.min.css',
	  	'style.css',
	  	'vegas/vegas.min.css'
	  ]);
	  mix.scripts(['jquery-2.1.4.min.js'], './public/js/jquery-2.1.4.min.js');
    mix.scripts(['jquery-1.11.3.min.js'], './public/js/jquery-1.11.3.min.js');
    mix.scripts([
    	'vegas/vegas.min.js',
    	'bootstrap.min.js',
    	'jquery.flexslider-min.js',
    	'jquery.appear.js',
    	'jquery.plugin.js',
    	'jquery.countdown.js',
    	'jquery.waypoints.min.js',
    	'jquery.validate.min.js',
    	'toastr.min.js',
    	'startuply.js'
    ]);
 
});
