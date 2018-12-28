<?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <div class="hero">
      <?php
        $background_img = get_post_meta( get_the_ID(), '_partea_partea_header_image_id', true );
          printf(
            '<div class="hero-image" style="background-image:url(%s);"></div>',
            wp_get_attachment_image_url( $background_img, 'large' )
          );

          echo "\n";
      ?>
    </div>
    <div class="featured-posts section">
      <div class="headline zoom">
          <h1>Featured Posts</h1>
        </div>
        <div class="wrapper fade-in">
          <?php get_template_part( 'template-parts/content','featured-blog-posts' ); ?>
  </div>
</div>
  <div class="container two-col">
      <div class="recent-posts slideUp">
        <?php get_template_part( 'template-parts/content','recent-posts' ); ?>
  </div>
  <div class="tag-search">
<?php get_search_form(); ?>
</div>
</div>
      <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
