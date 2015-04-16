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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'april-white' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="site-branding">
						<div class="row top">
							<div class="col-lg-9">
					  			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					  		</div>			
					  		<div class="col-lg-3" id="search">
								<?php get_search_form(); ?>								
							</div>			

							<div class="row">
								<div class="container">
									<img src="<?php echo get_template_directory_uri(); ?>/layouts/headertest.jpg" alt="Logo" width="HERE" height="HERE" id="header"/>
								</div>								
							</div>  		
						</div>
										
					</div><!-- .site-branding -->			     

					<!-- myint's nav start-->
					<nav class="navbar navbar-default" role="navigation">
					    <!-- Mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" 
					      data-toggle="collapse" data-target=".navbar-ex1-collapse"
					      aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					     </button>
					    </div>
					  
					    <!-- Collect the nav links for toggling -->
					  <?php // Loading WordPress Custom Menu
					       wp_nav_menu( array(
					        'menu_class' => 'nav navbar-nav',
					        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse'
					     ));
					  ?>		  
					</nav>
					<!-- myint's nav end -->

  			   </div><!-- .panel-body -->
			</div><!-- .panel -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">