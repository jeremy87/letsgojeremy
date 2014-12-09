<?php
/**
* Template Name: Portfolio
*
* @package letsgojeremy
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- Featured Project -->

		<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'lgj_portfolio', 
    			'posts_per_page' => 1,
    			'category_name' => 'featured' //Featured Project is sticky at the top of the page

			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
    		// The Content
			?>
	
	<div id="portfolio-featured">
		<div class="row">		
			<div class="column-half">
				<p class="portfolio_title_featured"><?php echo the_title(); ?></p>
			</div>
			<div class-"column-half">	
				<p class="category-text-featured">Featured</p>
			</div>
			<div class="column-full">	
						<hr />
			</div>				

				<div class="column-one-third">
					<?php the_content(); ?>
				</div>	

			<div class="column-two-third">
					<p class="portfolio_description-headline-featured"><?php the_field('portfolio_description-headline'); ?></p>	
					<p class="portfolio_description-featured"><?php the_field('portfolio_description'); ?></p>
			</div>	

		</div>		
	</div>


			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	</div>		

			<!-- End Featured Project -->

			<!-- Portfolio Area -->

			<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'lgj_portfolio', 
    			'posts_per_page' => 10,
    			'cat' => -8 //Doesnt pull in the Featured Post - uses the categories ID number 
			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
    		// The Content
			?>

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

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
