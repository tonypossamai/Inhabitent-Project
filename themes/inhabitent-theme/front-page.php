<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="home-hero">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
			</section>
			
			<section class="journal-section">
				<h1>INHABITENT JOURNAL</h1>
				<?php
					$args = array( 'post_type' => 'post', 'post_per_page' => '3' );
					$news_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
					<div class="post-image"><?php echo the_post_thumbnail();?></div>
					<p class="date-comment"><?php echo get_the_date();?></p>
					<?php get_comments_number();?>
					<h2 class="journal-title"><?php echo the_title(); ?></h2>


				<?php endforeach; wp_reset_postdata(); ?>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->
</body>


<?php get_footer(); ?>
