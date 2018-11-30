<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="single-product-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<article id="post-68" class="post-68 product type-product status-publish has-post-thumbnail hentry product-type-do">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-image-wrapper">
					<?php the_post_thumbnail();?>
				</div>

				<div class="product-content-wrapper">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title();?></h1>
					</header>

					<div class="entry-content">
						<p class="price"><?php echo CFS()->get( 'price' ); // Get price field?></p>
						<p><?php the_content();?></p>
					</div>

					<div class="social-buttons">
						<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Facebook</button>
						<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
						<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>
		</article>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
