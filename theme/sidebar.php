<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

if ( ! is_active_sidebar( 'featured-sidebar' ) ) {
  return;
}
?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'featured-sidebar' ); ?>
</aside><!-- #secondary -->
