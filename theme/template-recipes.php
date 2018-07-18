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
        <div class="swiper-wrapper" data-aos="fade-up">

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
          

<!--           <div class="swiper-slide">
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
          <div class="swiper-slide">
            <div class="recipe-image">
            </div>
            <ul class="swiper-content">
              <li class="recipe-name">Spicy Pineapple Mezcalita</li>
              <li>1.5oz Jalapeno mezcal</li>
              <li>1oz pineapple juice</li>
              <li>0.75oz lime juice</li>
              <li>0.5oz agave syrup</li>
              <div class="recipe-icon">
              </div>
            </ul>
            <div class="recipe-footer">
            </div>
          </div>
        </div>
      </div> -->

      <!--   Orange spice Cards -->

      <div id="orange" class="orange swiper-container">
        <div class="swiper-wrapper" data-aos="fade-up">
          <div class="swiper-slide">
            <div class="recipe-image">
            </div>
            <ul class="swiper-content">
              <li class="recipe-name">Spiced Sidecar</li>
              <li>2oz Orange Spice brandy</li>
              <li>1oz lemon juice</li>
              <li>1oz simple syrup</li>
              <li>Cinnamon sugar rim</li>
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
              <li class="recipe-name">Spiced Toddy</li>
              <li>1.5oz Orange Spice bourbon</li>
              <li>1 tsp. honey</li>
              <li>4oz hot water</li>
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
              <li class="recipe-name">Spiced Old Fashioned</li>
              <li>1.5oz Orange Spice whiskey</li>
              <li>Muddle 1 sugar cube with 3-4 dashes bitters</li>
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
              <li class="recipe-name">Spiced Sangria</li>
              <li>1oz Orange Spice vodka</li>
              <li>3oz dry white or red wine</li>
              <li>3oz white or red cranberry juice</li>
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
        <div class="swiper-wrapper" data-aos="fade-up">
          <div class="swiper-slide">
            <div class="recipe-image">
            </div>
            <ul class="swiper-content">
              <li class="recipe-name">Sparkling Ginger Lemonade</li>
              <li>1.5oz Ginger vodka</li>
              <li>0.75oz lemon juice</li>
              <li>0.5oz simple syrup</li>
              <li>2.5oz club soda</li>
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
              <li class="recipe-name">Ginger Bee’s Knees</li>
              <li>1.5oz Ginger gin</li>
              <li>0.75oz lemon juice</li>
              <li>0.5oz honey syrup</li>
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
              <li class="recipe-name">The Lean Irishman</li>
              <li>1.5oz Ginger Irish whiskey</li>
              <li>4oz club soda</li>
              <li>Lemon or lime wedge</li>
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
              <li class="recipe-name">Ginger Daly</li>
              <li>1.5oz Ginger vodka</li>
              <li>2oz lemonade</li>
              <li>2oz iced tea </li>
              <div class="recipe-icon">
              </div>
            </ul>
            <div class="recipe-footer">
            </div>
          </div>
        </div>
      </div>

      <!--   Espresso Cards -->

      <div id="espresso" class="espresso swiper-container">
        <div class="swiper-wrapper" data-aos="fade-up">
          <div class="swiper-slide">
            <div class="recipe-image">
            </div>
            <ul class="swiper-content">
              <li class="recipe-name">Espresso Martini</li>
              <li>2oz Espresso vodka</li>
              <li>0.5oz simple syrup</li>
              <li><strong>Optional:</strong> Splash Irish cream</li>
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
              <li class="recipe-name">Coffee-Coco</li>
              <li>1.5oz Espresso rum</li>
              <li>3oz coconut water</li>
              <li>1 Tbsp. cream of coconut</li>
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
              <li class="recipe-name">Irish Iced Coffee</li>
              <li>1.5oz Espresso Irish whiskey</li>
              <li>1oz cream</li>
              <li>0.5oz simple syrup</li>
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
              <li class="recipe-name">Light Russian</li>
              <li>1.5oz Espresso vodka</li>
              <li>4oz. vanilla almond or soy milk</li>
              <div class="recipe-icon">
              </div>
            </ul>
            <div class="recipe-footer">
            </div>
          </div>
        </div>
      </div>

      <!--   Wildberry Cards -->

      <div id="wildberry" class="wildberry swiper-container">
        <div class="swiper-wrapper" data-aos="fade-up">
          <div class="swiper-slide">
            <div class="recipe-image">
            </div>
            <ul class="swiper-content">
              <li class="recipe-name">Berry 75</li>
              <li>1oz Wild Berry gin</li>
              <li>0.5oz lemon juice</li>
              <li>0.5oz simple syrup</li>
              <li>Top with sparkling wine</li>
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
              <li class="recipe-name">Berry Daiquiri</li>
              <li>1.5oz Wild Berry rum</li>
              <li>0.75oz lime juice</li>
              <li>0.5oz simple syrup</li>
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
              <li class="recipe-name">French Martini</li>
              <li>2oz Wild Berry vodka</li>
              <li>2oz pineapple juice</li>
              <li>0.5oz simple syrup</li>
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
              <li class="recipe-name">Berry Lemonade</li>
              <li>1.5oz Wild Berry vodka</li>
              <li>4oz lemonade</li>
              <div class="recipe-icon">
              </div>
            </ul>
            <div class="recipe-footer">
            </div>
          </div>
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