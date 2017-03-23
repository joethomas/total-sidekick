<?php
/**
 * Custom Image Sizes (Total)
 */

/* Custom Image Sizes (The Total Way)
-------------------------------------------------------------------------------*/

/**
 * Add to & remove image sizes from the Total "Image Sizes" panel
 * If this method is used, the added custom image sizes will not display in the
 * Media Uploader. To display custom image sizes in the Media Uploader, use the
 * WordPress method in /includes/custom-image-sizes-wp.php.
 *
 * @since 1.0.0
 * @link http://wpexplorer-themes.com/total/snippets/page-header-bg-image-sizes/
 */
function joe_total_image_sizes( $sizes ) {

	// Remove Total image sizes
	//unset( $sizes['blog_post_full'] );

	// Add new image sizes
	$sizes['title_background'] = array(
		'label'     => __( 'Title Background', 'total-sidekick' ), // Label
		'width'     => 'title_background_width', // id for theme_mod width
		'height'    => 'title_background_height', // id for theme_mod height
		'crop'      => 'title_background_crop', // id for theme_mod crop
	);
	return $sizes;

}
add_filter( 'wpex_image_sizes', 'joe_total_image_sizes', 9999 );

// Alter the page header background output
function joe_total_title_background_image( $image ) {
	$post_id       = get_the_ID();
	$attachment_id = get_post_meta( $post_id, 'wpex_post_title_background', true );
	$attachment_id = $attachment_id ? $attachment_id : get_post_meta( $post_id, 'wpex_post_title_background_redux', true );
	if ( $attachment_id && is_numeric( $attachment_id ) ) {
		$image = wpex_get_post_thumbnail_url( array(
			'attachment' => $attachment_id,
			'size'       => 'title_background',
		) );
	}
	return $image;
}
add_filter( 'wpex_page_header_background_image', 'joe_total_title_background_image', 10 );

