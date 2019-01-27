   <?php

    $args = array(
      'category_name'     => 'featured-post',
      'posts_per_page'      => 3,
      'ignore_sticky_posts'   => 1,
      'post_status'         => 'publish',
      'order'         => 'DESC',
      'order_by'        => 'post_date',
    );
    
    $featured_blog_posts = new WP_Query( $args );
    if ( $featured_blog_posts->have_posts() ): while ( $featured_blog_posts->have_posts() ): $featured_blog_posts->the_post();
  ?>
                    
<div class="featured-item">
    <div class="post-image" style="background-image:url(<?= get_the_post_thumbnail_url($post,'large'); ?>);">
    </div>
    <div class="featured-headline">
      <a href="<?php the_permalink(); ?>" class="featured-link"></a>
        <div class="featured-tag">
            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
            <h4><?php echo get_the_date( 'M. j, Y' ); ?></h4>
            <div class="post-tags"><?php echo get_the_tag_list('<p>',', ','</p>');?></div>
        </div>
    </div>
</div>
                    <?php
    endwhile;
    wp_reset_postdata();
    endif;
  ?>