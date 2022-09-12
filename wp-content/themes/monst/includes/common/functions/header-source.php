<?php
/**
 *Headers Source
 *@package Monst
**/
/*-----------------------------------------------------------
      Enqueue fonts
-----------------------------------------------------------*/
function monst_fonts_url() {
    $font_url = '';
    $Montserrat = _x( 'on', 'Montserrat font: on or off', 'monst' );
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $Poppins = _x( 'on', 'Poppins font: on or off', 'monst' );
    if ( 'off' !== $Montserrat || 'off' !== $Poppins ) {
    $font_families = array();
     
    if ( 'off' !== $Montserrat ) {
    $font_families[] = 'Montserrat:400,500,600,700,800,900';
    }
    if ( 'off' !== $Poppins ) {
    $font_families[] = 'Poppins:300,400,500,600,700,800,900';
    }
    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
        'subset' => urlencode( 'latin,latin-ext' ),
    );
    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    return esc_url_raw( $fonts_url );
}
    
/*-----------------------------------------------------------
Enque styles and scripts
-----------------------------------------------------------*/
function monst_enqueue_scripts_before_install_plugin(){
    wp_enqueue_style('monst-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' , array() , '5.0.2', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/font/css/all.min.css', array(), '6.0.0');
    wp_enqueue_style('monst-theme', get_template_directory_uri().'/assets/css/scss/theme-css.css' );
    if(monst_isMobile()){
        wp_enqueue_style('monst-mobile-scss', get_template_directory_uri().'/assets/css/scss/mobile.css' );
    }
    wp_enqueue_style('monst-style', get_template_directory_uri().'/style.css' );  
    wp_enqueue_style( 'monst-fonts', monst_fonts_url(), array(), null );
    wp_enqueue_style('monst-meta-box', get_template_directory_uri().'/assets/css/metabox.css' );      
    wp_enqueue_script('monst-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') , '5.0.2', true);
    wp_enqueue_script('monst-mobile', get_template_directory_uri() . '/assets/js/mobile-menu.js', array('jquery') , '1.0.0', true);
    wp_enqueue_script('monst-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery') , '1.0.0', true);
    if(is_singular() && comments_open() && get_option('thread_comments'))
    {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'monst_enqueue_scripts_before_install_plugin');
/*-----------------------------------------------------------
Filter to archive title and add page title for singular pages
-----------------------------------------------------------*/
function monst_the_archive_title($title){
    if(is_search()){
        $title = sprintf(esc_html__('Search Results', 'monst'));
    }
    elseif(is_404()){
        $title = sprintf(esc_html__('Page Not Found', 'monst'));
    }
    elseif(is_page())
    {
        $title = get_the_title();
    }
    elseif(is_single())
    {
        $title = get_the_title();
    }
    elseif (is_home() && is_front_page())
    {
        $title = esc_html__('The Latest Posts', 'monst');
    }
    elseif (is_home() && !is_front_page())
    {
        $title = get_the_title(get_option('page_for_posts'));
    }
    elseif(is_singular('portfolio'))
    {
        $title = get_the_title(get_the_ID());
    }
    elseif(is_singular('team'))
    {
        $title = get_the_title(get_the_ID());
    }
    elseif(is_singular('service'))
    {
        $title = get_the_title(get_the_ID());
    }
    elseif(is_tax() || is_category()  || is_tag())
    {
        $title = single_term_title('', false);
    }
    elseif(is_singular('post'))
    {
        $title = get_the_title(get_the_ID());
    }
    return $title;
}
add_filter('get_the_archive_title', 'monst_the_archive_title');
 