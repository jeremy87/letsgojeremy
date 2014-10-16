<?php
/**
* Template Name: Services
*
* @package letsgojeremy
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Header Image Area -->
		<div class="full-width" style="background-image: url(<?php the_field('service_image_background'); ?>);">
			<h1><?php the_field('service_feature_headline'); ?></h1>
			<p class="feature-text"><?php the_field('service_feature_text'); ?></p>
		</div>
			<!-- End Header Image Area -->

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
				<img src="<?php the_field('services_image'); ?>" />
			</div>

			<div class="column two-third">
				<p class="service_header_text"><?php echo the_title(); ?></p>
				<p class="service_text"><?php the_content(); ?></p>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
