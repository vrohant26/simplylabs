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
