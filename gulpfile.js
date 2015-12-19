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
    /*mix.sass('app.scss');*/
	mix.styles([
        "/front/site.css",
        "/front/bootstrap.min.css",
        "/front/owl.carousel.css",
        "/front/owl.theme.css",
        "/front/owl.transitions.css",
        "/front/jquery-ui.css",
        "/front/settings.css",
        "/front/style.css",
        "/front/flexslider.css",
        "/front/isotope.css",
        "/front/imocon.css",
        "/front/font-awesome.min.css",
        "/front/magnific-popup.css",
        "/front/default-black.css",
    ]);

    //scripts
    mix.scripts([
        "/front/jquery.js",
        "/front/bootstrap.min.js",
        "/front/menu.js",
        "/front/owl.carousel.min.js",
        "/front/jquery.themepunch.tools.min.js",
        "/front/jquery.themepunch.revolution.min.js",
        "/front/jquery.easing.min.js",
        "/front/isotope.pkgd.js",
        "/front/jflickrfeed.min.js",
        "/front/tweecool.js",
        "/front/jquery.flexslider.js",
        "/front/jquery.easypiechart.min.js",
        "/front/jquery-ui.js",
        "/front/jquery.appear.js",
        "/front/jquery.inview.js",
        "/front/jquery.countdown.min.js",
        "/front/jquery.sticky.js",
        "/front/jquery.magnific-popup.min.js",
        "/front/main.js",
    ]);

    //hash/version
    mix.version([
    	"public/css/all.css",
    	"public/js/all.js"
	]);
});
