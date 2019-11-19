<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'product' ); ?>
		<?php endif; ?>

		<div class="single-product-text">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<p class="product-price">$<?php the_field( 'price' ); ?></p>
			<?php the_content(); ?></p>

			<div class="social-media-btn">
				<button class="social-btn"><i class="fab fa-facebook-f"></i> Like</button>
				<button class="social-btn"><i class="fab fa-twitter"></i> Tweet</button>
				<button class="social-btn"><i class="fab fa-pinterest"></i> Pin</button>
			</div>
		</div> 
	</div> 

</article><!-- #post-## -->
