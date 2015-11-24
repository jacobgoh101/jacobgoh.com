<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Enqueue Google Font Roboto
add_action( 'wp_enqueue_scripts', 'enqueue_google_font_Roboto');
function enqueue_google_font_Roboto() {	
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,700', array(), CHILD_THEME_VERSION );
}

//* Remove primary nav from its original position
remove_action( 'genesis_after_header', 'genesis_do_nav' );

//* Add Widget for home contact form
genesis_register_sidebar( array(
    'id'        => 'for-home-contact-form',
    'name'      => 'For Home Contact Form',
    'description'   => '',
) );

// Register JS Scripts: GSAP, ScrollMagic.js
function register_script_gsap_scrollmagic()
{
	//GSAP
    wp_register_script( 'gsap-css', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js' );
    wp_register_script( 'gsap-ease', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js' );
    wp_register_script( 'gsap-tweenlite', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js' );

    // ScrollMagic.js
    wp_register_script( 'scrollmagic-main', 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js' );
    wp_register_script( 'scrollmagic-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js' );
    wp_register_script( 'scrollmagic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/debug.addIndicators.js' );
     
    // For either a plugin or a theme, you can then enqueue the script:
    //wp_enqueue_script( 'gsap-css' );
}
add_action( 'wp_enqueue_scripts', 'register_script_gsap_scrollmagic' );