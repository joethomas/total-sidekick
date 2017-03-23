<?php
/**
 * RSS Feeds Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Better RSS Feeds
-------------------------------------------------------------------------------*/

function joe_better_rss_feed( $content ) {

	// Get post
	global $post;

	// Generate 50 word excerpt using the Total wpex_excerpt function
	// This will strip out shortcodes from the Visual Composer
	$content = wpex_get_excerpt( array(
		'length' => 50,
		'more'   => false // Remove ellipsis
	) );

	// Display post thumbnail if defined
	if ( has_post_thumbnail( $post->ID ) ){
		$content = '' . get_the_post_thumbnail( $post->ID, 'full', array( 'style' => 'float: left; margin: 0 15px 5px 0;' ) ) . '' . $content;
	}

	// Return the content
	return $content;

}
add_filter( 'the_excerpt_rss', 'joe_better_rss_feed', 999 );
add_filter( 'the_content_feed', 'joe_better_rss_feed', 999 );