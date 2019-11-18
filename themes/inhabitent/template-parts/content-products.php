<?php
/**
 * Template part for displaying products.
 *
 * @package RED_Starter_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'shop' ); ?>
		<?php endif; ?>

		<div class="product-price-info">
			<p><?php echo get_the_title(); ?> ...
			<?php the_field( 'price' ); ?></p>
		</div> 

	</div><!-- .entry div -->
		</div><!-- #post-## -->
