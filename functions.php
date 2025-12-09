<?php
/**
 * Triboon Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Replace the version number of the theme on each release.
const THEME_VERSION = '1.0.0';
define( "THEME_DIR", get_template_directory() );
define( "THEME_URL", get_template_directory_uri() );


if ( THEME_DIR ) {
	require_once THEME_DIR . '/vendor/autoload.php';
}

Triboon\Core\Setup::get_instance();

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) )
	require get_template_directory() . '/inc/woocommerce.php';

/**
 * Helper Functions
 */
require get_template_directory() . '/inc/functions/helpers.php';
