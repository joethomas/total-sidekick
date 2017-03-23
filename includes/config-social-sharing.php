<?php
/**
 * Total Social Sharing Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Social Sharing
-------------------------------------------------------------------------------*/
/**
 * Enable social sharing on custom post types
 * @since 1.0.0
 */
function joe_social_share_cpt( $bool ) {
	if ( is_singular( 'YOUR_POST_TYPE_NAME' ) ) {
		$bool = true;
	}
	return $bool;
}
add_filter( 'wpex_has_social_share', 'joe_social_share_cpt' );