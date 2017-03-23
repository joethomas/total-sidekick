<?php
/**
 * Plus Hover (No Fade) Overlay
 *
 * @package Redhead
 * @subpackage Partials
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Only used for inside position
if ( 'inside_link' != $position ) {
	return;
} ?>

<span class="overlay-plus-hover-no-fade overlay-hide theme-overlay"></span>