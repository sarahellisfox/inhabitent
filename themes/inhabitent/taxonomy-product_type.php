<?php
/**
 * The template for displaying archive-products page.
 *
 * @package RED_Starter_Theme
 */
		
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="page-title">
				<h2 class="product-type">
					<?php single_term_title(); ?>
				</h2> 
				<p class="taxonomy-description">
					<?php the_archive_description() 
				?>
				</p>
			</div>

			<div class="shop-products-grid">

			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'taxonomy' );
						?>
			
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>		
			</div> 
	

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>