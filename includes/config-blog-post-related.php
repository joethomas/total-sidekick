<?php
/**
 * Related Blog Posts Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Related Blog Posts Query
-------------------------------------------------------------------------------*/

// Change Related Blog Posts query arguments
function joe_related_blog_posts_query( $args ) {

    // Remove tax_query parameter so it doesn't try and display items from the same category
    //$args['tax_query'] = NULL;

    // Change orderby parameter from random to date
    //$args['orderby'] = 'date';

    // Return args
    return $args;

}
add_filter( 'wpex_blog_post_related_query_args', 'joe_related_blog_posts_query' );