<?php
/**
 * Simply Labs theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simply_Labs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'simply_labs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function simply_labs_setup() {
		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );
	}
endif;
add_action( 'after_setup_theme', 'simply_labs_setup' );

/**
 * Enqueue scripts and styles.
 */
function simply_labs_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'simply-labs-style', get_stylesheet_uri(), array(), $theme_version );

	// Enqueue Swiper.js CSS & JS from CDN
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

	// Enqueue custom main.js script in footer
	wp_enqueue_script( 'simply-labs-main', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'simply_labs_scripts' );

