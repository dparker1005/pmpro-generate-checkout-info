<?php
/**
 * Plugin Name: PMPro Generate Checkout Info
 * Description: Quickly fill out checkout information for a test user
 * Author: David Parker
 */

/**
 * Enqueue scripts on the frontend.
 */
function pmprogci_enqueue_scripts() {

	if ( ! function_exists( 'pmpro_getLevelAtCheckout' ) ) {
		return;
	}

	global $gateway, $pmpro_level, $pmpro_review, $pmpro_pages, $post, $pmpro_msg, $pmpro_msgt;

	// If post not set, bail.
	if ( ! isset( $post ) ) {
		return;
	}

	//make sure we're on the checkout page
	if ( ! is_page( $pmpro_pages['checkout'] ) && ! empty( $post ) && strpos( $post->post_content, '[pmpro_checkout' ) === false) {
		return;
	}

	wp_register_script( 'generate-checkout-info', plugins_url( 'js/pmprogci-generate-checkout-info.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'generate-checkout-info' );

}
add_action( 'wp_enqueue_scripts', 'pmprogci_enqueue_scripts' );

function pmprogci_create_button() {
	?>
		<hr/>
		Base email for generating new user: 
		<input type="text" id="pmprogci-base-email" value="<?php echo( get_option('admin_email') ) ?>"><br>
		<button id='pmprogci-generate' type="button">Generate New User</button>
		
	<?php
}
add_action( 'pmpro_checkout_after_pricing_fields', 'pmprogci_create_button' );

