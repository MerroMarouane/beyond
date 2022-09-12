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
class Footer{
   
	public function __construct() {
		add_action('init', array($this, 'footer_custom_post_type'));  
		add_action('init', array($this, 'Footer_custom_taxonomies')); 
 
	}
	public function footer_custom_post_type() {
		register_post_type( 'footer',
		array(
		'labels' => array(
		'name' => 'Footers ',
		'singular_name' => 'Footer',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Footer',
		'edit' => 'Edit',
		'edit_item' => 'Edit Footer',
		'new_item' => 'New Footer',
		'view' => 'View',
		'view_item' => 'View Footer',
		'search_items' => 'Search Footer',
		'not_found' => 'No Footer found',
		'not_found_in_trash' =>
		'No Footer found in Trash',
		'parent' => 'Parent Footer'
		),
	
		'public' => true,
		'show_in_rest' => true,
		'supports' =>
		array( 'title', 
		'thumbnail' , 'editor' , 'page-attributes' ),
		'taxonomies' => array( '' ),
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
	public function Footer_custom_taxonomies() {

		//add new taxonomy hierarchical
		$labels = array(
			'name' => 'Footer Categories',
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
			'rewrite' => array( 'slug' => 'footer_category' )
		);
		register_taxonomy('footer_category', array('footer'), $args);
		//add new taxonomy NOT hierarchical
	}
}

?>