<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			<?php if (is_front_page() || is_page('about') || is_singular($post_types = 'adventures')): ?>
				<header id="masthead" class="site-header" role="banner">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg" /></a>
					</div>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>	
			
				<header id="masthead" class="site-header reverse" role="banner">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg"/></a>
						</div>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .site-branding -->
			<?php endif; ?>
				<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<!-- <?php get_search_form();?> -->
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
