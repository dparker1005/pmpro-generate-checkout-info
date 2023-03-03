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

	if ( ! function_exists( 'pmpro_is_checkout' ) || ! pmpro_is_checkout() ) {
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

