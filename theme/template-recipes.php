<?php
/**
 * Template Name: Recipes
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
<!--     <div class="hero">
      <?php
        $background_img = get_post_meta( get_the_ID(), '_partea_partea_header_image_id', true );
          printf(
            '<div class="hero-image" style="background-image:url(%s);"></div>',
            wp_get_attachment_image_url( $background_img, 'large' )
          );

          echo "\n";
      ?>
    </div> -->
    <div class="container">

    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

      </div>

<div class="recipe-menu">
  <a href="#jalepeno"><span class="jalepeno"></span></a>
  <a href="#orange"><span class="orange"></span></a>
  <a href="#ginger"><span class="ginger"></span></a>
  <a href="#espresso"><span class="espresso"></span></a>
  <a href="#wildberry"><span class="wildberry"></span></a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function toggleRecipeMenu() {
      if ($(this).scrollTop() > 300) {
        $(".recipe-menu").fadeIn();
      } else {
        $(".recipe-menu").fadeOut();
      }
    }

    $(window).scroll( toggleRecipeMenu );

    $(toggleRecipeMenu);
  </script>

</div>



<!--   Jalepeno Cards -->

    <div id="jalepeno" class="jalepeno swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Margarita</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>0.75oz fresh lime juice</li>
        <li>0.75oz triple sec</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy & Pink</li>
        <li>1.5oz Jalapeno vodka</li>
        <li>0.5oz elderflower liqueur</li>
        <li>3oz pink grapefruit juice</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Bloody Mary</li>
        <li>1.5oz Jalapeno vodka</li>
        <li>4oz. tomato juice</li>
        <li>Worcestershire sauce, horseradish, lemon and lime juice, celery salt, garlic powder</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
    </div>
    </div>

<!--   Orange spice Cards -->

    <div id="orange" class="orange swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Margarita</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>0.75oz fresh lime juice</li>
        <li>0.75oz triple sec</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy & Pink</li>
        <li>1.5oz Jalapeno vodka</li>
        <li>0.5oz elderflower liqueur</li>
        <li>3oz pink grapefruit juice</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
        <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Bloody Mary</li>
        <li>1.5oz Jalapeno vodka</li>
        <li>4oz. tomato juice</li>
        <li>Worcestershire sauce, horseradish, lemon and lime juice, celery salt, garlic powder</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
      </div>
  </div>
    </div>
    </div>

<!--   Ginger Cards -->

    <div id="ginger" class="ginger swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Margarita</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
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
    </div>
    </div>

<!--   Espresso Cards -->

    <div id="espresso" class="espresso swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Margarita</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
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
    </div>
    </div>

<!--   Wildberry Cards -->

    <div id="wildberry" class="wildberry swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="recipe-image">
      </div>
      <ul class="swiper-content">
        <li class="recipe-name">Spicy Margarita</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <li>1.5oz Jalapeno tequila</li>
        <div class="recipe-icon">
        </div>
      </ul>
      <div class="recipe-footer">
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


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
