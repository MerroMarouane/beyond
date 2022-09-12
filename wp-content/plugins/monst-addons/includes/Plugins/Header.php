<?php
/*
** ===================
** Monst Ecommerce Header
** Post type : Header;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
namespace Monstaddons\Plugins;
if (! defined('ABSPATH' )){
	die('-1');
}
class Header{
   
	public function __construct() {
		add_action('init', array($this, 'header_custom_post_type'));  
		add_action('init', array($this, 'header_custom_taxonomies')); 
 
	}
	public function header_custom_post_type() {
		register_post_type( 'header',
		array(
		'labels' => array(
		'name' => 'Headers ',
		'singular_name' => 'Header',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Header',
		'edit' => 'Edit',
		'edit_item' => 'Edit Header',
		'new_item' => 'New Header',
		'view' => 'View',
		'view_item' => 'View Header',
		'search_items' => 'Search Header',
		'not_found' => 'No Header found',
		'not_found_in_trash' =>
		'No Header found in Trash',
		'parent' => 'Parent Header'
		),
	
		'public' => true,
		'show_in_rest' => true,
		'rewrite'  => array('slug' => 'header'),
		'supports' =>
		array( 'title', 
		'thumbnail' , 'editor', 'page-attributes' ),
		'taxonomies' => array( ''),
		'show_in_menu'        => 'monst-panel',
		'show_in_nav_menus'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'has_archive' => false,
		'capability_type'    => 'post',
		'hierarchical'          => true,
		)
		);
	}
 
	public function header_custom_taxonomies() {

	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Header Categories',
		'singular_name' => 'Category',
		'search_items' => 'Search Category',
		'all_items' => 'All Category',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add New  Category',
		'new_item_name' => 'New Category Name',
		'menu_name' => 'Categories'
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'public'             => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'rewrite' => array( 'slug' => 'header_category' )
	);
	register_taxonomy('header_category', array('header'), $args);
	//add new taxonomy NOT hierarchical
}

}
?>