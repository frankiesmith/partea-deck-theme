<?php

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';



add_theme_support( 'title-tag' );


function fivehd_enqueue_scripts_styles() {
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=' );
  // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), false, true );

  // **Everything** Foundation JS.
  // @todo: allow individual modules to be included, as required.
  wp_enqueue_script( 'foundation-kitchen-sink', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', array('jquery'), '6.4.3', true );
  wp_add_inline_script( 'foundation-kitchen-sink', '(function($){$(document).foundation();})(jQuery);', 'after' );

    wp_enqueue_style( 'fivehdstarter', get_stylesheet_directory_uri() . '/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'fivehd_enqueue_scripts_styles' );

function fivehd_register_nav_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Primary Menu', 'fivehdstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'fivehd_register_nav_menus' );

function fivehd_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'fivehd_widgets_init' );


add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_yourprefix_';

  /**
   * Initiate the metabox
   */
  $cmb = new_cmb2_box( array(
    'id'            => 'test_metabox',
    'title'         => __( 'Test Metabox', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // Keep the metabox closed by default
  ) );

  // Regular text field
  $cmb->add_field( array(
    'name'       => __( 'Test Text', 'cmb2' ),
    'desc'       => __( 'field description (optional)', 'cmb2' ),
    'id'         => $prefix . 'text',
    'type'       => 'text',
    'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
    // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
    // 'on_front'        => false, // Optionally designate a field to wp-admin only
    // 'repeatable'      => true,
  ) );

  // URL text field
  $cmb->add_field( array(
    'name' => __( 'Website URL', 'cmb2' ),
    'desc' => __( 'field description (optional)', 'cmb2' ),
    'id'   => $prefix . 'url',
    'type' => 'text_url',
    // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
    // 'repeatable' => true,
  ) );

  // Email text field
  $cmb->add_field( array(
    'name' => __( 'Test Text Email', 'cmb2' ),
    'desc' => __( 'field description (optional)', 'cmb2' ),
    'id'   => $prefix . 'email',
    'type' => 'text_email',
    // 'repeatable' => true,
  ) );

  // Add other metaboxes as needed

}
