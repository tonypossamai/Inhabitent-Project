<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<section class="single-product-section">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail();?>
			<h3><?php the_title();?></h3>
			<?php echo CFS()->get( 'price' ); // Get price field?> 
			<p><?php the_content();?></p>

		<?php endwhile; // End of the loop. ?>
	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
