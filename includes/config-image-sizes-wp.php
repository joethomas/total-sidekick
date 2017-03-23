<?php
/**
 * Custom Image Sizes (WordPress)
 */

/* Custom Image Sizes (The WordPress Way)
-------------------------------------------------------------------------------*/

// Add custom image sizes
//add_image_size( 'hard-crop-custom-size', 220, 180, true ); // hard crop mode (cropped image size will be 220x180)
//add_image_size( 'hard-crop-location-custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top ('x', 'y') -> 'x' can be 'left', 'center', or 'right'. 'y' can be 'top', 'center', or 'bottom'.
//add_image_size( 'soft-crop-custom-size', 220, 180 ); // soft proportional crop mode (max with is 220; max height is 180)
//add_image_size( 'soft-crop-unlimited-custom-size', 220, 9999 ); // unlimited height mode
add_image_size( 'title-background', 1200, 9999 );

// Display custom image sizes in the Media Uploader
function joe_display_custom_image_sizes( $sizes ) {
    $sizes['title-background'] = __( 'Title Background', 'total-sidekick' );

    return $sizes;
}
add_filter( 'image_size_names_choose', 'joe_display_custom_image_sizes' );