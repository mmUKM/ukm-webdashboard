<?php

function wdash_page_taxonomy() {

  // Categories
  
	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'wdash' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'wdash' ),
		'menu_name'                  => __( 'Category', 'wdash' ),
		'all_items'                  => __( 'All Categories', 'wdash' ),
		'parent_item'                => __( 'Parent Category', 'wdash' ),
		'parent_item_colon'          => __( 'Parent Category:', 'wdash' ),
		'new_item_name'              => __( 'New Category Name', 'wdash' ),
		'add_new_item'               => __( 'Add New Category', 'wdash' ),
		'edit_item'                  => __( 'Edit Category', 'wdash' ),
		'update_item'                => __( 'Update Category', 'wdash' ),
		'view_item'                  => __( 'View Category', 'wdash' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'wdash' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'wdash' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wdash' ),
		'popular_items'              => __( 'Popular Categories', 'wdash' ),
		'search_items'               => __( 'Search Categories', 'wdash' ),
		'not_found'                  => __( 'Not Found', 'wdash' ),
		'no_terms'                   => __( 'No Categories', 'wdash' ),
		'items_list'                 => __( 'Categories list', 'wdash' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'wdash' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'wdash_page_category', array( 'page' ), $args );

  // PTj

  $labels = array(
		'name'                       => _x( 'PTj', 'Taxonomy General Name', 'wdash' ),
		'singular_name'              => _x( 'PTj', 'Taxonomy Singular Name', 'wdash' ),
		'menu_name'                  => __( 'PTj', 'wdash' ),
		'all_items'                  => __( 'All PTjs', 'wdash' ),
		'parent_item'                => __( 'Parent PTj', 'wdash' ),
		'parent_item_colon'          => __( 'Parent PTj', 'wdash' ),
		'new_item_name'              => __( 'New PTj Name', 'wdash' ),
		'add_new_item'               => __( 'Add New PTj', 'wdash' ),
		'edit_item'                  => __( 'Edit PTj', 'wdash' ),
		'update_item'                => __( 'Update PTj', 'wdash' ),
		'view_item'                  => __( 'View PTj', 'wdash' ),
		'separate_items_with_commas' => __( 'Separate PTjs with commas', 'wdash' ),
		'add_or_remove_items'        => __( 'Add or remove PTjs', 'wdash' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wdash' ),
		'popular_items'              => __( 'Popular PTjs', 'wdash' ),
		'search_items'               => __( 'Search PTjs', 'wdash' ),
		'not_found'                  => __( 'Not Found', 'wdash' ),
		'no_terms'                   => __( 'No PTjs', 'wdash' ),
		'items_list'                 => __( 'PTjs list', 'wdash' ),
		'items_list_navigation'      => __( 'Categories PTj navigation', 'wdash' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'wdash_page_ptj', array( 'page' ), $args );

}
add_action( 'init', 'wdash_page_taxonomy', 0 );