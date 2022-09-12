<?php
/**
 *  Headers Source
 *
 * @package Monst
 */

function header_search_content(){ ?>
<div id="search-popup" class="search-popup">
    <div class="close-search"><i class="flaticon-close"></i></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
                <input type="search" class="search form-control"
                    placeholder="<?php echo esc_attr__( 'Search...', 'monst' ); ?>"
                    value="<?php echo get_search_query() ?>" name="s"
                    title="<?php echo esc_attr__('Search' , 'monst'); ?>" />
                <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
            </form>
        </div>
    </div>
</div>
<?php } 
/*================================
            default logo
=================================*/
function monst_header_default_logo() {
    global $monst_theme_mod;
    $blog_title = get_bloginfo('name');
?>
<div class="logo_box">
    <a href="<?php  echo esc_url(home_url());   ?>"
        class="logo">
        <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </a>
</div>
<?php 
} 
add_action('default_logo' , 'monst_header_default_logo');
/*================================
            Syicky logo
=================================*/
  
function monst_header_sticky_logo() {
    global $monst_theme_mod;
    $blog_titles = get_bloginfo('name');
    $logo_sticky = '';
    if(!empty($monst_theme_mod['sticky_mobile_logo']['url'])):
       $logo_sticky =  $monst_theme_mod['sticky_mobile_logo']['url'];
    else:
        $logo_sticky =  get_template_directory_uri() . '/assets/images/monst-logo.svg';
    endif;
   
    
 ?>   
 <div class="logo_box">
 <a href="<?php if(!empty($monst_theme_mod['mobile_logo_link'])): echo esc_html($monst_theme_mod['mobile_logo_link']); else: echo esc_url(home_url()); endif; ?>" class="logo">
   <img src="<?php echo esc_url($logo_sticky); ?>" alt="<?php echo esc_attr($blog_titles); ?>" class="logo_default_sticky">
 </a>
 </div>
 <?php } 
 add_action('sticky_default_logo' , 'monst_header_sticky_logo'); 

/*---------monst_header_query--------*/
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
