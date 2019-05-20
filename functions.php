<?php
/**
 * DCS functions and definitions
 *

/**
 * Enqueue scripts and styles
 */
function dcs_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array());
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array());
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

if ( is_home() ) {
	$navTheme = "dark";
}
else {
	$navTheme = "light";
}