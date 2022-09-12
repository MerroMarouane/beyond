<?php
/**
 * monst  functions and definitions
 * @package monst WordPress Theme
 * @version 1.0.0
 */

/* Theme setup */
/*==============includeslude Walker file==============*/
require_once get_template_directory() . '/includes/WP_Bootstrap_Navwalker.php';

/*
==========================================
add_theme_support
==========================================
*/
function monst_cat_meta_postbox_css(){
	wp_enqueue_style('meta-box-css', get_template_directory_uri().'/assets/css/metabox.css' );    
  }
add_action('admin_enqueue_scripts', 'monst_cat_meta_postbox_css');
function monst_setup()
{
if(!isset($content_width))
$content_width = 840;
/*---------- Make theme available for translation-----------*/
load_theme_textdomain('monst', get_template_directory() . '/lang');
/*----------Add Theme Support-----------*/
add_theme_support('post-thumbnails');
add_theme_support('html5', array(
    'search-form'
));
add_theme_support('title-tag');
add_theme_support('post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
// Add default posts and comments RSS feed links to head.
add_theme_support('automatic-feed-links');

 
/*----------woocommerce Theme Support-----------*/ 
add_theme_support( 'woocommerce');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
/*----------editor-style-----------*/
add_editor_style('assets/css/editor-style.css');
/*----------register_nav_menus-----------*/
register_nav_menus(array(
     'primary' => esc_html__('Primary Menu (For Sticky Header And Mobile Header)', 'monst') ,
));

}
add_action('after_setup_theme', 'monst_setup');


/*-----------------------------------------------------------
Register widgetized area and update sidebar with default widgets. 
-----------------------------------------------------------*/

function monst_register_sidebar()
{
    $sidebars = array(
        'sidebar-blog' => esc_html__('Blog Sidebar', 'monst') ,
        'page-sidebar' => esc_html__('Page Sidebar', 'monst') ,
    );
    // Register sidebars
    foreach ($sidebars as $id => $name)
    {
        register_sidebar(
        array(
            'name' => $name,
            'id' => $id,
            'description' => esc_html__('Add widgets here in order to display on pages', 'monst') ,
            'before_widget' => '<div class="widgets_grid_box"><div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div> </div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }
}
add_action('widgets_init', 'monst_register_sidebar');
/*-----------------------------------------------------------
                monst_default_query
-----------------------------------------------------------*/
  /*---------monst_default_query--------*/
  if (!function_exists('monst_default_query')) {
    function monst_default_query($post_type){
 
    $post_list = get_posts(array(
        'post_type' => $post_type,
        'showposts' => -1,
    ));
    $posts = array();
    if(!empty($post_list) && !is_wp_error($post_list)) {
        foreach ($post_list as $post) {
            $options[$post->ID] = $post->post_title;
        }
        return $options;
    }
}
}

/*----plugin-activation--------*/
require get_template_directory() . '/includes/class-tgm-plugin-activation.php';
require get_template_directory() . '/includes/options/pluginarrays.php';
/*------includes > Options---------------*/
if(class_exists('Redux')){
    require get_template_directory() . '/includes/options/config.php';
}
/*----includes > custom--------*/
require get_template_directory() . '/includes/custom/color-switcher.php';
require get_template_directory() . '/includes/custom/side-menu.php';
/*----includes > custom-menu-option--------*/
require get_template_directory() . '/includes/custom-menu-option.php';
/*------ includes > common---------------*/
require get_template_directory() . '/includes/common/functions/header-source.php';
require get_template_directory() . '/includes/common/functions/layout.php';
require get_template_directory() . '/includes/common/functions/classes.php';
require get_template_directory() . '/includes/common/functions/meta.php';
require get_template_directory() . '/includes/common/lib/breadcrumbs.php';

/*------ templateparts > header---------------*/
require get_template_directory() . '/template-parts/headers/header-content.php';

require get_template_directory() . '/template-parts/headers/mobile-menu.php';
/*------ templateparts > pageheader---------------*/
if(!class_exists('Redux')){
require get_template_directory() . '/template-parts/page-header/default-page-header.php';
}if(class_exists('Redux')){
require get_template_directory() . '/template-parts/page-header/page-header.php';
require get_template_directory() . '/template-parts/page-header/blog-pageheader.php';}
/*------includes > functions---------------*/
require get_template_directory() . '/includes/lib/functions/comments.php';
require get_template_directory() . '/includes/lib/functions/nav.php';
 