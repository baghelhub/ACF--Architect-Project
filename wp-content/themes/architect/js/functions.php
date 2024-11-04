<?php
/**
 * Theme Functions
 * All theme functions should be in this file.
 */


/** Setup basic helpers for the theme. */
add_action( 'after_setup_theme', function() {

  //Add Excerpt to Pages
  add_post_type_support( 'page', 'excerpt' );
  
  // This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); 

	// Register Menu locations.
	register_nav_menus( array(
    'primary' => 'Primary Navigation',
  ));

});

// INCLUDE REQUIRED FILES TO THE THEME
include('includes/branding.php'); // Load Template Utilities
include('includes/responsive-nav.php'); // Responsive Nav
include('includes/scripts.php'); // Load Scripts (CSS and JS files)
include('includes/cpt/cpt-team.php'); 
include('includes/cpt/cpt-project.php'); 


//ENABLE ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
} 



// hooks your functions into the correct filters
function wdm_add_mce_button() {
  add_filter( 'mce_external_plugins', 'wdm_add_tinymce_plugin' );
  add_filter( 'mce_buttons', 'wdm_register_mce_button' );
}
add_action('init', 'wdm_add_mce_button');

function wdm_register_mce_button( $buttons ) {
  array_push( $buttons, 'wdm_mce_button' );
  return $buttons;
}


function wdm_add_tinymce_plugin( $plugin_array ) {
  $plugin_array['wdm_mce_button'] = get_stylesheet_directory_uri() .'/js/wdm-mce-button.js';
  return $plugin_array;
}

