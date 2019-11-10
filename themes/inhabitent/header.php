<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--  Navigation  -->

<header id="site-header" class="site-header" role="navigation">	
	<embed src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" class="header-logo"> 
	<nav id="primary_menu" class="menu"" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav> 

<!-- Accessibility  -->

 	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>	
	<div class="site-branding">
		<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div> 				
</header>
				
<!-- <div id="content" class="site-content"> -->
