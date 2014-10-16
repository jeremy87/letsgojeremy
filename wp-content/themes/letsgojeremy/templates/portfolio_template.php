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

			<!-- Portfolio Area -->
		<div class="row">
			<?php	
			// The Arguments
			$args = array( 
    			'post_type' => 'lgj_portfolio', 
    			'posts_per_page' => 10 
			);
			// Start Loop
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
    		// The Content
			?>

			<div class="column-one">
				<p class="portfolio_title"><?php echo the_title(); ?></p>
				<p class="portfolio_description"><?php the_field('portfolio_description'); ?></p>
				<hr />
				<p class="portfolio_content"><?php the_content(); ?></p>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>	

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
