<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="product-section-container">
            <h2 class="front-page-title">Shop Stuff</h2>

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
                        <p class="product-desc-text"><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="product-btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>

        <section class="journal-feature-container">
            <h2 class="front-page-title">Inhabitent Journal</h2> 
            <div class="journal-feature-block-wrapper">

            <?php
                $args = array( 'numberposts' => 3);
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?> 
                    <div class="journal-feature-block-single">
                        <?php the_post_thumbnail( 'feature-post size' ); ?>     
                        <div class="featured-text-wrapper"> 
                        <p class="featured-date"><?php the_date('j F, Y');?>  / <?php comments_number('0 comments ', '1 comment', '% comments'); ?> </p>
                        <p class="featured-title"><?php the_title(); ?></p> 
                        <a href=" <?php the_permalink(); ?>"><button class="featured-btn">Read Entry</button></a>
                        </div>
                    </div>
            <?php endforeach; ?>

            </div> 
        </section> 

        <section class="latest-adventures-container">
            <h2 class="front-page-title">Latest Adventures</h2> 
        <div class="latest-adventures-block-wrapper">
                <?php
                    $args = array( 
                        'post_type' => 'adventures',
                        'posts_per_page' => 4, 
                    ); 
                    $adventures = new WP_Query( $args );
                ?>
                <?php if ( $adventures->have_posts() ) : ?>    
                    <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
                        <div class="adventure-block" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)), #969696 url(' <?php the_post_thumbnail_url(); ?> ') no-repeat top; background-size: cover, cover;)">
                            <div class="text-btn-wrap"> 
                                <h3 class="adventure-text"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>"><button class="readmore-button">Read More</button></a>
                            </div>
                        </div>
        
                <?php 
                
                endwhile; ?>

</div> 
<?php
            endif;?>
            <div class="adventure-btn-wrapper">
            <button class="adventures-btn">More Adventures</button>
                    </div> 
            </div> 
 
        </section> 

        </main>
        
    </div>

<?php get_footer(); ?>