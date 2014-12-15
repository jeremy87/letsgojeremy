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
			<div class="column-full">
				<p class="service-title"><?php echo the_title(); ?></p>
			</div>	
			<div class="column-two-third frame">
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
		
	<div id="services-section">		
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
					<div class="frame2"><img src="<?php the_field('services_image'); ?>" /></div>
					<p class="services_header_text"><?php echo the_title(); ?></p>
					<p class="services_description"><?php the_field('service_text'); ?></p>
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
