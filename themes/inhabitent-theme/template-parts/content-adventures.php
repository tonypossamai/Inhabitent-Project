<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
		<?php the_title( '<h1 class="entry-title container">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->

	<div>
		<div class="entry-meta container">
			<?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->


	<footer class="entry-footer container">
		<?php red_starter_entry_footer(); ?>
		<div class="social-buttons">
			<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Facebook</button>
			<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
			<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

