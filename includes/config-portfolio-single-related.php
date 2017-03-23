<?php
/**
 * Portfolio (Single) Related Posts Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Related Portfolio Posts Query
-------------------------------------------------------------------------------*/

// Change Related Portfolio Posts query arguments
function joe_related_portfolio_posts_query( $args ) {

    // Remove tax_query parameter so it doesn't try and display only items from the same category
    $args['tax_query'] = NULL;

    // Change orderby parameter from random to date
    //$args['orderby'] = 'date';

    // Return args
    return $args;

}
add_filter( 'wpex_related_portfolio_args', 'joe_related_portfolio_posts_query' );