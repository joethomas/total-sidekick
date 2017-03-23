<?php
/**
 * Header Configuration
 */

/* Overlay Header
==============================================================================*/

/**
 * Add Overlay Header Styles (—> PLUGIN)
 */

function joe_add_overlay_header_styles( $array ) {
	$overlay_header_styles = $array['header']['settings']['overlay_header_style']['options'];
	$new_overlay_header_styles_styles = array(
		'glass-white' => __( 'Glass + White Text', 'total-sidekick' ),
		'glass-black' => __( 'Glass + Black Text', 'total-sidekick' ),
		'glass-frosted-white' => __( 'Glass (Frosted) + White Text', 'total-sidekick' ),
		'glass-frosted-black' => __( 'Glass (Frosted) + Black Text', 'total-sidekick' ),
		'glass-tinted-white' => __( 'Glass (Tinted) + White Text', 'total-sidekick' ),
		'glass-tinted-black' => __( 'Glass (Tinted) + Black Text', 'total-sidekick' ),
	);
	$array['header']['settings']['overlay_header_style']['options'] = $overlay_header_styles + $new_overlay_header_styles_styles;
	return $array;
}
add_filter( 'wpex_metabox_array', 'joe_add_overlay_header_styles' );

/* Overlay Header Styles Dropdown Menu Style
-------------------------------------------------------------------------------*/

// Revert dropdown menu style to style chosen in Customizer
function joe_tweak_header_classes( $classes ) {
	if ( wpex_global_obj( 'has_overlay_header' ) ) {
		// Remove black dropdowns
		unset( $classes['wpex-dropdown-style-black'] );

		// Add dropdown style class as selected in Customizer
		if ( $dropdown_style = wpex_get_mod( 'menu_dropdown_style' ) ) {
		    $classes[] = 'wpex-dropdown-style-'. $dropdown_style;
		}

		// Return classes
		return $classes;
	}
}
//add_filter( 'wpex_header_classes', 'joe_tweak_header_classes' );