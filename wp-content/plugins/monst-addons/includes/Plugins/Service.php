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
class Service{
   
	public function __construct() {
		add_action('init', array($this, 'service_custom_post_type'));  
		add_action('init', array($this, 'service_custom_taxonomies')); 
 
	}
	public function service_custom_post_type() {
		register_post_type( 'service',
		array(
		'labels' => array(
		'name' => 'Service',
		'singular_name' => 'Service',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Service',
		'edit' => 'Edit',
		'edit_item' => 'Edit Service',
		'new_item' => 'New Service',
		'view' => 'View',
		'view_item' => 'View Service',
		'search_items' => 'Search Service',
		'not_found' => 'No Service found',
		'not_found_in_trash' =>
		'No Service found in Trash',
		'parent' => 'Parent Service'
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
	public function service_custom_taxonomies() {

		//add new taxonomy hierarchical
		$labels = array(
			'name' => 'Service Categories',
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
			'rewrite' => array( 'slug' => 'service_category' )
		);
		register_taxonomy('service_category', array('service'), $args);
		//add new taxonomy NOT hierarchical
	}
}

?>