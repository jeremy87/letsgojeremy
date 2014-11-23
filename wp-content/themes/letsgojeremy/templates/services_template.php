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
		<div class="full-width secondary-hero" style="background-image: url(<?php the_field('service_image_background'); ?>);">
			<div id="gradient-small">
			<div class="row">
			<p class ="secondary-hero-feature"><?php the_field('service_hero_headline'); ?></h1>
			<p class="secondary-hero-text"><?php the_field('service_hero_text'); ?></p>
			</div>
			</div>
		</div>
			<!-- End Header Image Area -->

			<!-- Services Area -->
	<div id="service-page-container">	
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
				<div class="column-third">
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

	<div id="contact-container">	
		<div class="row">
			<div class="column-two-third">
					<p class="service-contact-header"><?php the_field('service-contact-header'); ?></p>
					<p class="service-contact-text"><?php the_field('service-contact-text'); ?></p>
					<p class="services-contact-form"><?php the_content(); ?></p>
					</div>
				</div>	
			</div>	
		</div>	
				

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
