<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="category-journal-page">

	<div id="primary" class="content-area journal-sec-part">
		<main id="main" class="site-main" role="main">
			
		
					<?php
						$args = array( 'post_type' => 'post' );
						$news_posts = get_posts( $args ); // returns an array of posts
					?>

					<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>

			<article>
				<header class="entry-header">
					<?php the_post_thumbnail();?>
				
					<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h2>
					<div class="entry-meta">
						<span class="posted-on"><?php echo get_the_date(); ?></span> /
						<span class="byline"><?php echo $post->comment_count; ?></span>
							COMMENTS / by 
						<span class="author card"><?php the_author();?></span>	
					</div>
				</header>

				<div class="entry-content">
					<p><?php the_excerpt();?></p>
					<p><a href="<?php the_permalink(); ?>" class="read-more black-btn">Read more →</a></p>
				</div>

			</article>
			
			<?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
