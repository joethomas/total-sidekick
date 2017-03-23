<?php
/**
 * Gravity Forms Configuration Functions
 * These functions only load if Gravity Forms is enabled.
 */

/* Frontend
-------------------------------------------------------------------------------*/

// Load custom CSS for Gravity Forms
function joe_load_custom_gravityforms_styles() {

	global $post;

	// If Gravity Forms built-in styles are enabled
	if ( ! get_option( 'rg_gforms_disable_css' ) ) {

		// If [gravityform] shortcode is on page
		if ( has_shortcode( $post->post_content, 'gravityform' ) ) {

			// Load custom Gravity forms styles after Gravity Forms built-in styles & Total's GF styles
			wp_enqueue_style( 'custom-gravityforms', CHILD_INCLUDES_DIR_URI . '/plugins/gravityforms/css/gravityforms.css', array( 'gforms_reset_css', 'gforms_formsmain_css', 'gforms_ready_class_css', 'gforms_browsers_css', 'wpex-gravity-forms' ) );

		}

		// Else, if [gravityform] shortcode is not on page (i.e., if it's added to a widget or directly via PHP)
		else {

		// Load custom Gravity forms styles after Gravity Forms built-in styles
		wp_enqueue_style( 'custom-gravityforms', CHILD_INCLUDES_DIR_URI . '/plugins/gravityforms/css/gravityforms.css', array( 'gforms_reset_css', 'gforms_formsmain_css', 'gforms_ready_class_css', 'gforms_browsers_css' ) );

		}

	}

	// Else, if Gravity Forms built-in styles are disabled
	else {

		// If [gravityform] shortcode is on page
		if ( has_shortcode( $post->post_content, 'gravityform' ) ) {

			// Load custom Gravity Forms styles after Total's GF styles
			wp_enqueue_style( 'custom-gravityforms', CHILD_INCLUDES_DIR_URI . '/plugins/gravityforms/css/gravityforms.css', array( 'wpex-gravity-forms' ) );

		}

		// Else, if [gravityform] shortcode is not on page (i.e., if it's added to a widget or directly via PHP)
		else {

			// Load custom Gravity Forms styles without dependencies
			wp_enqueue_style( 'custom-gravityforms', CHILD_INCLUDES_DIR_URI . '/plugins/gravityforms/css/gravityforms.css' );

		}

	}

}
add_action( 'wp_enqueue_scripts', 'joe_load_custom_gravityforms_styles' );

