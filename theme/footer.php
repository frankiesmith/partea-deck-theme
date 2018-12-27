<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

?>

	</div>
	<!-- #content -->

	<footer id="colophon" class="footer">
		<div class="container">
		<div class="copyright">
			<p>©<?php echo date("o"); ?>, ParTea Booze Infusers.</p>
		</div>
		<div class="social-icons">
			<a href="https://twitter.com/ParTeaBooze" target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/twitter.svg' ); ?>
			</a>
			<a href="https://www.facebook.com/parteabooze/" target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/facebook.svg' ); ?>
			</a>
			<a href="https://www.pinterest.com/parteabooze/" target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/pinterest.svg' ); ?>
			</a>
			<a href="https://www.instagram.com/parteabooze/" target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/instagram.svg' ); ?>
			</a>
		</div>

		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>
	</body>

	</html>