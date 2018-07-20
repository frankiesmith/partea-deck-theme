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
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Oswald:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">



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

    <div class="mobile-menu"><a class="dropdown-link">&#9776;</a>
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
          $(".dropdown-link").on('click', function() {
            $(".menu-wrapper").toggleClass("open");
          });
        });
      </script>
    </div>
    <!-- #mobile-nav -->

    </header>
    <!-- #masthead -->
    </div>

    <div id="content" class="site-content">