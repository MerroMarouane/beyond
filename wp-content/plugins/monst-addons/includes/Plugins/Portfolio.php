<?php
/*
** ===================
** Monst Ecommerce Footer
** Post type : Footer;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
namespace Monstaddons\Plugins;
if (! defined('ABSPATH' )){
	die('-1');
}
class Portfolio{
   
	public function __construct() {
		add_action('init', array($this, 'portfolio_custom_post_type'));  
		add_action('init', array($this, 'Portfolio_custom_taxonomies')); 
 
	}
	public function portfolio_custom_post_type() {
		register_post_type( 'portfolio',
		array(
		'labels' => array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Portfolio',
		'edit' => 'Edit',
		'edit_item' => 'Edit Portfolio',
		'new_item' => 'New Portfolio',
		'view' => 'View',
		'view_item' => 'View Portfolio',
		'search_items' => 'Search Portfolio',
		'not_found' => 'No Portfolio found',
		'not_found_in_trash' =>
		'No Portfolio found in Trash',
		'parent' => 'Parent Portfolio'
		),
	
		'public' => true,
		'show_in_rest' => true,
		'supports' =>
		array( 'title', 
		'thumbnail' , 'editor' , 'page-attributes' , 'excerpt'),
		'taxonomies' => array( '' ),
 
		'show_in_nav_menus'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'has_archive' => false,
		'capability_type'    => 'post',
		'hierarchical'          => true,
		)
		);
	}
	public function Portfolio_custom_taxonomies() {

		//add new taxonomy hierarchical
		$labels = array(
			'name' => 'Portfolio Categories',
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
			'rewrite' => array( 'slug' => 'portfolio_category' )
		);
		register_taxonomy('portfolio_category', array('portfolio'), $args);
		//add new taxonomy NOT hierarchical
	}
}

?>