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
    <div class="featured-posts fade-in-right">
      <?php echo do_shortcode("[post_grid id='309']"); ?>
  </div>
  <div class="container two-col">
      <div class="recent-posts slideUp">
      <?php echo do_shortcode("[post_grid id='310']"); ?>
  </div>
  <div class="tag-search">
<?php
add_action( 'loop_start', 'list_tags_with_count' );
function list_tags_with_count() {
$tags = get_tags( array('orderby' => 'count', 'order' => 'DESC') );
foreach ( (array) $tags as $tag ) {
echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ') </a></li>';
    }
}
?>
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
