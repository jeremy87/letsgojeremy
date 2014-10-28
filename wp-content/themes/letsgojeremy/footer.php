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
			<div class="column-half copyright">
				<p>Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> | All Rights Reserved</p>
			</div>

			<div class="column-half menu-footer-navigation-container">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</div>
		</div>	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
