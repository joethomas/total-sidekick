<?php
/**
 * Child Theme Updates
 */

/* WordPress Repository Updates
-------------------------------------------------------------------------------*/

/**
 * Do not update theme
 *
 * @since 1.0.0
 */
function joe_do_not_update_theme_total_sidekick( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}
add_filter( 'http_request_args', 'joe_do_not_update_theme_total_sidekick', 5, 2 );