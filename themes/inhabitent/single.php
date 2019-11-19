<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div class="content-main">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

            <section class="journal-section-wrapper">


            <div id="secondary" class="widget-area" role="complementary">
                <?php get_sidebar(); ?>
            </div> 

                <div class="journal-section">   
            
                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                    <div class="journal-single-post">
                        <?php get_template_part('template-parts/content', 'blog'); ?>
                    </div> 

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                    <?php else : ?>

                        <?php get_template_part('template-parts/content', 'none'); ?>

                    <?php endif; ?>

            
                </div> 

            </section> 

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>