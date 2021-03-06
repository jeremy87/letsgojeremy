<?php
/**
* Template Name: Contact
 *
 * @package letsgojeremy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Featured Project -->
	<div id="resume-area">

		<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'lgj_jobs', 
    			'posts_per_page' => 10,

			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
    		// The Content
			?>
				
		<div class="row">
			<hr class="resume" />
				<div class="coulmn-full padding-right">	
					<p class="company"><?php the_field('company_name'); ?>
					<p class="title-dates"><?php the_field('job_title'); ?> // <?php the_field('dates_employeed'); ?></p>
					<p class="job-description"><?php the_field('job_description'); ?></p>
				</div>			
		</div>		

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	</div>		

	<div id="contact-page-container">	
		<div class="row">
			<div class="column-two-third">
					<p class="service-contact-header"><?php the_field('contact_header'); ?></p>
					<p class="service-contact-text"><?php the_field('contact_text'); ?></p>
					<p class="services-contact-form"><?php the_content(); ?></p>
			</div>	
		</div>	
	</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
