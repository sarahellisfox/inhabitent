<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Products', 'text_domain' ),
		'archives'              => __( 'Products Archives', 'text_domain' ),
		'attributes'            => __( 'Products Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'New Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Products', 'text_domain' ),
		'search_items'          => __( 'Search products', 'text_domain' ),
		'not_found'             => __( 'No products found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		'menu_icon' 			=> 'dashicons-cart', 
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'has_archive'           => 'products'  

	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'products_post_type', 0 );


// Register Custom Post Type
function adventures_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventures', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventure', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Adventure Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'Adventures', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure', 'text_domain' ),
		'add_new'               => __( 'New Adventure', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'view_items'            => __( 'View Adventures', 'text_domain' ),
		'search_items'          => __( 'Search Adventures', 'text_domain' ),
		'not_found'             => __( 'No Adventures found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Adventures found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adventure', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adventure', 'text_domain' ),
		'items_list'            => __( 'Adventures list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Adventures list', 'text_domain' ),
		'menu_icon' 			=> 'dashicons-cart', 
	);
	$args = array(
		'label'                 => __( 'Aventure', 'text_domain' ),
		'description'           => __( 'Adventure information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'has_archive'           => 'adventures'  

	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'adventures_post_type', 10 );
