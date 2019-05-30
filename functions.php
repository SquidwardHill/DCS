<?php
/**
 * DCS functions and definitions
 *

/**
 * Enqueue scripts and styles
 */
function dcs_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array());
	wp_enqueue_script( 'bundle', '/wp-content/themes/DCS/assets/js/bundle.js', array());
}
add_action( 'wp_enqueue_scripts', 'dcs_scripts' );

/**
 * Enable SVGs
 */
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
add_action('upload_mimes', 'add_file_types_to_uploads');


/* 
Navigation set up
*/
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	  )
	);
}
add_action( 'init', 'register_my_menus' );


// add custom class to nav menu a tags
function add_link_atts($atts) {
	$atts['class'] = "menu__navLink";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');


// Replace the class of submenu in the navigation
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="menu__subLinks" /',$menu);      
    return $menu;      
}
add_filter('wp_nav_menu','new_submenu_class'); 


/*
Add options pages for ACF
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function footer_image_badge_class($class, $id, $align, $size) {
	if (get_field( 'footer_badge', $id)) {
		$class .= 'footer__logo';
	}  
    return $class;
}
add_filter('get_image_tag_class', 'footer_image_badge_class', 10, 4 );