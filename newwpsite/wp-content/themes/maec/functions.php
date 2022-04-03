<?php 

/**

functions.php

	
/*----------  1.0 DEFINE CONSTANT  ----------*/
	define( 'THEMEROOT', get_stylesheet_directory_uri() );
	define( 'IMAGES', THEMEROOT . '/assets/img');
	define( 'STYLES', THEMEROOT . '/assets/css');
	define( 'SCRIPTS', THEMEROOT . '/assets/js');



/********* 2.0 LOAD THE CUSTOM SCRIPTS AND STYLE FOR THE THEME **********/

 if ( ! function_exists( 'maec_script' )) {
		function maec_script(){

			// LOAD THE STYLESHEET
			wp_enqueue_style( 'font', STYLES . '/font.css', null, null, null );
			wp_enqueue_style( 'bootstrap', STYLES . '/bootstrap.min.css', null, null, null );
			wp_enqueue_style( 'owl.carousel', STYLES . '/owl.carousel.min.css', null, null, null );
			wp_enqueue_style( 'animate', STYLES . '/animate.css', null, null, null );
			wp_enqueue_style( 'magnific-popup', STYLES . '/magnific-popup.css', null, null, null );
			wp_enqueue_style( 'jquery', STYLES . '/jquery-ui.css', null, null, null );
			wp_enqueue_style( 'all.min', STYLES . '/all.min.css', null, null, null );
			wp_enqueue_style( 'flaticon', STYLES . '/flaticon.css', null, null, null );
			wp_enqueue_style( 'themify', STYLES . '/themify-icons.css', null, null, null );
			wp_enqueue_style( 'metisMenu', STYLES . '/metisMenu.css', null, null, null );
			wp_enqueue_style( 'nice-select', STYLES . '/nice-select.css', null, null, null );
			wp_enqueue_style( 'slick', STYLES . '/slick.css', null, null, null );
			wp_enqueue_style( 'main', STYLES . '/main.css', null, null, null );

			// LOAD THE SCRIPTS
			wp_enqueue_script( 'modernizr', SCRIPTS . '/modernizr-3.5.0.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery1', SCRIPTS . '/jquery-1.12.4.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'bootstrap', SCRIPTS . '/bootstrap.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'popper', SCRIPTS . '/popper.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'owl.carousel', SCRIPTS . '/owl.carousel.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'isotope.pkgd', SCRIPTS . '/isotope.pkgd.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'slick.min', SCRIPTS . '/slick.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery.meanmenu', SCRIPTS . '/jquery.meanmenu.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'metisMenu', SCRIPTS . '/metisMenu.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery', SCRIPTS . '/jquery.nice-select.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'ajax', SCRIPTS . '/ajax-form.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'wow', SCRIPTS . '/wow.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery2', SCRIPTS . '/jquery.counterup.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'waypoints', SCRIPTS . '/waypoints.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery3', SCRIPTS . '/jquery.scrollUp.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'imagesloaded', SCRIPTS . '/imagesloaded.pkgd.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery4', SCRIPTS . '/jquery.magnific-popup.min.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery5', SCRIPTS . '/jquery.easypiechart.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'jquery6', SCRIPTS . '/jquery-ui.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'tilt', SCRIPTS . '/tilt.jquery.js', [ 'jquery' ], null, true );
			wp_enqueue_script( 'main', SCRIPTS . '/main.js', [ 'jquery' ], null, true );
		}

		add_action( 'wp_enqueue_scripts', 'maec_script' );
	}
	


