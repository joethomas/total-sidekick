<?php
/**
 * Total Admin Configuration Functions
 */

/* Theme Mods
==============================================================================*/

/**
 * Remove theme_mods set to their default value to slim down your theme_mods array
 *
 * @link http://wpexplorer-themes.com/total/snippets/remove-mods-set-to-default-value/
 * @since 1.0.0
 */
add_filter( 'wpex_remove_default_mods', '__return_true' );