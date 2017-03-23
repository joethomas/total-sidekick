<?php
/**
 * Child Theme Functions
 */

/* Global Variables & Constants
==============================================================================*/

/**
 * Define the constants for use within the child theme
 *
 * @since 1.0.0
 */

// Child theme
$theme = wp_get_theme();

define( 'CHILD_THEME', get_stylesheet() ); // name of the child theme folder in wp-content/themes
define( 'CHILD_THEME_NAME', $theme->get( 'Name' ) );
define( 'CHILD_THEME_URL', $theme->get( 'ThemeURI' ) );
define( 'CHILD_THEME_VERSION', $theme->get( 'Version' ) );
define( 'CHILD_THEME_DOMAIN', $theme->get( 'TextDomain' ) );
define( 'CHILD_THEME_AUTHOR', $theme->get( 'Author' ) );
define( 'CHILD_THEME_AUTHOR_URI', $theme->get( 'Author URI' ) );
define( 'CHILD_THEME_PREFIX', $theme->get( 'TextDomain' ) );

// Child theme paths
define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'CHILD_THEME_DIR_URI', get_stylesheet_directory_uri() );

// Child theme directory paths
define( 'CHILD_THEME_INC_DIR', CHILD_THEME_DIR . '/includes' );
define( 'CHILD_THEME_INC_DIR_URI', CHILD_THEME_DIR_URI . '/includes' );

define( 'CHILD_THEME_LIB_DIR', CHILD_THEME_DIR . '/library' );
define( 'CHILD_THEME_LIB_DIR_URI', CHILD_THEME_DIR_URI . '/library' );

define( 'CHILD_THEME_CSS_DIR', CHILD_THEME_INC_DIR . '/css' );
define( 'CHILD_THEME_CSS_DIR_URI', CHILD_THEME_INC_DIR_URI . '/css' );

define( 'CHILD_THEME_FONTS_DIR', CHILD_THEME_INC_DIR . '/fonts' );
define( 'CHILD_THEME_FONTS_DIR_URI', CHILD_THEME_INC_DIR_URI . '/fonts' );

define( 'CHILD_THEME_JS_DIR', CHILD_THEME_INC_DIR . '/js' );
define( 'CHILD_THEME_JS_DIR_URI', CHILD_THEME_INC_DIR_URI . '/js' );

// Parent theme paths
define( 'PARENT_THEME_DIR', get_template_directory() );
define( 'PARENT_THEME_DIR_URI', get_template_directory_uri() );

// Plugins
define( 'CHILD_THEME_AUTOPTIMIZE_ACTIVE', class_exists( 'autoptimizeBase' ) );
define( 'CHILD_THEME_GRAVITY_FORMS_ACTIVE', class_exists( 'RGForms' ) );
define( 'CHILD_THEME_VISUAL_COMPOSER_ACTIVE', class_exists( 'Vc_Manager' ) );


/* Bootstrap Files
==============================================================================*/

/* Child Theme Add-Ons
------------------------------------------------------------------------------*/

// Add child theme styles.
require_once( CHILD_THEME_INC_DIR . '/styles.php' );

// Add custom fonts.
require_once( CHILD_THEME_INC_DIR . '/fonts.php' );

// Add child theme scripts.
//require_once( CHILD_THEME_INC_DIR . '/scripts.php' );

// Add sidebars (widget areas).
//require_once( CHILD_THEME_INC_DIR . '/sidebars.php' );

// Add image sizes the Total way (see Theme "Image Sizes" page).
//require_once( CHILD_THEME_INC_DIR . '/image-sizes-total.php' );

// Add image sizes the WordPress way (adds image sizes and displays in Media Uploader).
//require_once( CHILD_THEME_INC_DIR . '/image-sizes-wp.php' );

// Add shortcodes.
//require_once( CHILD_THEME_INC_DIR . '/shortcodes.php' ); // shortcodes

// Configure child theme updates.
require_once( CHILD_THEME_INC_DIR . '/updates.php' ); // theme updates


/* Child Theme Configuration
------------------------------------------------------------------------------*/

// Total admin.
require_once( CHILD_THEME_INC_DIR . '/admin-total.php' );

// Add selectors to theme accent color array.
//require_once( CHILD_THEME_INC_DIR . '/config-accent-colors.php' );

// Modify theme recommended plugin behavior.
require_once( CHILD_THEME_INC_DIR . '/recommended-plugins-total.php' );

// Topbar (Total)
require_once( CHILD_THEME_INC_DIR . '/topbar-total.php' );

// Header (Total)
//require_once( CHILD_THEME_INC_DIR . '/header.php' );

// Title Backgrounds (Total)
//require_once( CHILD_CONFIG_DIR . '/config-title-backgrounds.php' );

// Blog Related Posts
//require_once( CHILD_CONFIG_DIR . '/config-blog-post-related.php' );

// Portfolio (Single) Related Posts
//require_once( CHILD_CONFIG_DIR . '/config-portfolio-single-related.php' );

// Portfolio (Single) URL Path
//require_once( CHILD_CONFIG_DIR . '/config-portfolio-single-url-path.php' );

// Social sharing (Total)
//require_once( CHILD_CONFIG_DIR . '/config-social-sharing.php' );

// RSS feeds (Total)
//require_once( CHILD_CONFIG_DIR . '/config-rss-feeds.php' );

/* WordPress Configuration
------------------------------------------------------------------------------*/

//require_once( CHILD_CONFIG_DIR . '/config-meta-wp.php' ); // metadata


/* Plugin > Gravity Forms
-------------------------------------------------------------------------------*/

if ( CHILD_THEME_GRAVITY_FORMS_ACTIVE ) {
	require_once( CHILD_THEME_INC_DIR .'/plugins/gravityforms/config-gravityforms.php' );
}


/* Plugin > Visual Composer
-------------------------------------------------------------------------------*/

if ( CHILD_THEME_VISUAL_COMPOSER_ACTIVE ) {
	// Visual Composer Configuration
	require_once( CHILD_THEME_INC_DIR . '/plugins/visual-composer/config-visual-composer.php' );

	// Visual Composer > Total custom Visual Composer modules
	require_once( CHILD_THEME_INC_DIR . '/plugins/visual-composer/config-visual-composer-total.php' );
}

