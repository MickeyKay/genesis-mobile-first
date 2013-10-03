<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis - Mobile First' );
define( 'CHILD_THEME_URL', 'http://www.mightyminnow.com/2013/08/our-new-mobile-first-child-theme-for-genesis-2-0/' );
define( 'CHILD_THEME_VERSION', '1.3' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
