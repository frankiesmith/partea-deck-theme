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
          <?php 
          echo do_shortcode('[smartslider3 slider=3]');
          ?>
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

 <!--  <div class="shopify-product">

          <script type="text/javascript">
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'embeds.myshopify.com',
      apiKey: '952162710f94aa7b7644b14b2a94f4a3',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [3030475907],
        node: document.getElementById('product-component-05cfb487fb6'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
          "product": {
            "styles": {
              "button": {
                "background-color": "#292929",
                ":hover": {"background-color": "#464646"},
                ":focus": {"background-color": "#464646"}
              },
            }
          }
        }
      });
    });
  }

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  window.ShopifyBuy && window.ShopifyBuy.UI ? ShopifyBuyInit() : loadScript();

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
})();
</script>
<div id='product-component-05cfb487fb6'></div>
</div> -->

        </div>
      </div>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_sidebar();
get_footer();