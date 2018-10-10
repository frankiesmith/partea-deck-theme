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
        <a href="#jalepeno" class="jalepeno"></a>
        <a href="#orange" class="orange"></a>
        <a href="#ginger" class="ginger"></a>
        <a href="#espresso" class="espresso"></a>
        <a href="#wildberry" class="wildberry"></a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
          function toggleRecipeMenu() {
            if ($(this).scrollTop() > 300) {
              $(".recipe-menu").fadeIn();
            } else {
              $(".recipe-menu").fadeOut();
            }
          }

          $(window).scroll(toggleRecipeMenu);

          $(toggleRecipeMenu);
        </script>

      </div>



      <!--   Jalepeno Cards -->

      <div id="jalepeno" class="jalepeno swiper-container">
        <div class="swiper-wrapper fade-in">

<?php 

  $jalepeno_recipe_cards = get_post_meta( get_the_ID(), '_partea_recipe_content_jalepeno', true );
    foreach ( (array) $jalepeno_recipe_cards as $key => $jalepeno_recipe_card ) {
      echo( '<div class="swiper-slide">');
      printf( '<div class="recipe-image" style="background-image:url(%s);"></div>', 
        wp_get_attachment_image_url( $jalepeno_recipe_card['_partea_recipe_image_id'], 'large' ) );
      echo( '<div class="swiper-content">');
      printf( '<div class="recipe-name">%s</div>', esc_attr( $jalepeno_recipe_card['_partea_recipe_name'] ) );
      echo( '<ul class="recipe-content">');
      printf( '<li>%s</li>', esc_attr( $jalepeno_recipe_card['_partea_recipe_ingredient_one'] ) );
      printf( '<li>%s</li>', esc_attr( $jalepeno_recipe_card['_partea_recipe_ingredient_two'] ) );
      printf( '<li>%s</li>', esc_attr( $jalepeno_recipe_card['_partea_recipe_ingredient_three'] ) );
      printf( '<li>%s</li>', esc_attr( $jalepeno_recipe_card['_partea_recipe_ingredient_four'] ) );
      echo '</ul>';

      printf( '<div class="recipe-icon"></div>');

      echo '</div>';
      printf( '<div class="recipe-footer"></div>');
      echo '</div>';
}
?>

        </div>
        </div>
          

 <!--   orange Cards -->

      <div id="orange" class="orange swiper-container">
        <div class="swiper-wrapper fade-in">

<?php 

  $orange_recipe_cards = get_post_meta( get_the_ID(), '_partea_recipe_content_orange', true );
    foreach ( (array) $orange_recipe_cards as $key => $orange_recipe_card ) {
      echo( '<div class="swiper-slide">');
      printf( '<div class="recipe-image" style="background-image:url(%s);"></div>', 
        wp_get_attachment_image_url( $orange_recipe_card['_partea_recipe_image_id'], 'large' ) );
      echo( '<div class="swiper-content">');
      printf( '<div class="recipe-name">%s</div>', esc_attr( $orange_recipe_card['_partea_recipe_name'] ) );
      echo( '<ul class="recipe-content">');
      printf( '<li>%s</li>', esc_attr( $orange_recipe_card['_partea_recipe_ingredient_one'] ) );
      printf( '<li>%s</li>', esc_attr( $orange_recipe_card['_partea_recipe_ingredient_two'] ) );
      printf( '<li>%s</li>', esc_attr( $orange_recipe_card['_partea_recipe_ingredient_three'] ) );
      printf( '<li>%s</li>', esc_attr( $orange_recipe_card['_partea_recipe_ingredient_four'] ) );
      echo '</ul>';

      printf( '<div class="recipe-icon"></div>');

      echo '</div>';
      printf( '<div class="recipe-footer"></div>');
      echo '</div>';
}
?>

        </div>
        </div>

 <!--   ginger Cards -->

      <div id="ginger" class="ginger swiper-container">
        <div class="swiper-wrapper fade-in">

