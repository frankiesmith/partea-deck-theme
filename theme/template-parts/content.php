<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="blog-header fade-in-right">
    <div class="blog-info">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="blog-title">', '</h1>' );
    else :
      the_title( '<h2 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;

    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">

    </div><!-- .entry-meta -->
    </div>
    <div class="blog-image" style="background-image:url(<?= get_the_post_thumbnail_url($post,'full'); ?>);"></div>

          <?php
    endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content slideUp">
    <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fivehdstarter' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fivehdstarter' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">

  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
