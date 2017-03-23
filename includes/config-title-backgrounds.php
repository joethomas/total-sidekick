<?php
/**
 * Title Backgrounds Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Title Backgrounds
-------------------------------------------------------------------------------*/

// Set title style to Background Image if a featured image exists
function joe_page_title_style( $style ) {
	if ( is_singular( 'post' ) && ! $style && has_post_thumbnail() ) { // If multiple post types, use is_singular( array( 'post', 'portfolio' ) )
		$style = 'background-image';
	}
	return $style;
}
add_filter( 'wpex_page_header_style', 'joe_page_title_style' );

// Sets the Title Background Image to featured image if a featured image exists
function joe_page_title_featured_image( $image ) {
	if ( is_singular( 'post' ) && has_post_thumbnail() ) {
		$image = get_post_thumbnail_id();
	}
	return $image;
}
add_filter( 'wpex_page_header_background_image', 'joe_page_title_featured_image' );