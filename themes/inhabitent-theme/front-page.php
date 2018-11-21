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
					<div class="product-tax-blocks">
					<?php foreach (get_terms(array("taxonomy" => "product-type")) as $product_type): ?>
						<div class="product-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $product_type->slug ?>.svg">
								<p><?php echo $product_type->description ?></p>
							<button href="<?php echo get_term_link($product_type->slug, 'product-type' ); ?>"><?php echo $product_type->name ?> STUFF</button>
						</div>
					<?php endforeach;?>
				</div>
			</section>


			<section class="journal-section">
				<h1>INHABITENT JOURNAL</h1>
					<div class="journal-container">
		
						<?php
							$args = array( 'post_type' => 'post', 'post_per_page' => '3' );
							$news_posts = get_posts( $args ); // returns an array of posts
						?>
						<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
						
						<div class="journal-wrapper">
							<div class="post-image"><?php echo the_post_thumbnail();?></div>
							<div class="post-wrapper">
								<p class="post-date"><?php echo get_the_date(); ?> /
								<?php echo $post->comment_count; ?> comments </p>	
								<a href="<?php the_permalink();?>"><h3 class="journal-title"><?php echo the_title(); ?></h3></a>
							</div>
								<button class="journal-button"><a href="<?php the_permalink(); ?>">READ ENTRY</a></button>
						</div>

						<?php endforeach; wp_reset_postdata(); ?>

					</div>
			</section>


			<section class="adventures container">
				<h1>LATEST ADVENTURES</h1>
					<ul>
						<?php
							$args = array( 'post_type' => 'adventures', 'order => ASC', 'post_per_page' => '4' );
							$adventure_posts = get_posts( $args ); // returns an array of posts
						?>
						<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

						<li>
							<div class="story-wrapper">
								<?php the_post_thumbnail(); ?>

								<div class="story-info">
									<h3 class="entry-title"><a href="<?php the_permalink();?>"><?php echo the_title(); ?></a></h3>
									<a class="white-btn" href="<?php the_permalink(); ?>">READ MORE</a>
								</div>
							</div>
						</li>
							<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					<p class="see-more">MORE ADVENTURES
						<a href="<?php the_permalink(); ?>/adventures/"></a>
					</p>

					
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->
</body>


<?php get_footer(); ?>
