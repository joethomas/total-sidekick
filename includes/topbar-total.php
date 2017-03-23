<?php
/**
 * Total Topbar Configuration Functions
 *
 * @package Child Theme
 */

/* Topbar Social Icons
-------------------------------------------------------------------------------*/

if ( ! function_exists( 'joe_topbar_social_options' ) ) {
	function joe_topbar_social_options( $social_options ) {
		$social_options = array(
			'twitter'		=> array(
				'label' 	=> __( 'Twitter', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-twitter',
			),
			'facebook'		=> array(
				'label' 	=> __( 'Facebook', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-facebook',
			),
			'googleplus'	=> array(
				'label' 	=> __( 'Google Plus', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-google-plus',
			),
			'houzz'		=> array(
				'label' 	=> __( 'Houzz', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-houzz',
			),
			'pinterest'		=> array(
				'label' 	=> __( 'Pinterest', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-pinterest',
			),
			'dribbble'		=> array(
				'label' 	=> __( 'Dribbble', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-dribbble',
			),
			'vk'			=> array(
				'label' 	=> __( 'Vk', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-vk',
			),
			'instagram'		=> array(
				'label' 	=> __( 'Instragram', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-instagram',
			),
			'linkedin'		=> array(
				'label' 	=> __( 'LinkedIn', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-linkedin',
			),
			'tumblr'		=> array(
				'label' 	=> __( 'Tumblr', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-tumblr',
			),
			'github'		=> array(
				'label' 	=> __( 'Github', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-github-alt',
			),
			'flickr'		=> array(
				'label' 	=> __( 'Flickr', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-flickr',
			),
			'skype'			=> array(
				'label' 	=> __( 'Skype', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-skype',
			),
			'youtube'		=> array(
				'label' 	=> __( 'Youtube', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-youtube',
			),
			'vimeo'			=> array(
				'label' 	=> __( 'Vimeo', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-vimeo-square',
			),
			'xing'			=> array(
				'label' 	=> __( 'Xing', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-xing',
			),
			'yelp'			=> array(
				'label' 	=> __( 'Yelp', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-yelp',
			),
			'rss'			=> array(
				'label' 	=> __( 'RSS', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-rss',
			),
			'email'			=> array(
				'label' 	=> __( 'Email', 'total-sidekick' ),
				'icon_class'	=> 'fa fa-envelope',
			),
		);
		return $social_options;
	}
}
add_filter( 'wpex_topbar_social_options', 'joe_topbar_social_options' );