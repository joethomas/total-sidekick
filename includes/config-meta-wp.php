<?php
/**
 * Meta Configuration Functions
 */

/* HTML Metadata
-------------------------------------------------------------------------------*/

/**
 * Remove WordPress generator/version
 *
 * @since 1.0.0
 */
function joe_remove_wp_version() {
	return '';
}
add_filter( 'the_generator', 'joe_remove_wp_version' );