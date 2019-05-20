<?php
/**
 * DCS functions and definitions
 *

/**
 * Enqueue scripts and styles.
 */
function dcs_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array());

}
add_action( 'wp_enqueue_scripts', 'dcs_scripts' );