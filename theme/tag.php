<?php

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="container">

<header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="page-title">', '</div>' );
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

    <div class="recent-posts">
   
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php get_template_part( 'template-parts/content','listed-posts' ); ?>
    <?php endwhile; ?>
    </div>
        <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      <div class="tag-search">
<div class="search-content">
<?php get_search_form(); ?>
<?php get_template_part( 'template-parts/content','tag-list' ); ?>
</div>
</div>
  </div>
</div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
