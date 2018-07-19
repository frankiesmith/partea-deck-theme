<?php
/**
 * Template Name: Contact
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
    <div class="contact container">
    <div class="column">
          <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>
    </div>
    <div class="column">
        <?php
        $background_img = get_post_meta( get_the_ID(), '_partea_partea_contact_image_id', true );
          printf(
            '<div class="contact-image" style="background-image:url(%s);"></div>',
            wp_get_attachment_image_url( $background_img, 'large' )
          );

          echo "\n";
      ?>

      <div class="contact-info">
        <p><strong>Phone:</strong><a href="tel:7818209819"> 781-820-9819</a><p>
        <p><strong>Email:</strong><a href="mailto:info@infusethebooze.com"> info@infusethebooze.com</a><p>
      </div>
    </div>

  </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
