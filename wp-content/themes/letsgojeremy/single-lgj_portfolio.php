<?php
/**
 * The template for displaying all single posts.
 *
 * @package letsgojeremy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<!-- our code -->

		<h2><?php the_title(); ?></h2>
		<?php echo get_the_category_list( '. '); ?>

		<p><?php the_field('feature_description'); ?></p>
		<?php the_content(); ?>

		<!-- end of our code -->


		<!-- shows links to the next posts -->
			<?php letsgojeremy_post_nav(); ?> 


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>