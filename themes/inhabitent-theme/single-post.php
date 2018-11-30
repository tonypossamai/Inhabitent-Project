<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area taxonomy-product-type-page">
		<main id="main" class="site-main" role="main">

			<article>	
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<div class="social-buttons">
						<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Facebook</button>
						<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
						<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
					</div>
			</article>		
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
