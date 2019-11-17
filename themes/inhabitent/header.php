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

	<header id="masthead" class="masthead" role="banner">
		
		<div class="nav-wrapper">

			<nav id="primary_menu" class="menu"" role="navigation">

			<a class="header-logo" href="<?php echo SITELINK; ?>"></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			</nav> 

		</div>

			<?php
			if(is_front_page() || is_page('About')){
			if ( has_post_thumbnail() ) {
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo 
					'<div class="banner-wrapper" style="background">
					</div>';				
					}
				}
			?>
			
		<div class="circle-logo"></div> 
	
	</header>

<div id="content" class="site-content">	