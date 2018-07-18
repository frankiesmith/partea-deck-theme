<?php

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';



add_theme_support( 'title-tag' );


function partea_enqueue_scripts_styles() {
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=' );
  // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), false, true );

  // **Everything** Foundation JS.
  // @todo: allow individual modules to be included, as required.
  wp_enqueue_script( 'foundation-kitchen-sink', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', array('jquery'), '6.4.3', true );
  wp_add_inline_script( 'foundation-kitchen-sink', '(function($){$(document).foundation();})(jQuery);', 'after' );

    wp_enqueue_style( 'fivehdstarter', get_stylesheet_directory_uri() . '/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'partea_enqueue_scripts_styles' );

function partea_register_nav_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Primary Menu', 'fivehdstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'partea_register_nav_menus' );

function partea_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'partea_widgets_init' );


add_action( 'cmb2_admin_init', 'partea_cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function partea_cmb2_metaboxes() {

  
  // Start with an underscore to hide fields from custom fields list
  $prefix = '_partea_';

  /**
   * Initiate the metabox
   */
  $cmb = new_cmb2_box( array(
    'id'            => $prefix . 'header_image_box',
    'title'         => __( 'Header Image', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // Keep the metabox closed by default
    'show_on' => array( 'key' => 'id', 'value' => array( 36,58,89 ) ), // Specific post IDs to display this metabox

  ) );

  $cmb->add_field( array(
  'name'    => 'Image',
  'desc'    => 'Upload an image.',
  'id'      => $prefix . 'partea_header_image',
  'type'    => 'file',
  // Optional:
  'options' => array(
    'url' => false, // Hide the text input for the url
  ),
  'text'    => array(
    'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
  ),
  // query_args are passed to wp.media's library query.
  'query_args' => array(
    //'type' => 'application/pdf', // Make library only display PDFs.
    // Or only allow gif, jpg, or png images
    'type' => array(
    'image/gif',
    'image/jpeg',
    'image/png',
    ),
  ),
  'preview_size' => 'large', // Image size to use when previewing in the admin.
) );

    $cmb = new_cmb2_box( array(
    'id'            => $prefix . 'contact_image_box',
    'title'         => __( 'Contact Image', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // Keep the metabox closed by default
    'show_on' => array( 'key' => 'id', 'value' => array( 89 ) ), // Specific post IDs to display this metabox

  ) );

  $cmb->add_field( array(
  'name'    => 'Image',
  'desc'    => 'Upload an image.',
  'id'      => $prefix . 'partea_contact_image',
  'type'    => 'file',
  // Optional:
  'options' => array(
    'url' => false, // Hide the text input for the url
  ),
  'text'    => array(
    'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
  ),
  // query_args are passed to wp.media's library query.
  'query_args' => array(
    //'type' => 'application/pdf', // Make library only display PDFs.
    // Or only allow gif, jpg, or png images
    'type' => array(
    'image/gif',
    'image/jpeg',
    'image/png',
    ),
  ),
  'preview_size' => 'large', // Image size to use when previewing in the admin.
) );

  /*Recipe Cards*/

  $recipe_box_jalepeno = new_cmb2_box( array(
    "id"            => $prefix . 'recipe_box_jalepeno',
    "title"         => __( 'Jalepeno', 'cmb2' ),
    "object_types"  => array( "page" ), // Post type
    "context"       => "normal",
    "priority"      => "high",
    "show_names"    => true, // Show field names on the left
    "show_on"    => array( 'key' => 'page-template', 'value' => 'template-recipes.php' ),
    "repeatable"  => true,
  ) );

  $recipe_jalepeno_group_id = $recipe_box_jalepeno->add_field( array(
      'id'   => $prefix . 'recipe_content_jalepeno',
      'type' => 'group',
      'options'     => array(
      'group_title'   => __( 'Recipe {#}', 'cmb2' ),
      'add_button'    => __( 'Add Another Recipe', 'cmb2' ),
      'remove_button' => __( 'Remove Recipe', 'cmb2' ),
      'sortable'      => true,
      ),
    ) );

  $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
      'name' => 'Recipe Name',
      'id'   => $prefix . 'recipe_name',
      'type' => 'text',
    ) );

  $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
      'name'    => 'Recipe Image',
      'desc'    => 'Upload an image',
      'id'      => $prefix . 'recipe_image',
      'type'    => 'file',
      // Optional:
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'text'    => array(
        'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
      ),
      // query_args are passed to wp.media's library query.
      'query_args' => array(
        // 'type' => 'application/pdf', // Make library only display PDFs.
        // Or only allow gif, jpg, or png images
        'type' => array(
        'image/gif',
        'image/jpeg',
        'image/png',
        ),
      ),
      'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );

  $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
        'name'    => 'Ingredient 1',
        'default' => 'standard value (optional)',
        'id'      => $prefix . 'recipe_ingredient_one',
        'type'    => 'text',
    ) );
  
  $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
        'name'    => 'Ingredient 2',
        'id'      => $prefix . 'recipe_ingredient_two',
        'type'    => 'text',
    ) );

    $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
        'name'    => 'Ingredient 3',
        'id'      => $prefix . 'recipe_ingredient_three',
        'type'    => 'text',
    ) );

    $recipe_box_jalepeno->add_group_field( $recipe_jalepeno_group_id, array(
        'name'    => 'Ingredient 4',
        'id'      => $prefix . 'recipe_ingredient_four',
        'type'    => 'text',
    ) );


}
