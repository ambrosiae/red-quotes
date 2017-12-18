<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Exo:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<img class="header-logo" src="<?php echo get_template_directory_uri() . '/inc/cmb2/images/qod-logo.svg'; ?>" alt="quotes-logo">
			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
		</div>

				<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php
					// esc_html( 'Primary Menu' ); ?></button> -->
					<!-- <?php
					// wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> -->
				<!-- </nav> -->
				<!-- #site-navigation -->
			<!-- </header>#masthead -->

			<div id="content" class="site-content">
