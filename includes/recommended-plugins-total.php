<?php
/**
 * Admin (Total) Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Recommended Plugins Notice
-------------------------------------------------------------------------------*/

/**
 * Remove Recommended Plugins notice
 *
 * @since 1.0.0
 * @link http://wpexplorer-themes.com/total/snippets/remove-recommended-plugins-notice/
 */
// Remove notice to install certain plugins
function joe_remove_certain_total_recommended_plugins_notices( $plugins ) {

	unset( $plugins['woocommerce'] );
	unset( $plugins['contact-form-7'] );
	unset( $plugins['LayerSlider'] );
	unset( $plugins['revslider'] );

	// Return plugins
	return $plugins;

}
add_filter( 'wpex_recommended_plugins', 'joe_remove_certain_total_recommended_plugins_notices' );

// Remove notice to install all plugins
function joe_remove_all_total_recommended_plugins_notices() {
    return array();
}
//add_filter( 'wpex_recommended_plugins', 'joe_remove_all_total_recommended_plugins_notices' );