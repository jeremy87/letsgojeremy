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
