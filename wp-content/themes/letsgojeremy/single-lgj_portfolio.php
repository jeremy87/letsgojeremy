<?php
/**
 * The template for displaying all single posts.
 *
 * @package letsgojeremy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<!-- our code -->

	<div id="portfolio-projects">
		<div class="row">		
			<div class="column-half">
				<p class="portfolio_title"><?php echo the_title(); ?></p>
			</div>
			<div class-"column-half">	
				<p class="category-text"><?php the_category(); ?></p>
			</div>
			<div class="column-full">	
					<hr class="portfolio-main" />
			</div>			
				<div class="column-one-third">
					<?php the_content(); ?>
				</div>	

			<div class="column-two-third">
					<p class="portfolio_description-headline"><?php the_field('portfolio_description-headline'); ?></p>	
					<p class="portfolio_description"><?php the_field('portfolio_description'); ?></p>
			</div>	

		</div>
	</div>	

		<!-- end of our code -->

		<!-- shows links to the next posts -->
			<?php letsgojeremy_post_nav(); ?> 

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>