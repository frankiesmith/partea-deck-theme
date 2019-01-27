<div class="grid-x posts-wrapper fade-in">
<div class="cell medium-12 large-4">
<div class="post-image" style="background-image:url(<?= get_the_post_thumbnail_url($post,'large'); ?>);">
</div>
</div>
<div class="cell medium-12 large-8 post">
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