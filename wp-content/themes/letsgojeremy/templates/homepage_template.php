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
		<div class="view hover-effect">
			<div class="full-width hover-section" style="background-image: url(<?php the_field('featured_image_background'); ?>);">
				<div class="mask">
					<p class="hover-text-heading">san fabiano calcinaia</p>
				</div>
			</div>
		</div>						
			<!-- End Feature Area -->

			<!-- About Area -->
		<div id="about-container">
			<div class="row">
				<div id="about-text-container">
					<div class="column-one">
							<p class="about-headline"><?php the_field('about_headline'); ?></p>
							<p class="about-text"><?php the_field('about_text'); ?></p>
							<a class="btn-main" href="index.php?page_id=2">let's go</a>
					</div>
				</div>	
			</div>
		</div>
			<!-- End About Area -->	

			<?php endwhile; // end of the loop. ?>
			<!-- End Service Area -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
