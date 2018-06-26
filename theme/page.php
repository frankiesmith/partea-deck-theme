<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <div class="hero">
    </div>
    <div class="container">

    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

  </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
