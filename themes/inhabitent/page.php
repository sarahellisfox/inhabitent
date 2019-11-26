<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-page'); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
