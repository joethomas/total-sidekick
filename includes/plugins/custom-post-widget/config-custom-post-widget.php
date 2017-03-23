<?php
/**
 * Custom Post Widget Configuration Functions
 * These functions only load if Gravity Forms is enabled.
 *
 * @package Child Theme
 * @subpackage includes/plugins/custom-post-widget
 */

// Make Custom Post Widget post type public, so we can use Visual Composer with it
function joe_make_custom_post_widget_post_type_public() {
	
	$content_block_public = true;
	return $content_block_public;

}
add_filter( 'content_block_post_type', 'joe_make_custom_post_widget_post_type_public' );