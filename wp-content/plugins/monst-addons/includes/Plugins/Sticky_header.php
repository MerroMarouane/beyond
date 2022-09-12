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
class Sticky_header{
   
	public function __construct() {
		add_action('init', array($this, 'sticky_header_custom_post_type'));  
	}
	public function sticky_header_custom_post_type() {
		register_post_type( 'sticky_header',
		array(
		'labels' => array(
		'name' => 'Sticky Headers ',
		'singular_name' => 'Sticky Header',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Sticky Header',
		'edit' => 'Edit',
		'edit_item' => 'Edit Sticky Header',
		'new_item' => 'New Sticky Header',
		'view' => 'View',
		'view_item' => 'View Sticky Header',
		'search_items' => 'Search Sticky Header',
		'not_found' => 'No Sticky Header found',
		'not_found_in_trash' =>
		'No Sticky Header found in Trash',
		'parent' => 'Parent Sticky Header'
		),
	
		'public' => true,
		'show_in_rest' => true,
		'rewrite'  => array('slug' => 'sticky_header'),
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
  

}
?>