
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

        <section class="journal-feature-container">
            <h2>Inhabitent Journal</h2> 
            <div class="journal-feature-block-wrapper">

            <?php
                $args = array( 'numberposts' => 3, 'order'=> 'desc', 'orderby' => 'date' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 
                    <div class="journal-feature-block-single">
                        <?php the_post_thumbnail(   'feature-post size'    ); ?>     
                        <div class="featured-text-wrapper"> 
                        <p class="featured-date"><?php the_date('j F, Y');?>  / <?php get_comments(); ?> </p>
                        <p class="featured-title"><?php the_title(); ?></p> 
                        <button class="featured-btn"><?php get_permalink(); ?>Read Entry</button>
                        </div>
                    </div>
            <?php endforeach; ?>

            </div> 
        </section> 

        <section class="latest-adventures-container">
            <h2>Latest Adventures</h2> 
            <div class="latest-adventures-block-wrapper">
                <div class="adventure-grid div1">
                    <div class="text-btn-wrap">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                <button class="read-more-button">Read More</button>
                    </div> 
                </div>
               

                <div class="adventure-grid div2">
                    <div class="text-btn-wrap">
                        <h3 class="adventure-text">A Night With Friends at the Beach</h3>
                <button class="read-more-button">Read More</button></div> 
                </div>
                
                <div class="adventure-grid div3">
                    <div class="text-btn-wrap">
                        <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                    <button class="read-more-button">Read More</button></div> 
                </div>

                <div class="adventure-grid div4">
                    <div class="text-btn-wrap">
                        <h3 class="adventure-text">Star-gazing at the Night Sky</h3>
                    <button class="read-more-button">Read More</button></div>
                </div>

                <button class="adventures-btn">More Adventures</button>

            </div> 
        </section> 

        </main>
        
    </div>

<?php get_footer(); ?>