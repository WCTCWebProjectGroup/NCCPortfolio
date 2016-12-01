<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- font-family: 'Roboto', sans-serif; -->
	<!-- font-family: 'Open Sans', sans-serif; -->
	<!-- font-family: 'PT Sans', sans-serif; -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans|Roboto" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'base-theme' ); ?></a>


	<header id="masthead" class="site-header" role="banner">

			<div class="site-branding">
				<div class="site-branding-container row">
					<div class="site-title-container columns">

						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>

					</div><!-- .site-title-container -->
				</div><!-- .site-branding-container -->
			</div><!-- .site-branding -->

			<div class="site-navigation">
				<div class="site-navigation-container row">
					<nav id="site-navigation" class="main-navigation columns" role="navigation">
						<div class="site-navigation-container row">

							<button class="menu-toggle small-12" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'base-theme' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

						</div><!-- site-navigation-container -->
					</nav><!-- .main-navigation -->
				</div><!-- .site-navigation-container -->
			</div><!-- .site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="site-content-container" class="row">
