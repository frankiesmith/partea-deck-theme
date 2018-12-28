   <section class="post-section">
   <?php

    $args = array(
      'post_type'      => 'post',
      'posts_per_page'      => 4,
      'ignore_sticky_posts'   => 1,
      'post_status'         => 'publish',
      'order'         => 'DESC',
      'order_by'        => 'post_date',
    );
    
    $blog_posts = new WP_Query( $args );
    if ( $blog_posts->have_posts() ): while ( $blog_posts->have_posts() ): $blog_posts->the_post();
  ?>
                    
<?php get_template_part( 'template-parts/content','listed-posts' ); ?>


                    <?php
    endwhile;
    wp_reset_postdata();
    endif;
  ?>
</section>