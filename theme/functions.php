<?php

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
