<?php
/**
 * Template Name: Recipes
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

    <div class="recipe-cards">
      <!-- Swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="swiper-content">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="swiper-content">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="swiper-content">
      </div>
  </div>
      <div class="swiper-slide">
      <div class="swiper-content">
      </div>
  </div>
      <div class="swiper-slide">
      <div class="swiper-content">
      </div>
  </div>
  <!-- Add Pagination -->
<!--  <div class="swiper-pagination"></div> -->
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.js"></script>
<script>
$(document).ready(function() {
 var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });

});
</script>


    </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
