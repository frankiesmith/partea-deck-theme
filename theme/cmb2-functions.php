<?php


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

  /*Jalepeno*/

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

      /*Orange Spice*/

  $recipe_box_orange = new_cmb2_box( array(
    "id"            => $prefix . 'recipe_box_orange',
    "title"         => __( 'Orange', 'cmb2' ),
    "object_types"  => array( "page" ), // Post type
    "context"       => "normal",
    "priority"      => "high",
    "show_names"    => true, // Show field names on the left
    "show_on"    => array( 'key' => 'page-template', 'value' => 'template-recipes.php' ),
    "repeatable"  => true,
  ) );

  $recipe_orange_group_id = $recipe_box_orange->add_field( array(
      'id'   => $prefix . 'recipe_content_orange',
      'type' => 'group',
      'options'     => array(
      'group_title'   => __( 'Recipe {#}', 'cmb2' ),
      'add_button'    => __( 'Add Another Recipe', 'cmb2' ),
      'remove_button' => __( 'Remove Recipe', 'cmb2' ),
      'sortable'      => true,
      ),
    ) );

  $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
      'name' => 'Recipe Name',
      'id'   => $prefix . 'recipe_name',
      'type' => 'text',
    ) );

  $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
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

  $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
        'name'    => 'Ingredient 1',
        'id'      => $prefix . 'recipe_ingredient_one',
        'type'    => 'text',
    ) );
  
  $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
        'name'    => 'Ingredient 2',
        'id'      => $prefix . 'recipe_ingredient_two',
        'type'    => 'text',
    ) );

    $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
        'name'    => 'Ingredient 3',
        'id'      => $prefix . 'recipe_ingredient_three',
        'type'    => 'text',
    ) );

    $recipe_box_orange->add_group_field( $recipe_orange_group_id, array(
        'name'    => 'Ingredient 4',
        'id'      => $prefix . 'recipe_ingredient_four',
        'type'    => 'text',
    ) );

        /*ginger*/

  $recipe_box_ginger = new_cmb2_box( array(
    "id"            => $prefix . 'recipe_box_ginger',
    "title"         => __( 'Ginger', 'cmb2' ),
    "object_types"  => array( "page" ), // Post type
    "context"       => "normal",
    "priority"      => "high",
    "show_names"    => true, // Show field names on the left
    "show_on"    => array( 'key' => 'page-template', 'value' => 'template-recipes.php' ),
    "repeatable"  => true,
  ) );

  $recipe_ginger_group_id = $recipe_box_ginger->add_field( array(
      'id'   => $prefix . 'recipe_content_ginger',
      'type' => 'group',
      'options'     => array(
      'group_title'   => __( 'Recipe {#}', 'cmb2' ),
      'add_button'    => __( 'Add Another Recipe', 'cmb2' ),
      'remove_button' => __( 'Remove Recipe', 'cmb2' ),
      'sortable'      => true,
      ),
    ) );

  $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
      'name' => 'Recipe Name',
      'id'   => $prefix . 'recipe_name',
      'type' => 'text',
    ) );

  $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
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

  $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
        'name'    => 'Ingredient 1',
        'id'      => $prefix . 'recipe_ingredient_one',
        'type'    => 'text',
    ) );
  
  $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
        'name'    => 'Ingredient 2',
        'id'      => $prefix . 'recipe_ingredient_two',
        'type'    => 'text',
    ) );

    $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
        'name'    => 'Ingredient 3',
        'id'      => $prefix . 'recipe_ingredient_three',
        'type'    => 'text',
    ) );

    $recipe_box_ginger->add_group_field( $recipe_ginger_group_id, array(
        'name'    => 'Ingredient 4',
        'id'      => $prefix . 'recipe_ingredient_four',
        'type'    => 'text',
    ) );

        /*espresso*/

  $recipe_box_espresso = new_cmb2_box( array(
    "id"            => $prefix . 'recipe_box_espresso',
    "title"         => __( 'Espresso', 'cmb2' ),
    "object_types"  => array( "page" ), // Post type
    "context"       => "normal",
    "priority"      => "high",
    "show_names"    => true, // Show field names on the left
    "show_on"    => array( 'key' => 'page-template', 'value' => 'template-recipes.php' ),
    "repeatable"  => true,
  ) );

  $recipe_espresso_group_id = $recipe_box_espresso->add_field( array(
      'id'   => $prefix . 'recipe_content_espresso',
      'type' => 'group',
      'options'     => array(
      'group_title'   => __( 'Recipe {#}', 'cmb2' ),
      'add_button'    => __( 'Add Another Recipe', 'cmb2' ),
      'remove_button' => __( 'Remove Recipe', 'cmb2' ),
      'sortable'      => true,
      ),
    ) );

  $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
      'name' => 'Recipe Name',
      'id'   => $prefix . 'recipe_name',
      'type' => 'text',
    ) );

  $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
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

  $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
        'name'    => 'Ingredient 1',
        'id'      => $prefix . 'recipe_ingredient_one',
        'type'    => 'text',
    ) );
  
  $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
        'name'    => 'Ingredient 2',
        'id'      => $prefix . 'recipe_ingredient_two',
        'type'    => 'text',
    ) );

    $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
        'name'    => 'Ingredient 3',
        'id'      => $prefix . 'recipe_ingredient_three',
        'type'    => 'text',
    ) );

    $recipe_box_espresso->add_group_field( $recipe_espresso_group_id, array(
        'name'    => 'Ingredient 4',
        'id'      => $prefix . 'recipe_ingredient_four',
        'type'    => 'text',
    ) );

        /*wildberry*/

  $recipe_box_wildberry = new_cmb2_box( array(
    "id"            => $prefix . 'recipe_box_wildberry',
    "title"         => __( 'Wildberry', 'cmb2' ),
    "object_types"  => array( "page" ), // Post type
    "context"       => "normal",
    "priority"      => "high",
    "show_names"    => true, // Show field names on the left
    "show_on"    => array( 'key' => 'page-template', 'value' => 'template-recipes.php' ),
    "repeatable"  => true,
  ) );

  $recipe_wildberry_group_id = $recipe_box_wildberry->add_field( array(
      'id'   => $prefix . 'recipe_content_wildberry',
      'type' => 'group',
      'options'     => array(
      'group_title'   => __( 'Recipe {#}', 'cmb2' ),
      'add_button'    => __( 'Add Another Recipe', 'cmb2' ),
      'remove_button' => __( 'Remove Recipe', 'cmb2' ),
      'sortable'      => true,
      ),
    ) );

  $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
      'name' => 'Recipe Name',
      'id'   => $prefix . 'recipe_name',
      'type' => 'text',
    ) );

  $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
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

  $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
        'name'    => 'Ingredient 1',
        'id'      => $prefix . 'recipe_ingredient_one',
        'type'    => 'text',
    ) );
  
  $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
        'name'    => 'Ingredient 2',
        'id'      => $prefix . 'recipe_ingredient_two',
        'type'    => 'text',
    ) );

    $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
        'name'    => 'Ingredient 3',
        'id'      => $prefix . 'recipe_ingredient_three',
        'type'    => 'text',
    ) );

    $recipe_box_wildberry->add_group_field( $recipe_wildberry_group_id, array(
        'name'    => 'Ingredient 4',
        'id'      => $prefix . 'recipe_ingredient_four',
        'type'    => 'text',
    ) );

}

add_action( 'cmb2_admin_init', 'partea_cmb2_metaboxes' );
