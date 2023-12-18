<?php
/**
 * AH Wordpress Boilerplate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AH_Wordpress_Boilerplate
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Add theme defaults and theme support.
require_once('inc/theme-support.php');


// Create widget areas.
require_once('inc/widget-areas.php');


// Enqueue scripts and stylesheets.
require_once('inc/enqueue-scripts.php');


// Enqueue navigation.
require_once('inc/navigation.php');


//Implement the Custom Header feature.
//require get_template_directory() . '/inc/custom-header.php';


//Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';


//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';


//Customizer additions.
require get_template_directory() . '/inc/customizer.php';


//Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Owl Carousel Small (for use on inner pages).
require get_template_directory() . '/inc/owl-carousel-small.php';

//Owl Carousel.
require get_template_directory() . '/inc/owl-carousel.php';


/* Customizer Additional Fields */
include( get_theme_file_path('/inc/theme-customizer.php') );
add_action('customize_register', 'ah_customize_register');
/* Customizer Additional Fields */





add_filter( 'walker_nav_menu_start_el', function( $item_output, $item, $depth, $args ) {
	if ( 'main_menu' == $args->theme_location && $item->description ) {
		$item_output = str_replace( '</a>', '<span class="my-menu-item-desc">' . $item->description . '</span></a>', $item_output );
	}
	return $item_output;
}, 10, 4 );