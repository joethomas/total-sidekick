<?php
/**
 * Portfolio (Single) URL Path Configuration Functions
 *
 * @package Child Theme
 * @subpackage includes
 */

/* Portfolio (Single) URL Path
-------------------------------------------------------------------------------*/

/**
 * Add portfolio category to slug by altering register_post_type args.
 * You can also do this in the editor dashboard instead
 *
 */
function joe_add_portfolio_category_term_to_slug( $args ) {

    // Alter slug
    $args['rewrite']['slug'] = 'portfolio-item/%portfolio_category%';

    // Remove with front
    $args['rewrite']['with_front'] = false;

    // Return args
    return $args;

}
add_filter( 'wpex_portfolio_args', 'joe_add_portfolio_category_term_to_slug' );

/**
 * Alter portfolio post type URL string
 * This method can be used for any post type (staff/testimonials/portfolio) if tweaked correctly.
 */
function joe_alter_portfolio_url( $url, $post ) {

    // Return $url if %portfolio_category%/ not in slug or is not portfolio post type
    if ( 'portfolio' != get_post_type( $post ) || strpos( $url, '%portfolio_category%' ) === false ) {
        return $url;
    }

    // Get post terms
    $terms = wp_get_object_terms( $post->ID, 'portfolio_category' );

    // Get first term to use in front of slug
    if ( ! is_wp_error( $terms ) && ! empty( $terms ) && is_object( $terms[0] ) ) {
        $taxonomy_slug = $terms[0]->slug;
    }

    // Tweak url to turn %portfolio_category% into the first term slug
    if ( ! empty( $taxonomy_slug ) ) {
        $url = str_replace( '%portfolio_category%', $taxonomy_slug, $url );
    }

    // No terms found so simply remove %portfolio_category%
    else {
        $url = str_replace( '%portfolio_category%', '', $url );
    }

    // Return $url
    return $url;

}
add_filter( 'post_type_link', 'joe_alter_portfolio_url', 10, 2 );