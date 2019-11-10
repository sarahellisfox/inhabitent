<?php get_header(); ?>



	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_front_page() && is_home() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		
		
		
		<div class="banner-logo-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="circle-logo">
		</div>


		</main>
		
	</div><!-- #primary -->

<?php get_sidebar(); ?> -->

<?php get_footer(); ?>
