
    <div id="primary" class="content-area">
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

        <section class="site-banner">
             <?php get_header(); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="circle-logo">
        </section>

        <section class="product-section-container">
            <h2> Shop Stuff </h2> 
            <div class="product-block-wrapper">

                <div class="product-block-single">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/do.svg" alt="Things to Do">
                    <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                    <button class="product-btn">Do Stuff</button>
                 </div> 

                 <div class="product-block-single">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/eat.svg" alt="Things to Eat">
                    <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                    <button class="product-btn">Eat Stuff</button>
                 </div> 

                 <div class="product-block-single">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/sleep.svg" alt="Where to Sleep">
                    <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                    <button class="product-btn">Sleep Stuff</button>
                 </div> 

                 <div class="product-block-single">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/wear.svg" alt="Things to Wear">
                    <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                    <button class="product-btn">Wear Stuff</button>
                 </div> 
            </div>
        </section> 

        </main>
        
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>