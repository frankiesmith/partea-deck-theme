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

      <!-- Slider -->
      <div class="slider-wrapper">
        <div class="slider">
          <div class="arrow animated infinite pulse">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 161"><defs><style>.cls-1{fill:#fff}</style></defs><path class="cls-1" transform="rotate(135 170 81)" d="M81 57h177v51H81z"/><path class="cls-1" transform="rotate(45 82 81)" d="M-8 57h177v51H-8z"/></svg>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script>
            $(function() {

              jQuery.fn.autoscroll = function(selector) {
                $('html, body').animate({
                  scrollTop: $(this).offset().top
                }, 900);
              }

              $('.arrow').on('click', function() {
                $('.content').autoscroll();
              });
            })
          </script>

        </div>
      </div>

      <!-- Content -->
      <div class="container">
        <div class="content">
          <div class="headline">
            <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>
          </div>
          <div class="resp-container">
            <iframe class="resp-iframe" src="https://www.youtube.com/embed/D5uBwFbIZLE" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_sidebar();
get_footer();