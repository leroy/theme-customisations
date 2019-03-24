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
 * Additional 'proceed to checkout' button before cart
 */
add_action('woocommerce_before_cart', function() {
?>
<div class="wc-proceed-to-checkout">
<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
</div>
<?php
});
