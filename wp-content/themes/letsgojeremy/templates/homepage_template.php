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
			<div class="full-width hero-section" style="background-image: url(<?php the_field('featured_image_background'); ?>);">
				<div id="gradient">
					<div class="row">
						<p class="feature-headline"><?php the_field('home_feature_headline'); ?></p>
						<p class="feature-text"><?php the_field('home_feature_text'); ?></p>
					</div>
				</div>
			</div>
			<!-- End Feature Area -->

			<!-- About Area -->
			<div id="light_grey">
			<div class="row">
				<div class="column-full">
					<div id="about-container">
						<p class="about-headline"><?php the_field('about_headline'); ?></p>
						<p class="about-text"><?php the_field('about_text'); ?></p>
					</div>
					<div class="about-text btn">
						<a.btn="http://www.letsgojeremy.com/services" style="text-decoration:none;">Let's Go!</a>
					</div>
				</div>
			</div>
		</div>
			<!-- End About Area -->

			<!-- Services Area -->
	<div id="service-container">	
		<div>
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
			<div class="row">	
				<div class="column-third frame">
					<img src="<?php the_field('services_image'); ?>" />
				</div>

				<div class="column-two-third">
					<p class="service_header_text"><?php echo the_title(); ?></p>
					<p class="service_description"><?php the_field('service_text'); ?></p>
				</div>
			</div>		

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>		

			<?php endwhile; // end of the loop. ?>
			<!-- End Service Area -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
