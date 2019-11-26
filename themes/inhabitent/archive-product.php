<?php
/**
 * The template for displaying archive-products page.
 *
 * @package RED_Starter_Theme
 */
		
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<h2> Shop Stuff </h2>

		<?php
			$terms = get_terms( array(
				'taxonomy' => 'product_type',
				'hide_empty' => 0, 

							) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>

			<div class="product-block-wrapper">
				<?php foreach ( $terms as $term ) : ?>
					<p><a href="<?php echo get_term_link( $term ); ?>" class="product-btn"><?php echo $term->name; ?></a></p>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
	</div> 

		<?php if ( have_posts() ) : ?>

			<div class="shop-products-grid">

				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'products' );
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