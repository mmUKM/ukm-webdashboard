<?php

function wdash_page_taxonomy() {

  // Tags
  
	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'wdash' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'wdash' ),
		'menu_name'                  => __( 'Tag', 'wdash' ),
		'all_items'                  => __( 'All Tags', 'wdash' ),
		'parent_item'                => __( 'Parent Tag', 'wdash' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'wdash' ),
		'new_item_name'              => __( 'New Tag Name', 'wdash' ),
		'add_new_item'               => __( 'Add New Tag', 'wdash' ),
		'edit_item'                  => __( 'Edit Tag', 'wdash' ),
		'update_item'                => __( 'Update Tag', 'wdash' ),
		'view_item'                  => __( 'View Tag', 'wdash' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wdash' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wdash' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wdash' ),
		'popular_items'              => __( 'Popular Tags', 'wdash' ),
		'search_items'               => __( 'Search Tags', 'wdash' ),
		'not_found'                  => __( 'Not Found', 'wdash' ),
		'no_terms'                   => __( 'No itags', 'wdash' ),
		'items_list'                 => __( 'Tags list', 'wdash' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'wdash' ),
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
	register_taxonomy( 'wdash_page_tag', array( 'page' ), $args );

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
		'items_list_navigation'      => __( 'Tags PTj navigation', 'wdash' ),
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