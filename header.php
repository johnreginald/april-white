<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package April White
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
	<a class="skip-link screen-reader-text" href="#content">
		<?php _e( 'Skip to content', 'april-white' ); ?>
	</a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
					<small><?php bloginfo( 'description' ); ?></small>
				</h1>
			</div><!-- .site-branding -->
		</div><!-- .container -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'primary', 
						'menu_id' => 'primary-menu', 
					) ); 
				?>
			</div>
		</nav><!-- #site-navigation -->					
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">