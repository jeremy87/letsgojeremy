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

			<!-- Header Image Area -->
				<div class="full-width" style="background-image: url(<?php the_field('portfolio_image_background'); ?>);">
					<h1><?php the_field('portfolio_hero_headline'); ?></h1>
					<p class="feature-text"><?php the_field('portfolio_hero_text'); ?></p>
				</div>
			<!-- End Header Image Area -->

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

		<div class="column-one">
				<p class="portfolio_title"><?php echo the_title(); ?></p>
				<p class="category-text"><?php the_category(); ?></p>
					<hr />
				<p class="portfolio_description"><?php the_field('portfolio_description'); ?></p>
			
			<!-- Repeater -->
			<div class="portfolio-preview"> 

				<?php while ( have_rows('portfolio_images') ) : the_row();?>
					<img src="<?php the_sub_field('portfolio_images'); ?>" />
					<p class="image-text2"><?php the_sub_field('image_name'); ?></p>
				<?php endwhile;?>
		 	
		 	</div>
			<!-- End Repeater -->
		</div>


			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<!-- End Featured Project -->

			<!-- Portfolio Area -->
		<div class="row">
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

			<div class="column-one">
				<p class="portfolio_title"><?php echo the_title(); ?></p>
				<p class="category-text"><?php the_category(); ?></p>
					<hr />
				<p class="portfolio_description"><?php the_field('portfolio_description'); ?></p>

				<?php while ( have_rows('portfolio_images') ) : the_row();?>
					<img src="<?php the_sub_field('portfolio_images'); ?>" />
					<p class="image-text2"><?php the_sub_field('image_name'); ?></p>
				<?php endwhile;?>

			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
