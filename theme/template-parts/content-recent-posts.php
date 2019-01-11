 <?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type'   => 'post',
      'paged'       => $paged,
      'post_status' => 'publish',
      'order'       => 'DEC',
      'order_by'    => 'post_date',
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