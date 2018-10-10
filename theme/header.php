<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

?>
  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site ">

      <header id="masthead" class="site-header">
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo; ?><?php echo file_get_contents( get_template_directory() . '/img/partea_logo.svg' ); ?></a>
        </div>
        <!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation nav-bar">
          <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>

    </div>
    </nav>
    <!-- #site-navigation -->

    <div class="mobile-menu">
      <div class="hamburger-wrapper">
      <a class="hamburger-icon" href="#" title="Menu">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </a>
      </div>
      <div class="menu-wrapper">
        <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $(".hamburger-icon").on('click', function() {
            $(".menu-wrapper").toggleClass("open");
          });
        });

        $( document ).ready(function() {
  var hamburger = $('.hamburger-icon');
  hamburger.click(function() {
     hamburger.toggleClass('active');
     return false;
  });
});
      </script>
    </div>
    <!-- #mobile-nav -->

    </header>
    <!-- #masthead -->
    </div>

    <div id="content" class="site-content">