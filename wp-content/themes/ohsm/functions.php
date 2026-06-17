<?php
/**
 * OHSM child theme functions.
 *
 * @package ohsm
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue parent + child styles, fonts and the component stylesheet site-wide.
 */
add_action( 'wp_enqueue_scripts', function () {
	$theme = wp_get_theme();

	// Google Fonts (graceful system fallback is defined in theme.json).
	wp_enqueue_style(
		'ohsm-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap',
		array(),
		null
	);

	// Component / layout styles applied to every front-end page.
	$css_path = get_stylesheet_directory() . '/assets/ohsm.css';
	wp_enqueue_style(
		'ohsm-main',
		get_stylesheet_directory_uri() . '/assets/ohsm.css',
		array(),
		file_exists( $css_path ) ? filemtime( $css_path ) : $theme->get( 'Version' )
	);
}, 20 );

/**
 * Theme supports.
 */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );

	// WooCommerce integration.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
} );

/**
 * Show 12 services per page in the catalogue and 3 per row.
 */
add_filter( 'loop_shop_per_page', function () {
	return 12;
} );
add_filter( 'loop_shop_columns', function () {
	return 3;
} );
