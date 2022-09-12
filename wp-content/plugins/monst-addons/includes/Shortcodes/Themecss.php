<?php
/**
 *  Theme Options
 * Contains Redux Option Output
 *
 * @package monst
 */
namespace Monstaddons\Shortcodes;


 class Themecss{

    
      public function __construct() {

          add_action('monst_get_custom_css', array($this, 'monst_customize_css'));
      
      }

  public static function monst_customize_css(){

        global $monst_theme_mod;
         
        $customize_css = '';
        
        $theme_color_one_css = '';
        $theme_color_two_css = '';
        $theme_color_three_css = '';
        $heading_color_css = '';
        $description_color_css  = '';
        $description_light_css = '';
        $border_color_css  = '';
        $menu_color_css = '';
        $menu_active_color_css = '';
        
        $preloader_css  = '';
        $theme_setttings_enable = '';
        if(!empty($monst_theme_mod['theme_setttings_enable'])):
        $theme_setttings_enable = $monst_theme_mod['theme_setttings_enable'];
        endif;
        if($theme_setttings_enable == true):
        
        /*--=========Theme Color Settings============--*/

        
            $body_bg_colorcss  = '';
            $body_bg_color = '';
            if(!empty($monst_theme_mod['body_bg_color'])):
            $body_bg_color = $monst_theme_mod['body_bg_color'];
            endif;
            $body_bg_colorcss = $body_bg_color;
            if(!empty($body_bg_colorcss)){
        
                $customize_css .= ' body , body.dark_more_enable  {background:' . $body_bg_colorcss . '!important;}';
            } 
        
            $theme_color_one = '';
            if(!empty($monst_theme_mod['theme_color_one'])):
            $theme_color_one = $monst_theme_mod['theme_color_one'];
            endif;
            $theme_color_one_css = $theme_color_one;
            if(!empty($theme_color_one_css)){
        
                $customize_css .= ':root   {--primary-color-one:' . $theme_color_one_css . '; --primary-color-three:' . $theme_color_one_css . '; --primary-color-four:' . $theme_color_one_css . '}';
            } 
        
        
            $theme_color_two = '';
            if(!empty($monst_theme_mod['theme_color_two'])):
            $theme_color_two = $monst_theme_mod['theme_color_two'];
            endif;
            $theme_color_two_css = $theme_color_two;
            if(!empty($theme_color_two_css)){
        
                $customize_css .= ':root   {--primary-color-two:' . $theme_color_two_css . '; }';
            } 
        
        
        
            $theme_bgcolor_one = '';
            if(!empty($monst_theme_mod['theme_bgcolor_one'])):
            $theme_bgcolor_one = $monst_theme_mod['theme_bgcolor_one'];
            endif;
            $theme_bgcolor_one_css = $theme_bgcolor_one;
            if(!empty($theme_bgcolor_one_css)){ 
                $customize_css .= ':root   {--background-color-one:' . $theme_bgcolor_one_css . '; --background-color-two:' . $theme_bgcolor_one_css . '; --background-color-three:' . $theme_bgcolor_one_css . ';
                    --background-color-four:' . $theme_bgcolor_one_css . ' ; --background-color-seven:' . $theme_bgcolor_one_css . ' ;}';
            } 


            $theme_bgcolor_two = '';
            if(!empty($monst_theme_mod['theme_bgcolor_two'])):
            $theme_bgcolor_two = $monst_theme_mod['theme_bgcolor_two'];
            endif;
            $theme_bgcolor_twocss = $theme_bgcolor_two;
            if(!empty($theme_bgcolor_twocss)){
        
                $customize_css .= ':root   {--background-color-five:' . $theme_bgcolor_twocss . '}';
            } 
        
            $theme_bgcolor_three = '';
            if(!empty($monst_theme_mod['theme_bgcolor_three'])):
            $theme_bgcolor_three = $monst_theme_mod['theme_bgcolor_three'];
            endif;
            $theme_bgcolor_threecss = $theme_bgcolor_three;
            if(!empty($theme_bgcolor_threecss)){
        
                $customize_css .= ':root   {--background-color-six:' . $theme_bgcolor_threecss . '}';
            } 
       
            $heading_color = '';
            if(!empty($monst_theme_mod['heading_color'])):
            $heading_color = $monst_theme_mod['heading_color'];
            endif;
            $heading_color_css = $heading_color;
            if(!empty($heading_color_css)){
        
                $customize_css .= ':root   {--heading-dark:' . $heading_color_css . '}';
            } 
        
            $description_color = '';
            if(!empty($monst_theme_mod['description_color'])):
            $description_color = $monst_theme_mod['description_color'];
            endif;
            $description_color_css = $description_color;
            if(!empty($description_color_css)){
        
                $customize_css .= ':root   {--text-color-dark:' . $description_color_css . '; --text-color-dark-two:' . $description_color_css . '; --text-color-dark-three:' . $description_color_css . ';
                    --text-color-dark-four:' . $description_color_css . '}';
            } 
        
        
            $description_light = '';
            if(!empty($monst_theme_mod['description_light'])):
            $description_light = $monst_theme_mod['description_light'];
            endif;
            $description_light_css = $description_light;
            if(!empty($description_light_css)){
        
                $customize_css .= ':root   {--text-color-light:' . $description_light_css . ' ; --text-color-light-two:' . $description_light_css . '}';
            } 
        
        
            $border_color = '';
            if(!empty($monst_theme_mod['border_color'])):
            $border_color = $monst_theme_mod['border_color'];
            endif;
            $border_color_css = $border_color;
            if(!empty($border_color_css)){
        
                $customize_css .= ':root   {--border-color-one:' . $border_color_css . ' ; --border-color-two:' . $border_color_css . '}';
            } 

            $border_color_two = '';
            if(!empty($monst_theme_mod['border_color_two'])):
            $border_color_two = $monst_theme_mod['border_color_two'];
            endif;
            $border_color_twocss = $border_color_two;
            if(!empty($border_color_twocss)){
        
                $customize_css .= ':root   {--border-color-three:' . $border_color_twocss . '}';
            } 

            $border_color_three = '';
            if(!empty($monst_theme_mod['border_color_three'])):
            $border_color_three = $monst_theme_mod['border_color_three'];
            endif;
            $border_color_threecss = $border_color_three;
            if(!empty($border_color_threecss)){
                $customize_css .= ':root   {--border-color-four:' . $border_color_threecss . ' ; --border-color-five:' . $border_color_threecss . '}';
            } 
        
        
            $menu_color = '';
            if(!empty($monst_theme_mod['menu_color'])):
            $menu_color = $monst_theme_mod['menu_color'];
            endif;
            $menu_color_css = $menu_color;
            if(!empty($menu_color_css)):
                $customize_css .= ':root{--mobile-menu-color:' . $menu_color_css . '!important}';
            endif;
        
        $menu_active_color = '';
            if(!empty($monst_theme_mod['menu_active_color'])):
            $menu_active_color = $monst_theme_mod['menu_active_color'];
            endif;
            $menu_active_color_css = $menu_active_color;
            if(!empty($menu_active_color_css)):
                $customize_css .= ':root   {--menu-active-color:' . $menu_active_color_css . '!important}';
            endif;
        /*--=========Theme Color Settings - end============--*/
        endif;
        /*--=========Theme Color Settings - end ============--*/
        /*--=========preloader============--*/
        if(!empty($monst_theme_mod['pre_loader_background'])){
            $preloader = $monst_theme_mod['pre_loader_background'];
            $preloader_css = $preloader ? 'background-color:' . $preloader . '!important; ' : '';
            if(!empty($preloader_css))
            {
              $customize_css .= ' .preloader-active {' . $preloader_css . '}';
            }
        }  
        /*--=========preloader============--*/
        $default_page_header_bg = '';
        if(!empty($monst_theme_mod['default_page_header_bg_color'])){
            $default_page_header_bg = $monst_theme_mod['default_page_header_bg_color'];
            $default_page_header_bg_css = $default_page_header_bg ? 'background:' . $default_page_header_bg . '!important; ' : '';
            if(!empty($default_page_header_bg_css))
            {
              $customize_css .= ' .blog_single_page_header, .page_header_default {' . $default_page_header_bg_css . '}';
            }
        }


        
        /*--=========Page Header For all Pages and oother custom posts============--*/

        if(get_post_meta(get_the_ID() , 'page_header_bgcolor_enable', true)){
            if(!empty(get_post_meta(get_the_ID() , 'page_header_bgcolor', true))): 
            $customize_css .= '.page_header_default:before {  background : ' . get_post_meta(get_the_ID() , 'page_header_bgcolor', true) . '!important}';
        endif;
        } 
        /*--=========Page Header Single Posts============--*/

          if(get_post_meta(get_the_ID() , 'blog_page_header_bgcolor_enable', true)){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_page_header_bgcolor', true))):
            $customize_css .= '.blog_single_page_header:before {  background : ' . get_post_meta(get_the_ID() , 'blog_page_header_bgcolor', true) . '!important}';
        endif;
        } 
        /*--=========Page Header Padding  ============--*/
        $page_header_padding = '';
        $page_header_padding_css = '';
        if(!empty($monst_theme_mod['page_header_padding'])):
        $page_header_padding = $monst_theme_mod['page_header_padding'];
        endif;
        $page_header_padding_css = $page_header_padding;
        if(get_post_meta(get_the_ID() , 'page_header_custom_style', true)){ 
            if(!empty(get_post_meta(get_the_ID() , 'page_header_padding_custom', true))):
            $customize_css .= '.page_header_default   {padding:' . get_post_meta(get_the_ID() , 'page_header_padding_custom', true) . '!important}';
        endif;
        } 
        
        elseif(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', true)){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_page_header_padding_custom', true))):
            $customize_css .= '.blog_single_page_header   {padding:' . get_post_meta(get_the_ID() , 'blog_page_header_padding_custom', true) . '!important}';
        endif;
        } 
        else{
            if(!empty($page_header_padding_css)):
            $customize_css .= ' .blog_single_page_header  , .page_header_default   {padding:' . $page_header_padding_css . '!important}';
            endif;
        }

    //page header title css
        $pg_title_color = '';
        $pg_title_color_css = '';
        if(!empty($monst_theme_mod['pageheader_title_color'])):
            $pg_title_color = $monst_theme_mod['pageheader_title_color'];
        endif;
        $pg_title_color_css = $pg_title_color;
        if(!empty($pg_title_color_css)):
            $customize_css .= ' .blog_single_page_header .page_header_content h1 , .page_header_default .banner_title_inner h1 {color:' . $pg_title_color_css . '!important}';
        endif;
        if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_pg_title_colors', true))):
            $customize_css .= ' .blog_single_page_header .page_header_content h1 {color:' . get_post_meta(get_the_ID() , 'blog_pg_title_colors', true) . '!important}';
            endif;
        } 
        elseif(get_post_meta(get_the_ID() , 'page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'pg_title_color', true))):
            $customize_css .= ' .page_header_default .banner_title_inner h1 {color:' . get_post_meta(get_the_ID() , 'pg_title_color', true) . '!important}';
            endif;
        } 
        
    //page header breadcrumb css
        $pageheader_breadcrumb_color = '';
        $pageheader_breadcrumb_colorcss = '';
        if(!empty($monst_theme_mod['pageheader_breadcrumb_color'])):
            $pageheader_breadcrumb_color = $monst_theme_mod['pageheader_breadcrumb_color'];
        endif;
        $pageheader_breadcrumb_colorcss = $pageheader_breadcrumb_color;
        if(!empty($pageheader_breadcrumb_colorcss)):
            $customize_css .= ' .breadcrumbs ul li a {color:' . $pageheader_breadcrumb_colorcss . '!important}';
        endif;
        if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_breadcrumb_text_color', true))):
            $customize_css .= ' .breadcrumbs ul li a  {color:' . get_post_meta(get_the_ID() , 'blog_breadcrumb_text_color', true) . '!important}';
        endif;
        } 
        elseif(get_post_meta(get_the_ID() , 'page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'breadcrumb_text_color', true))):
            $customize_css .= ' .breadcrumbs ul li a  {color:' . get_post_meta(get_the_ID() , 'breadcrumb_text_color', true) . '!important}';
         endif;
        } 
         

         //page header breadcrumb active css
         $pageheader_breadcrumb_active_color = '';
         $pageheader_breadcrumb_active_colorcss = '';
         if(!empty($monst_theme_mod['pageheader_breadcrumb_active_color'])):
             $pageheader_breadcrumb_active_color = $monst_theme_mod['pageheader_breadcrumb_active_color'];
         endif;
         $pageheader_breadcrumb_active_colorcss = $pageheader_breadcrumb_active_color;
         if(!empty($pageheader_breadcrumb_active_colorcss)):
            $customize_css .= ' .breadcrumbs ul li.active {color:' . $pageheader_breadcrumb_active_colorcss . '!important}';
            endif;
         if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_breadcrumb_active_text_color', true))):
             $customize_css .= ' .breadcrumbs ul li.active {color:' . get_post_meta(get_the_ID() , 'blog_breadcrumb_active_text_color', true) . '!important}';
            endif;
         } 
         elseif(get_post_meta(get_the_ID() , 'page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'pageheader_breadcrumb_active_color', true))):
            $customize_css .= ' .breadcrumbs ul li.active  {color:' . get_post_meta(get_the_ID() , 'pageheader_breadcrumb_active_color', true) . '!important}';
        endif;
        } 
         
       
         //page header breadcrumb arrow css css
         $pageheader_breadcrumb_arrow_color = '';
         $pageheader_breadcrumb_arrow_colorcss = '';
         if(!empty($monst_theme_mod['pageheader_breadcrumb_arrow_color'])):
             $pageheader_breadcrumb_arrow_color = $monst_theme_mod['pageheader_breadcrumb_arrow_color'];
         endif;
         $pageheader_breadcrumb_arrow_colorcss = $pageheader_breadcrumb_arrow_color;
         if(!empty($pageheader_breadcrumb_arrow_colorcss)):
            $customize_css .= ' .breadcrumbs ul li:after {color:' . $pageheader_breadcrumb_arrow_colorcss . '!important}';
            endif;
         if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_breadcrumb_arrow_color', true))):
             $customize_css .= ' .breadcrumbs ul li:after {color:' . get_post_meta(get_the_ID() , 'blog_breadcrumb_arrow_color', true) . '!important}';
            endif;
         } 
         elseif(get_post_meta(get_the_ID() , 'page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'breadcrumb_arrow_color', true))):
            $customize_css .= ' .breadcrumbs ul li:after  {color:' . get_post_meta(get_the_ID() , 'breadcrumb_arrow_color', true) . '!important}';
        endif;
        } 
        
         

         //page header breadcrumb arrow css css
         $pageheader_cat_color = '';
         $pageheader_cat_colorcss = '';
         if(!empty($monst_theme_mod['pageheader_cat_color'])):
             $pageheader_cat_color = $monst_theme_mod['pageheader_cat_color'];
         endif;
         $pageheader_cat_colorcss = $pageheader_cat_color;
         if(!empty($pageheader_cat_colorcss)):
            $customize_css .= '.blog_single_page_header .page_header_content .meta_box li a {color:' . $pageheader_cat_colorcss . '!important}';
           endif;
         if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_cat_color', true))):
             $customize_css .= ' .blog_single_page_header .page_header_content .meta_box li a {color:' . get_post_meta(get_the_ID() , 'blog_cat_color', true) . '!important}';
            endif;
         } 
         
       

        //page header breadcrumb arrow css css
        $pageheader_cat_bg_color = '';
        $pageheader_cat_bg_colorcss = '';
        if(!empty($monst_theme_mod['pageheader_cat_bg_color'])):
            $pageheader_cat_bg_color = $monst_theme_mod['pageheader_cat_bg_color'];
        endif;
        $pageheader_cat_bg_colorcss = $pageheader_cat_bg_color;
        if(!empty($pageheader_cat_bg_colorcss)):
            $customize_css .= ' .blog_single_page_header .page_header_content .meta_box li a {background:' . $pageheader_cat_bg_colorcss . '!important}';
            endif;
        if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_catbg_color', true))):
            $customize_css .= ' .blog_single_page_header .page_header_content .meta_box li a {background:' . get_post_meta(get_the_ID() , 'blog_catbg_color', true) . '!important}';
        endif;
        } 
        
           

         //page header breadcrumb arrow css css
         $pageheader_date_color = '';
         $pageheader_date_colorcss = '';
         if(!empty($monst_theme_mod['pageheader_date_color'])):
             $pageheader_date_color = $monst_theme_mod['pageheader_date_color'];
         endif;
         $pageheader_date_colorcss = $pageheader_date_color;
         if(!empty($pageheader_date_colorcss)):
            $customize_css .= ' .blog_single_page_header .page_header_content .meta_box li.date {color:' . $pageheader_date_colorcss . '!important}';
           endif;
         if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_date_color', true))):
             $customize_css .= ' .blog_single_page_header .page_header_content .meta_box li.date {color:' . get_post_meta(get_the_ID() , 'blog_date_color', true) . '!important}';
            endif;
         } 
         
            

           //page header breadcrumb arrow css css
           $pageheader_auton_extra_color = '';
           $pageheader_auton_extra_colorcss = '';
           if(!empty($monst_theme_mod['pageheader_auton_extra_color'])):
               $pageheader_auton_extra_color = $monst_theme_mod['pageheader_auton_extra_color'];
           endif;
           $pageheader_auton_extra_color = $pageheader_auton_extra_color;
           if(!empty($pageheader_auton_extra_color)):
            $customize_css .= ' .blog_single_page_header .page_header_content .authour_content_box .authour_content h6 {color:' . $pageheader_auton_extra_color . '!important}';
         endif;
           if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
            if(!empty(get_post_meta(get_the_ID() , 'blog_authour_text_color', true))):
               $customize_css .= ' .blog_single_page_header .page_header_content .authour_content_box .authour_content h6 {color:' . get_post_meta(get_the_ID() , 'blog_authour_text_color', true) . '!important}';
            endif;
           } 
           

             //page header breadcrumb arrow css css
             $pageheader_auton_color = '';
             $pageheader_auton_colorcss = '';
             if(!empty($monst_theme_mod['pageheader_auton_color'])):
                 $pageheader_auton_color = $monst_theme_mod['pageheader_auton_color'];
             endif;
             $pageheader_auton_colorcss = $pageheader_auton_color;
             if(!empty($pageheader_auton_colorcss)):
                $customize_css .= ' .blog_single_page_header .page_header_content .authour_content_box .authour_content h4 {color:' . $pageheader_auton_colorcss . '!important}';
               endif;
             if(get_post_meta(get_the_ID() , 'blog_page_header_custom_style', false) == true){ 
                if(!empty(get_post_meta(get_the_ID() , 'blog_authour_color', true))):
                 $customize_css .= ' .blog_single_page_header .page_header_content .authour_content_box .authour_content h4 {color:' . get_post_meta(get_the_ID() , 'blog_authour_color', true) . '!important}';
                endif;
             } 
            
              
        /*--=========side btn tool tip width============--*/
        $side_menu_button_width_css = '';
        $side_menu_button_width = '';
        if(!empty($monst_theme_mod['side_menu_button_widths'])){
            $side_menu_button_width = $monst_theme_mod['side_menu_button_widths'];
            $side_menu_button_width_css = $side_menu_button_width ? 'min-width:' . $side_menu_button_width . '!important; ' : '';
            if(!empty($side_menu_button_width_css))
            {
              $customize_css .= ' .sidemenu_area #side_menu_toggle_btn .text_rotate {' . $side_menu_button_width_css . '}';
            }
        }
             
       

        return $customize_css;
        }
        
 }



