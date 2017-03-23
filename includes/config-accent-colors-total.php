<?php
/**
 * Total Accent Colors Configuration Functions
 *
 * @package Child Theme
 */

/* Total Accent Colors
-------------------------------------------------------------------------------*/

// Add more elements to the accent color backgrounds
function joe_total_accent_backgrounds( $elements ) {
	$elements[] = 'input[type="checkbox"]:checked';
	$elements[] = '.gform_wrapper ul.gfield_checkbox li input[type=checkbox]:checked';
	return $elements;
}
add_filter( 'wpex_accent_backgrounds', 'joe_total_accent_backgrounds' );

// Add more elements to the accent color borders
function joe_total_accent_borders( $elements ) {
	$elements[] = 'input[type=radio]:checked';
	$elements[] = '.gform_wrapper ul.gfield_radio li input[type=radio]:checked';
	return $elements;
}
add_filter( 'wpex_accent_borders', 'joe_total_accent_borders' );

// Add more elements to the accent color texts
function joe_total_accent_texts( $elements ) {
	$elements[] = '.text-primary';
	$elements[] = '#site-header.overlay-header.light-style.wpex-dropdown-style-black #site-navigation .dropdown-menu ul li a:hover';
	$elements[] = '.gform_wrapper .gfield_required';
	return $elements;
}
add_filter( 'wpex_accent_texts', 'joe_total_accent_texts' );