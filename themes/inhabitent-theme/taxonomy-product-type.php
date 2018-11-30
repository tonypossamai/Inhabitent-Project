<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="taxonomy-product-type-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
					<header class="page-header">
						
						<h1 class="page-title"><?php echo $term->name; ?></h1>
							<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
						
					</header><!-- .page-header -->
				
					<div class="product-grid">
		
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

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
</div>

<?php get_footer(); ?>
