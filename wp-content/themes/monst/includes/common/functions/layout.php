<?php 
/**
 * Layouts
 * @package monst
 */

/*-----------------------------------------------------------
                   Display page header
-----------------------------------------------------------*/
if(!function_exists('monst_has_page_header')):
/**
* Check ifcurrent page has page header
*
* @return bool
*/
    
function monst_has_page_header(){
        global $monst_theme_mod;
        $pgheaderone = '';
        if(!empty($monst_theme_mod['page_header_enable'])){
            $pgheaderone = $monst_theme_mod['page_header_enable'];
        }
        if((is_page()  || is_singular(array('portfolio' , 'team' , 'service' ))) && (get_post_meta(get_the_ID() , 'page_header_enable_disablsseds', true)))
        {
            return false;
        }
        if((is_singular(array('post' ))) && (get_post_meta(get_the_ID() , 'postpg_header_enable_disableds', true)))
        {
            return false;
        }
        elseif(is_singular('mega-menu'))
        {
            return false;
        }
        elseif(is_singular('header'))
        {
            return false;
        }
        elseif(is_singular('footer'))
        {
            return false;
        }
        elseif(is_404()){
        return false;
        }
        elseif(is_page_template('template-homepage.php'))
        {
            return false;
        }
        elseif(is_page_template('template-blog.php'))
        {
            return false;
        }
        elseif(is_attachment())
        {
            return false;
        }
        return   $pgheaderone;
    }
endif;

/*-----------------------------------------------------------
                   Display page header image
-----------------------------------------------------------*/

if(!function_exists('monst_get_default_header_image')):
    /**
    * Get page header image URL
    * @return string
    */
    function monst_get_default_header_image()
    {    global $monst_theme_mod;
         
            if(!monst_has_page_header())
            {
                return '';
            }
            if(is_page() || is_singular(array('team' ,'portfolio','service')))
            {
                $page_header_bgimages =  get_post_meta(get_the_ID() , 'page_header_bgimages', true);
                if(get_post_meta(get_the_ID() , 'page_header_bg_image_shows', true) == true){
                ?>
                <div class="parallax_cover">
                    <img src=" <?php echo esc_url($page_header_bgimages['url']); ?>" alt="<?php echo esc_attr('bg_image' ,'monst'); ?>" />
                </div>
                <?php
                }
            }
            else{ 
                $image = $monst_theme_mod['default_page_header_image']['url'];
                if(!empty($image)):
                ?>
                    <div class="parallax_cover">
                        <img src="<?php echo  esc_url($image); ?>" alt="<?php echo esc_attr('bg_image' , 'monst'); ?>"/>
                    </div>
                <?php  endif;
            } 
             
    }
    endif;

/*-----------------------------------------------------------
                   Display blog page header image
-----------------------------------------------------------*/

    if(!function_exists('monst_get_blog_header_image')):
        /**
        * Get page header image URL
        * @return string
        */
        function monst_get_blog_header_image()
        {    global $monst_theme_mod;
             
                if(!monst_has_page_header())
                {
                    return '';
                }
                
                if(is_singular(array('post'))){
                $blog_page_header_bgimage =  get_post_meta(get_the_ID() , 'blog_page_header_bgimage', true);
                if(get_post_meta(get_the_ID() , 'blog_page_header_bg_image_show', true) == true){
                ?>
                    <div class="parallax_cover">
                        <img src="<?php echo esc_url($blog_page_header_bgimage['url']); ?>" alt="<?php echo esc_attr('bg_image' , 'monst'); ?>"  />
                    </div>
                <?php
                }
            }
            else{ 
            $image = $monst_theme_mod['default_page_header_image']['url'];
            if(!empty($image)):
            ?>
                <div class="parallax_cover">
                    <img src="<?php echo  esc_url($image); ?>" alt="<?php echo esc_attr('bg_image' , 'monst'); ?>"/>
                </div>
            <?php endif; 
            }  
        }
        endif;
       
/*-----------------------------------------------------------
           monst_get_layout and column  
-----------------------------------------------------------*/


if(!function_exists('monst_get_layout')):
    /**
    * Get header base on current page
    *
    * @return string
    */
   function monst_get_layout(){
       global $monst_theme_mod;
       $monst_layout = '';
       $monst_layout_page = '';
       $monst_layout_service = '';
       $monst_layout_portfolios = '';
       $monst_layout_shop = '';
       if(!empty($monst_theme_mod['layout_default'])){
       $monst_layout = $monst_theme_mod['layout_default'];
       }
       if(!empty($monst_theme_mod['layout_page'])){
       $monst_layout_page = $monst_theme_mod['layout_page'];
       }
       if(!empty($monst_theme_mod['layout_service'])){
       $monst_layout_service = $monst_theme_mod['layout_service'];
       }

       if(!empty($monst_theme_mod['layout_shop'])){
       $monst_layout_shop = $monst_theme_mod['layout_shop'];
       }
       if(is_singular() && get_post_meta(get_the_ID() , 'custom_layout', true))
       {
           $monst_layout = get_post_meta(get_the_ID() , 'layout', true);
       }
       elseif(is_page())
       {
           $monst_layout =  $monst_layout_page;
       }
       elseif(is_404())
       {
           $monst_layout = 'no-sidebar';
       }
      
       elseif(is_singular('service'))
       {
           $monst_layout =  $monst_layout_service;
       }
 
       return $monst_layout;
   }

endif;


if(!function_exists('monst_get_content_columns')):
   /**
    * Get CSS classes for content columns
    *
    * @param string $layout
    *
    * @return array
    */
   function monst_get_content_columns($monst_layout = null)
   {
       $monst_layout = $monst_layout ? $monst_layout : monst_get_layout();
       if('no-sidebar' == $monst_layout)
       {
           echo esc_html('no_column' , 'monst');
       }
       else{
           echo esc_html('col-lg-8 col-md-12 col-sm-12 col-xs-12', 'monst' );
       }  
   }
endif;


if(!function_exists('monst_column_for_page')):
    function monst_column_for_page(){
        if(is_active_sidebar('page-sidebar')){
            monst_get_content_columns();
        }
        elseif(!is_active_sidebar('page-sidebar') ){
             echo esc_html('col-lg-12 no_sidebar', 'monst');
    }
}
endif;

if(!function_exists('monst_column_for_service')):
    function monst_column_for_service(){
        if(is_active_sidebar('service-sidebar')){
            monst_get_content_columns();
        }
        elseif(!is_active_sidebar('service-sidebar') ){
            echo esc_html('col-lg-12 no_sidebar', 'monst');
        }
    }
endif;

   
if(!function_exists('monst_column_for_blog')):
    function monst_column_for_blog(){
        if(is_active_sidebar('sidebar-blog')){
            monst_get_content_columns();
        }
        elseif(!is_active_sidebar('sidebar-blog')){
            echo esc_html('no_column', 'monst');
        }
    }
endif;
    