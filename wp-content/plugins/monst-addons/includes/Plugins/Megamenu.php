<?php
/*
** ===================
** Monst Ecommerce Mega Menu
** Post type : Mega Menu;
** version: 1.0;
** Authour : Steeltheme;
** ===================
*/
namespace Monstaddons\Plugins;
if (! defined('ABSPATH' )){
	die('-1');
}
class Megamenu{
  	 
	public function __construct() {
		add_action('init', array($this, 'mega_menu_custom_post_type'));  
	}
	function mega_menu_custom_post_type() {
		register_post_type( 'mega_menu',
		array(
		'labels' => array(
		'name' => 'Mega Menus ',
		'singular_name' => 'Mega Menu',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Mega Menu',
		'edit' => 'Edit',
		'edit_item' => 'Edit Mega Menu',
		'new_item' => 'New Mega Menu',
		'view' => 'View',
		'view_item' => 'View Mega Menu',
		'search_items' => 'Search Mega Menu',
		'not_found' => 'No Mega Menu found',
		'not_found_in_trash' =>
		'No Mega Menu found in Trash',
		'parent' => 'Parent Mega Menu'
		),
	
		'public' => true,
		'show_in_rest' => true,
		'supports' =>
		array( 'title', 
		'thumbnail' , 'editor' , 'page-attributes'),
		'taxonomies' => array( '' ),
		'show_in_menu'        => 'monst-panel',
		'show_in_nav_menus'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		'has_archive' => false,
		'hierarchical'          => true,
		'capability_type'    => 'post',
		)
		);
	}

}

 ?>