<?php
/**
 * Plugin Name: OHSM Marketplace Tweaks
 * Description: Turns WooCommerce into the Online Home Services Marketplace (booking-oriented labels, no shipping, services UX).
 * Author: OEL Team
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---- Booking-oriented button & label text ---- */
add_filter( 'woocommerce_product_single_add_to_cart_text', function () {
	return __( 'Book Now', 'ohsm' );
} );
add_filter( 'woocommerce_product_add_to_cart_text', function () {
	return __( 'Book Now', 'ohsm' );
} );

// "Cart" -> "My Bookings" style wording in a couple of visible spots.
add_filter( 'gettext', function ( $translated, $text, $domain ) {
	if ( 'woocommerce' !== $domain ) {
		return $translated;
	}
	$map = array(
		'Add to cart'        => 'Book Now',
		'View cart'          => 'View Bookings',
		'Related products'   => 'Related Services',
		'Products'           => 'Services',
		'Product'            => 'Service',
		'Shop'               => 'Services',
		'No products were found matching your selection.' => 'No services found. Please try another category.',
	);
	return $map[ $text ] ?? $translated;
}, 10, 3 );

/* ---- Services are not shipped: treat everything as virtual ---- */
add_filter( 'woocommerce_cart_needs_shipping', '__return_false' );
add_filter( 'woocommerce_product_needs_shipping', '__return_false', 10, 1 );

/* ---- Customer (booking) note prompt at checkout ---- */
add_filter( 'woocommerce_checkout_fields', function ( $fields ) {
	if ( isset( $fields['order']['order_comments'] ) ) {
		$fields['order']['order_comments']['label']       = 'Service details & preferred time';
		$fields['order']['order_comments']['placeholder'] = 'e.g. AC not cooling. Please come tomorrow between 2-4 PM. Address landmark...';
	}
	return $fields;
}, 20 );

/* ---- Contact Form 7: demo mode on localhost (skip real mail, always succeed) ---- */
add_filter( 'wpcf7_skip_mail', '__return_true' );

/* ---- Service Provider role (technicians) ---- */
add_action( 'init', function () {
	if ( ! get_role( 'service_provider' ) ) {
		add_role(
			'service_provider',
			'Service Provider',
			array(
				'read'         => true,
				'edit_posts'   => false,
				'upload_files' => true,
			)
		);
	}
} );
