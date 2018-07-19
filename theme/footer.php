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
			<p>© 2018, ParTea Booze Infusers.</p>
		</div>
		<div class="social-icons">
			<a href=" " target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/instagram.svg' ); ?>
			</a>
			<a href=" " target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/facebook.svg' ); ?>
			</a>
			<a href=" " target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/pinterest.svg' ); ?>
			</a>
			<a href=" " target="_blank">
				<?php echo file_get_contents( get_template_directory() . '/img/twitter.svg' ); ?>
			</a>
		</div>

		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	</body>

	</html>