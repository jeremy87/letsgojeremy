<?php
/**
* Template Name: Home Page
*
* @package letsgojeremy
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Feature Area -->
			<div class="full-width" style="background-image: url(<?php the_field('featured_image_background'); ?>);">
				<h1><?php the_field('home_feature_headline'); ?></h1>
				<p class="feature-text"><?php the_field('home_feature_text'); ?></p>
			</div>	

			<!-- Services Area -->
		<div class="row">
			<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'product', 
    			'posts_per_page' => 10 
			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
    		// The Content
			?>

			<div class="column third">
				<img src="<?php the_field('portfolio_services_image'); ?>" />
			</div>

			<div class="column two-third">
				<h3><?php the_field('portfolio_services_header'); ?></h3>
				<p class="portfolio_text"><?php the_field('portfolio_services_text'); ?></p>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
