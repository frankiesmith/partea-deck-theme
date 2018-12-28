   <section class="post-section">
   <?php

    $args = array(
      'category_name'     => 'uncategorized',
      'posts_per_page'      => 10,
      'ignore_sticky_posts'   => 1,
      'post_status'         => 'publish',
      'order'         => 'DESC',
      'order_by'        => 'post_date',
    );
    
    $blog_posts = new WP_Query( $args );
    if ( $blog_posts->have_posts() ): while ( $blog_posts->have_posts() ): $blog_posts->the_post();
  ?>
                    
                    <div class="grid-x posts-wrapper">
                    <div class="cell medium-4">
                      <div class="post-image" style="background-image:url(<?= get_the_post_thumbnail_url($post,'large'); ?>);">
                      </div>
                    </div>
                    <div class="cell medium-8 post">
                    <h2 class="post-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="post-date">
                      <?php echo get_the_date( 'l, F j, Y' ); ?>
                    </p>
                      <?php the_excerpt(); ?>
                      <div class="post-tags"><?php echo get_the_tag_list('<p>',', ','</p>');?></div>
                      <a class="secondary-button" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                  </div>

                    <?php
    endwhile;
    wp_reset_postdata();
    endif;
  ?>
</section>