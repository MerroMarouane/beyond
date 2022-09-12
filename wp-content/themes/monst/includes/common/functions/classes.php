<?php
/**
 *  Theme Classes
 * @package Monst
**/
/*-----------------------------------------------------------
                   get body custom classes
-----------------------------------------------------------*/
function monst_body_classes($classes)
{
    global $post;
    global $monst_theme_mod;
    $monstrtlenableclsss = '';
    $header_sticky_enables = '';
    $dark_mode_enable = '';
    // Add a class of layout
    $classes[] = monst_get_layout();
    $classes[] = 'scrollbarcolor';
    // Adds a class of group-blog to blogs with more than 1 published author.
    if( !class_exists( 'Redux' ) ) {
        $classes[] = 'right-sidebar no_redux';
      }
    if (is_multi_author())
    {
        $classes[] = 'group-blog';
    }
    if (is_singular('page'))
    {
        $classes[] = 'page-' . $post->post_name;
    }
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular())
    {
        $classes[] = 'hfeed';
    }
    if(empty(is_active_sidebar('sidebar-blog')) && is_home() && !is_front_page()){
        $classes[] = 'no_sidebar';
    }
    if(is_page() && empty(is_active_sidebar('page-sidebar'))){
      $classes[] = 'no_sidebar';
    }
    if(is_post_type_archive('service') || is_singular('service') && empty(is_active_sidebar('service-sidebar'))){
        $classes[] = 'no_sidebar';
    }
    if(!empty($monst_theme_mod['header_sticky_enables'])){
      $header_sticky_enables = $monst_theme_mod['header_sticky_enables'];
    }
    if($header_sticky_enables == true){
        $classes[] = 'enabled_sticky_header ';
    }
    if(!empty($monst_theme_mod['rtl_enable_all'])){
      $monstrtlenableclsss = $monst_theme_mod['rtl_enable_all'];
    }
    if(!empty($monst_theme_mod['dark_mode_enable'])){
        $dark_mode_enable = $monst_theme_mod['dark_mode_enable'];
    }
    if($dark_mode_enable == true){
        $classes[] = 'dark_more_enable';
    }
    if ((get_post_meta(get_the_ID() , 'rtl_enable_disable', true)) || ($monstrtlenableclsss == true)){
        $classes[] = 'rtl_enable';
    }

    return $classes;
}
add_filter('body_class', 'monst_body_classes');