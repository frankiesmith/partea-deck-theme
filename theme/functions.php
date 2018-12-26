<?php

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';
require_once __DIR__ . '/cmb2-functions.php';



add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


function partea_enqueue_scripts_styles() {
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=' );
  // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), false, true );

  // **Everything** Foundation JS.
  // @todo: allow individual modules to be included, as required.
  wp_enqueue_script( 'foundation-kitchen-sink', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', array('jquery'), '6.4.3', true );
  wp_add_inline_script( 'foundation-kitchen-sink', '(function($){$(document).foundation();})(jQuery);', 'after' );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:400,700|Oswald:700' );

    wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );

    wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css' );

    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.0/dist/aos.css' );

    wp_enqueue_style( 'partea', get_stylesheet_directory_uri() . '/theme.css', filemtime(get_stylesheet_directory() . '/theme.css') );

    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/theme.js'), true );

    wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/viewportchecker.js'), true );

}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/styles/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


add_action( 'wp_enqueue_scripts', 'partea_enqueue_scripts_styles' );

function partea_register_nav_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Primary Menu', 'partea' ),
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
    register_sidebar( array(
        'name'          => __( 'Featured Items', 'textdomain' ),
        'id'            => 'featured-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'partea_widgets_init' );

add_action( 'admin_init', 'hide_editor' ); 
function hide_editor() { 
  // Get the Post ID. 
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ; 
  if( !isset( $post_id ) ) return; 
 
  // Hide the editor on a page with a specific page template 
  // Get the name of the Page Template file. 
  $template_file = get_post_meta($post_id, '_wp_page_template', true); 
  if($template_file == 'template-recipes.php'){ // the filename of the page template 
    remove_post_type_support('page', 'editor'); 
  } 
} 
