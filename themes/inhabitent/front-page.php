<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="product-section-container">
            <h2>Shop Stuff</h2>

            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>

               <div class="product-block-wrapper">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-block-single">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="product-btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
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