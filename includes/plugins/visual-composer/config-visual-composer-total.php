<?php
/**
 * Visual Composer > Total Custom Modules Configuration Functions
 */

/* Typography Styles
-------------------------------------------------------------------------------*/

// Add more typography styles to rows and columns (—> PLUGIN)
function joe_total_typography_styles( $styles ) {
	$styles['my-typography-style'] = __( 'My Typography Style', 'total-sidekick' );
	return $styles;
}
//add_filter( 'wpex_typography_styles', 'joe_total_typography_styles' );


/* Button Colors
-------------------------------------------------------------------------------*/

// Add more colors to the button text color selection (—> OPTIONS)
function joe_total_button_colors( $colors ) {
	$colors['text-primary']   = __( 'Accent', 'total-sidekick' );
	//$colors['text-secondary'] = __( 'Secondary', 'total-sidekick' );
	return $colors;
}
add_filter( 'wpex_button_colors', 'joe_total_button_colors' );

/* Image Hover
-------------------------------------------------------------------------------*/

// Add custom image hover overlay styles (—> PLUGIN)
function joe_new_image_overlay_styles( $overlays ) {
	$overlays['overlay-plus-hover-no-fade'] = __( 'Plus Icon Hover (No Fade)', 'total-sidekick' );
	$overlays['overlay-plus-black-hover-no-fade'] = __('Plus Icon (Black) Hover (No Fade)', 'total-sidekick' );
	return $overlays;
}
add_filter( 'wpex_overlay_styles_array', 'joe_new_image_overlay_styles' );

// Add custom CSS3 image hover effects (—> PLUGIN)
function joe_new_image_hover_overlays( $image_hovers ) {
	$image_hovers['fade-out-blur-white-inside-border'] = __( 'Fade Out + Blur + White Inside Border', 'total-sidekick' );
	$image_hovers['fade-in-blur-black-inside-border'] = __( 'Fade In + Blur + Black Inside Border', 'total-sidekick' );
	$image_hovers['blur-white-inside-border'] = __( 'Blur + White Inside Border', 'total-sidekick' );
	$image_hovers['grow-white-inside-border'] = __( 'Grow + White Inside Border', 'total-sidekick' );
	return $image_hovers;
}
add_filter( 'wpex_image_hovers', 'joe_new_image_hover_overlays' );