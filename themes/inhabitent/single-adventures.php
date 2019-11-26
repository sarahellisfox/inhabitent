<?php
/**
 * The template for displaying all pages.
 * Template Name: page-adventure
 *  @package RED_Starter_Theme
 */
?>

<?php get_header(); ?> 

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

    <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-singleadventure' ); ?>

    <?php endwhile; // End of the loop. ?>

        </main> 
    </div> 

<?php get_footer(); ?>