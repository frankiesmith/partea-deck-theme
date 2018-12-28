<?php

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="container">

<header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
      </header><!-- .page-header -->
      <div class="two-col">

<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

    <div class="recent-posts slideUp">
   
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
    <?php endwhile; ?>
    </div>
      <div class="tag-search">
<?php get_search_form(); ?>
</div>

    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
  </div>
</div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
