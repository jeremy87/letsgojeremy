<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package letsgojeremy
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>

		<div class="row">
			<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</div>	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
