<?php
/**
 * Visual Composer Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes/plugins/visual-composer
 */

/* Basic Visual Composer Usage
-------------------------------------------------------------------------------*/

// Disable Visual Composer Frontend Editor
//vc_disable_frontend();

/* Frontend
-------------------------------------------------------------------------------*/

// Load custom CSS for Visual Composer
function joe_load_custom_visual_composer_styles() {
	wp_enqueue_style( 'custom-visual-composer', CHILD_THEME_INC_DIR_URI . '/plugins/visual-composer/css/visual-composer.css' );
}
add_action( 'wp_enqueue_scripts', 'joe_load_custom_visual_composer_styles' );

/**
 * Load all custom scripts for Visual Composer
 *
 * @since 1.0.0
 */
function joe_load_vc_scripts() {
	// Hide image title tooltips when using Total's Image Grid VC module or Portfolio Grid
	wp_enqueue_script( 'img-grid-hide-img-title-tooltip', CHILD_THEME_INC_DIR_URI . '/plugins/visual-composer/js/jquery.img-grid-hide-img-title-tooltip.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'portfolio-grid-hide-img-title-tooltip', CHILD_THEME_INC_DIR_URI . '/plugins/visual-composer/js/jquery.portfolio-grid-hide-img-title-tooltip.js', array( 'jquery' ), '1.0', true );
	// Fix Google Maps
	wp_enqueue_script( 'google-map-fix-autoscroll', CHILD_THEME_INC_DIR_URI . '/plugins/visual-composer/js/jquery.google-map-fix-autoscroll.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'joe_load_vc_scripts' );

/* Visual Composer + Autoptimize
-------------------------------------------------------------------------------*/

/**
 * Autoptimize Fix
 * Disable Autoptimize if user is logged in, since it conficts with the Visual Composer frontend editor
 *
 * @link https://wordpress.org/support/topic/autoptimize-conflicts-with-wp-visual-composer#post-6840813
 */
// If Autoptimize plugin is active
if ( CHILD_THEME_AUTOPTIMIZE_ACTIVE ) {
	// Disable Autoptimize if user is logged in, since it conficts with the Visual Composer frontend editor
	function joe_vc_disable_autoptimize() {
		if (is_user_logged_in()) {
			return true;
		} else {
			return false;
		}
	}
	add_filter( 'autoptimize_filter_noptimize', 'joe_vc_disable_autoptimize', 10, 0);
}