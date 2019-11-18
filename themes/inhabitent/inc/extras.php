<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo_one()
{
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg"); 
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo_one');
add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url)
{
    return home_url();
}

// Sets number of boxes in shop grid

function change_product_posts_number($query) {
    if ( $query->is_main_query() ) {
      if( is_post_type_archive('product') ) {
        $query->set( 'posts_per_page', 16 );
      }
    }
}
add_action( 'pre_get_posts', 'change_product_posts_number' );