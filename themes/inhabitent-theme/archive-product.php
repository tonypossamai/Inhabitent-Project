<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area archive-product-page">
		<main id="main" class="site-main" role="main">
		
		<div class="container">
			<?php $wpb_all_query = new WP_Query(array('post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => -1));?>
			<?php if ( $wpb_all_query -> have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">SHOP STUFF</h1>

					<ul class="product-type-list">
					<?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product-type',
						'hide_empty' => false));
					?>
					
						<?php foreach ( $terms as $term ) : ?>
						<li>
							<p>
								<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
							</p>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>

				</header><!-- .page-header -->

			<div class="product-grid">	

					<?php /* Start the Loop */ ?>
				<?php while ( $wpb_all_query -> have_posts() ) : $wpb_all_query -> the_post(); ?>

					<?php
						get_template_part( 'template-parts/content', 'product' );
					?>

				<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				
			</div>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
