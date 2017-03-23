<?php
/**
 * Custom Sidebars Functions (—> PLUGIN)
 */

/* Register Custom Sidebars
-------------------------------------------------------------------------------*/

// Register Sidebars
function joe_register_custom_sidebars() {

	// Before Footer Sidebar
	register_sidebar( array(
		'name'          => __( 'Before Footer', 'total-sidekick' ),
		'id'            => 'joe-before-footer',
		'description'   => __( 'Appears before the footer of the site.', 'total-sidekick' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// After Footer Sidebar
	register_sidebar( array(
		'name'          => __( 'After Footer', 'total-sidekick' ),
		'id'            => 'joe-after-footer',
		'description'   => __( 'Appears after the footer of the site.', 'total-sidekick' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'joe_register_custom_sidebars', 11 );

/* Custom Page Settings Metabox Fields
-------------------------------------------------------------------------------*/

function joe_custom_sidebars_wpex_metabox_fields( $array ) {

	// Add new select field to "Footer" tab to enable or disable the "Before Footer" sidebar
	$array['footer']['settings']['joe_enable_before_footer'] = array(
		'title'         => __( 'Before Footer', 'total-sidekick' ), // Custom field title
		'id'            => 'joe_enable_before_footer', // Custom field ID used to retrive via get_post_meta
		'type'          => 'select', // Type to display in the admin
		'description'   => __( 'Enable or disable this element on this page or post.', 'total-sidekick' ), // Custom field description
		'options' => array(
			'' => __( 'Default', 'total-sidekick' ),
			'on' => __( 'Enable', 'total-sidekick' ),
			'off' => __( 'Disable', 'total-sidekick' ),
		),
	);

	// Add new select field to "Footer" tab to enable or disable the "After Footer" sidebar
	$array['footer']['settings']['joe_enable_after_footer'] = array(
		'title'         => __( 'After Footer', 'total-sidekick' ), // Custom field title
		'id'            => 'joe_enable_after_footer', // Custom field ID used to retrive via get_post_meta
		'type'          => 'select', // Type to display in the admin
		'description'   => __( 'Enable or disable this element on this page or post.', 'total-sidekick' ), // Custom field description
		'options' => array(
			'' => __( 'Disable', 'total-sidekick' ),
			'on' => __( 'Enable', 'total-sidekick' ),
		),
	);

	// Return fields
	return $array;

}
add_filter( 'wpex_metabox_array', 'joe_custom_sidebars_wpex_metabox_fields' );


/* Check if Sidebars Are Enabled or Disabled for Post/Page
-------------------------------------------------------------------------------*/

// Before Footer
function joe_has_before_footer() {

	// Enabled by default
	$return = true;

	// Disabled by default on landing page
	if ( is_page_template( 'templates/landing-page.php' ) ) {
		$return = false;
	}

	// Check page settings
	if ( $meta = get_post_meta( get_the_ID(), 'joe_enable_before_footer', true ) ) {
		if ( 'off' == $meta ) {
			$return = false;
		} elseif ( 'on' == $meta ) {
			$return = true;
		}
	}

	// Apply filters and return
	return $return;

}

// After Footer
function joe_has_after_footer() {

	// Disabled by default
	$return = false;

	// Check page settings
	if ( $meta = get_post_meta( get_the_ID(), 'joe_enable_after_footer', true ) ) {
		if ( 'on' == $meta ) {
			$return = true;
		} elseif ( 'off' == $meta ) {
			$return = false;
		}
	}

	// Apply filters and return
	return $return;

}


/* Display Sidebars
-------------------------------------------------------------------------------*/

// Before Footer
function joe_before_footer() {
	if ( is_active_sidebar( 'joe-before-footer' ) && joe_has_before_footer() ) {
		?>
		<div id="before-footer" class="clr">
			<section class="widget-area">
				<?php dynamic_sidebar( 'joe-before-footer' ); ?>
			</section>
		</div>
		<?php
	}
}
add_action( 'wpex_hook_footer_before', 'joe_before_footer', 5 ); // Priority of 5 makes it display before the footer callout (if enabled)

// After Footer
function joe_after_footer() {
	if ( is_active_sidebar( 'joe-after-footer' ) && joe_has_after_footer() ) {
		?>
		<div id="after-footer" class="clr">
			<section class="widget-area">
				<?php dynamic_sidebar( 'joe-after-footer' ); ?>
			</section>
		</div>
		<?php
	}
}
add_action( 'wpex_hook_footer_after', 'joe_after_footer', 100 );