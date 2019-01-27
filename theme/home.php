<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <div class="hero" style="background-image:url(<?= get_the_post_thumbnail_url($post,'full'); ?>);">
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
      <div class="headline">
          <h1>Featured Posts</h1>
        </div>
        <div class="wrapper fade-in">
          <?php get_template_part( 'template-parts/content','featured-blog-posts' ); ?>
  </div>
</div>
  <div class="container two-col">
    <section class="recent-posts">
        <?php get_template_part( 'template-parts/content','recent-posts' ); ?>
        <?php get_template_part( 'template-parts/nav','post-pagination' ); ?>
    </section>
  <div class="tag-search">
<div class="search-content">
<?php get_search_form(); ?>
<?php get_template_part( 'template-parts/content','tag-list' ); ?>
</div>
</div>
</div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
