<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="journal-page">

					<?php
						$args = array( 'post_type' => 'post' );
						$news_posts = get_posts( $args ); // returns an array of posts
					?>

					<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
				<div class="container-journal">
						<div class="journal-image"><?php echo the_post_thumbnail();?></div>
						<p class="journal-date"><?php echo get_the_date(); ?> /
						<?php echo $post->comment_count; ?> COMMENTS / by <?php the_author();?></p>

						<h2 class="journal-title"><?php echo the_title(); ?></h2>
						<p class="journal-content"><?php the_excerpt();?></p>

					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
