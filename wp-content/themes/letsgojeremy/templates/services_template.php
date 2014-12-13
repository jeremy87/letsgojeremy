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

			<!-- Intro Area -->
	<div id="service-page">		
		<div class="row">
			<div class="column-two-third">
				<img src="<?php the_field('service_image'); ?>" />
			</div>
			<div class="column-one-third">
				<p class="service-page-header"><?php the_field('service-header'); ?></p>
				<p class="service-page-intro"><?php the_field('service-intro'); ?></p>
			</div>	
		</div>
	</div>
			<!-- End Intro Area -->

			<!-- Services Area -->
	<div id="service-page-container">	
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
			?>
	
				<div class="column-third">
					<img src="<?php the_field('services_image'); ?>" />
					<p class="services_header_text"><?php echo the_title(); ?></p>
					<p class="services_description"><?php the_field('service_text'); ?></p>
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
				

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
