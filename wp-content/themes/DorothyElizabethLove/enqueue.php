<?php 

function kulo_theme_files() {
	wp_enqueue_style( 'bootStrap', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), '1.0' , 'all' );

	wp_enqueue_style( 'fontAwesome', get_template_directory_uri(). '/assets/css/fontawesome.css', array(), '1.0', 'all');

	wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Allura|Lato:300,400|Poppins:300,400&display=swap', array(), '1.0', 'all');

	wp_enqueue_style( 'owlCarousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
	

	wp_enqueue_style( 'customStyle', get_stylesheet_uri()); 	

	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/assets/css/responsive.css', array(), '1.0', 'all');


	// wp_enqueue_script( 'bootStrap',get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '1.0', true );

	// wp_enqueue_script( 'jquery',get_template_directory_uri(). '/assets/js/jquery.js', array(), '1.0', false );

	wp_enqueue_script( 'owlCarousel',get_template_directory_uri(). '/assets/js/owl.carousel.js', array(), '1.0', true );

	wp_enqueue_script( 'active',get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '1.0', true );
}

add_action('wp_enqueue_scripts', 'kulo_theme_files');


 ?>