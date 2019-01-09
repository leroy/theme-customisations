<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

/**
 * Add fontawesome
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
});

/**
 * Set default shipping address state to false
 */
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );

/**
 * Remove checkout button
 */
remove_action( 'woocommerce_proceed_to_checkout', 'action_woocommerce_proceed_to_checkout', 10, 2 );

