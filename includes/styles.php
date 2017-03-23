<?php
/**
 * Load all CSS for frontend
 */

// Parent & Brand
function joe_load_styles_main() {

	$parent_theme         = wp_get_theme( 'Total' );
	$parent_theme_version = $parent_theme->get( 'Version' );

	wp_enqueue_style( 'parent', PARENT_THEME_DIR_URI . '/style.css', array(), $parent_theme_version );
	wp_enqueue_style( CHILD_THEME_PREFIX, CHILD_THEME_CSS_DIR_URI . '/style-child.css', array( 'wpex-style' ), CHILD_THEME_VERSION );

	if ( function_exists( 'wpex_add_custom_fonts' ) ) {
		wp_enqueue_style( CHILD_THEME_PREFIX . '-fonts', CHILD_THEME_CSS_DIR_URI . '/style-fonts.css', array( 'wpex-style', CHILD_THEME_PREFIX ), CHILD_THEME_VERSION );
	}

}
add_action( 'wp_enqueue_scripts', 'joe_load_styles_main' );