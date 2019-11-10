<?php get_header(); ?> 

<?php if ( have_posts() ) : ?>

<?php if ( is_home() ) : ?>
    <section>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </section>
<?php endif; ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content' ); ?>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>