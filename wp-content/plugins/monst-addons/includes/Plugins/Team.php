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
class Team{
   
	public function __construct() {
		add_action('init', array($this, 'team_custom_post_type'));  
		add_action('init', array($this, 'Team_custom_taxonomies')); 
 
	}
	public function team_custom_post_type() {
		register_post_type( 'team',
		array(
		'labels' => array(
		'name' => 'Team',
		'singular_name' => 'Team',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Team',
		'edit' => 'Edit',
		'edit_item' => 'Edit Team',
		'new_item' => 'New Team',
		'view' => 'View',
		'view_item' => 'View Team',
		'search_items' => 'Search Team',
		'not_found' => 'No Team found',
		'not_found_in_trash' =>
		'No Team found in Trash',
		'parent' => 'Parent Team'
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
	public function Team_custom_taxonomies() {

		//add new taxonomy hierarchical
		$labels = array(
			'name' => 'Team Categories',
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
			'rewrite' => array( 'slug' => 'team_category' )
		);
		register_taxonomy('team_category', array('team'), $args);
		//add new taxonomy NOT hierarchical
	}
}

?>