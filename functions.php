<?php 

	// Theme support
	add_action( 'after_setup_theme', function(){


		// Title Tag
		add_theme_support( 'title-tag' );

		// Custom Logo
		add_theme_support('custom-logo', [
			'height'=> 100,
			'width' => 100,
			'header-text' => ['site-title', 'site-description']


		]);

		// Custom Header
		add_theme_support('custom-header', [
			'default-image' => get_template_directory_uri().'/img/carousel-2.jpg'
		]);


		// Custom Background
		add_theme_support('custom-background', [

			'default-image' => get_template_directory_uri().'/img/carousel-2.jpg'

		]);

		// Post thumbnils
		add_theme_support( 'post-thumbnails' );


	} );




	
	add_action( 'wp_enqueue_scripts', 'link_js_css_file');

	function link_js_css_file(){


		// link CSS file
		wp_enqueue_style( 'sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap' );
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
		wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );


		// link js file
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
		wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js' );
		wp_enqueue_script( 'easing', get_template_directory_uri().'/lib/easing/easing.min.js' );
		wp_enqueue_script( 'waypoints', get_template_directory_uri().'/lib/waypoints/waypoints.min.js' );
		wp_enqueue_script( 'mail', get_template_directory_uri().'/mail/jqBootstrapValidation.min.js' );
		wp_enqueue_script( 'contact', get_template_directory_uri().'/mail/contact.js' );
		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js' );

	}



// Register nav Menu 

	add_action('after_setup_theme', function (){
		
		// Main Menu Register
		register_nav_menu( 'main_menu', __( "Main Menu", 'personal' ));


	});