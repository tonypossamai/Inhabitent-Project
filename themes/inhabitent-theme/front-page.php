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
			

			<section class="shop-section" >
				<h1>SHOP STUFF</h1>
				<div class="product-tax-section">
					<?php foreach (get_terms(array("taxonomy" => "product-type")) as $product_type): ?>
						<div class="product-tax">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $product_type->slug ?>.svg">
								<p><?php echo $product_type->description ?></p>
							<a href="<?php echo get_term_link($product_type->slug, 'product-type' ); ?>"><?php echo $product_type->name ?> STUFF</a>
						</div>
					<?php endforeach;?>
				</div>
			</section>


			<section class="journal-section">
				<h1 class="title-section">INHABITENT JOURNAL</h1>
					<?php
						$args = array( 'post_type' => 'post', 'post_per_page' => '3' );
						$news_posts = get_posts( $args ); // returns an array of posts
					?>

					<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
				<div class="journal-content">
						<div class="post-image"><?php echo the_post_thumbnail();?></div>
						<p class="post-date"><?php echo get_the_date(); ?> /
						<?php echo $post->comment_count; ?> comments </p>

						<a href="<?php the_permalink();?>"><h2 class="journal-title"><?php echo the_title(); ?></h2></a>
						<!-- <p class="journal-content"></p> -->

					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>


			<section class="adventures-section">
				<h1 class="title-section">LATEST ADVENTURES</h1>
					<?php
						$args = array( 'post_type' => 'adventures', 'order => ASC', 'post_per_page' => '4' );
						$adventure_posts = get_posts( $args ); // returns an array of posts
					?>

					<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

				<div class="adventures-content">
					<div class="post-image"><?php echo the_post_thumbnail();?></div>

					<a href="<?php echo the_excerpt();?>"><h2 class="adventures-title"><?php echo the_title(); ?></h2></a>

					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->
</body>


<?php get_footer(); ?>