<?php 

  $ginger_recipe_cards = get_post_meta( get_the_ID(), '_partea_recipe_content_ginger', true );
    foreach ( (array) $ginger_recipe_cards as $key => $ginger_recipe_card ) {
      echo( '<div class="swiper-slide">');
      printf( '<div class="recipe-image" style="background-image:url(%s);"></div>', 
        wp_get_attachment_image_url( $ginger_recipe_card['_partea_recipe_image_id'], 'large' ) );
      echo( '<div class="swiper-content">');
      printf( '<div class="recipe-name">%s</div>', esc_attr( $ginger_recipe_card['_partea_recipe_name'] ) );
      echo( '<ul class="recipe-content">');
      printf( '<li>%s</li>', esc_attr( $ginger_recipe_card['_partea_recipe_ingredient_one'] ) );
      printf( '<li>%s</li>', esc_attr( $ginger_recipe_card['_partea_recipe_ingredient_two'] ) );
      printf( '<li>%s</li>', esc_attr( $ginger_recipe_card['_partea_recipe_ingredient_three'] ) );
      printf( '<li>%s</li>', esc_attr( $ginger_recipe_card['_partea_recipe_ingredient_four'] ) );
      echo '</ul>';

      printf( '<div class="recipe-icon"></div>');

      echo '</div>';
      printf( '<div class="recipe-footer"></div>');
      echo '</div>';
}
?>

        </div>
        </div>

 <!--   espresso Cards -->

      <div id="espresso" class="espresso swiper-container">
        <div class="swiper-wrapper fade-in">

<?php 

  $espresso_recipe_cards = get_post_meta( get_the_ID(), '_partea_recipe_content_espresso', true );
    foreach ( (array) $espresso_recipe_cards as $key => $espresso_recipe_card ) {
      echo( '<div class="swiper-slide">');
      printf( '<div class="recipe-image" style="background-image:url(%s);"></div>', 
        wp_get_attachment_image_url( $espresso_recipe_card['_partea_recipe_image_id'], 'large' ) );
      echo( '<div class="swiper-content">');
      printf( '<div class="recipe-name">%s</div>', esc_attr( $espresso_recipe_card['_partea_recipe_name'] ) );
      echo( '<ul class="recipe-content">');
      printf( '<li>%s</li>', esc_attr( $espresso_recipe_card['_partea_recipe_ingredient_one'] ) );
      printf( '<li>%s</li>', esc_attr( $espresso_recipe_card['_partea_recipe_ingredient_two'] ) );
      printf( '<li>%s</li>', esc_attr( $espresso_recipe_card['_partea_recipe_ingredient_three'] ) );
      printf( '<li>%s</li>', esc_attr( $espresso_recipe_card['_partea_recipe_ingredient_four'] ) );
      echo '</ul>';

      printf( '<div class="recipe-icon"></div>');

      echo '</div>';
      printf( '<div class="recipe-footer"></div>');
      echo '</div>';
}
?>

        </div>
        </div>

 <!--   wildberry Cards -->

      <div id="wildberry" class="wildberry swiper-container">
        <div class="swiper-wrapper fade-in">

<?php 

  $wildberry_recipe_cards = get_post_meta( get_the_ID(), '_partea_recipe_content_wildberry', true );
    foreach ( (array) $wildberry_recipe_cards as $key => $wildberry_recipe_card ) {
      echo( '<div class="swiper-slide">');
      printf( '<div class="recipe-image" style="background-image:url(%s);"></div>', 
        wp_get_attachment_image_url( $wildberry_recipe_card['_partea_recipe_image_id'], 'large' ) );
      echo( '<div class="swiper-content">');
      printf( '<div class="recipe-name">%s</div>', esc_attr( $wildberry_recipe_card['_partea_recipe_name'] ) );
      echo( '<ul class="recipe-content">');
      printf( '<li>%s</li>', esc_attr( $wildberry_recipe_card['_partea_recipe_ingredient_one'] ) );
      printf( '<li>%s</li>', esc_attr( $wildberry_recipe_card['_partea_recipe_ingredient_two'] ) );
      printf( '<li>%s</li>', esc_attr( $wildberry_recipe_card['_partea_recipe_ingredient_three'] ) );
      printf( '<li>%s</li>', esc_attr( $wildberry_recipe_card['_partea_recipe_ingredient_four'] ) );
      echo '</ul>';

      printf( '<div class="recipe-icon"></div>');

      echo '</div>';
      printf( '<div class="recipe-footer"></div>');
      echo '</div>';
}
?>

        </div>
        </div>
          

      <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
      <script>
        $(document).ready(function() {
          AOS.init({
          duration: 1200,
        })


        });
      </script>

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
              slideShadows: true,
            },
            pagination: {
              el: '.swiper-pagination',
            },
          });

        });
      </script>


    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_sidebar();
get_footer();