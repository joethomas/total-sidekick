<?php
/**
 * Shortcodes
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Blog Info (—> PLUGIN)
-------------------------------------------------------------------------------*/

// Current parameters can be found here: http://codex.wordpress.org/Template_Tags/bloginfo
function joe_bloginfo_shortcode( $atts ) {
   extract( shortcode_atts( array(
       'value' => '',
   ), $atts));
   return get_bloginfo($value);
}
add_shortcode('bloginfo', 'joe_bloginfo_shortcode');