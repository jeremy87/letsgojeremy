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

			<!-- About Area -->
			<div class="about">
				<div class="about_text">
					<p class="about_headline"><?php the_field('about_headline'); ?></p>
					<p class="about_headline"><?php the_field('about_text'); ?></p>
				</div>
				<div class="button">
					<a href="http://www.letsgojeremy.com/services">Let's Go!</a>
				</div>
			</div>		

			<!-- Services Area -->
		<div class="row">
			<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'lgj_services', 
    			'posts_per_page' => 3 
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
				<p class="portfolio_header_text"><?php echo the_title(); ?></p>
				<p class="portfolio_text"><?php the_field('portfolio_services_text'); ?></p>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
