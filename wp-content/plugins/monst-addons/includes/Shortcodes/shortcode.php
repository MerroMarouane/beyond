<?php
/**
 *  Shortcodes
 * @package Creote Addons
**/

/*--------------------------corona_preloader-----------------*/
 

/*------share-options-----*/
function monst_share_options_one(){
    global $monst_theme_mod;
?>
<div class="share_socail">
<div class="title"><?php echo esc_html__('Share' , 'creote');?></div>
<button class="m_icon" data-toggle="tooltip" data-placement="right" title="facebook"
 data-sharer="facebook" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">
 <i class="fa fa-facebook"></i>
</button>
<button class="m_icon" data-toggle="tooltip" data-placement="right" title="twitter"
 data-sharer="twitter" data-title="<?php the_title(); ?>" 
 data-url="<?php the_permalink(); ?>">
 <i class="fa fa-twitter"></i>
</button>
<button class="m_icon" data-toggle="tooltip" data-placement="right" title="whatsapp"
 data-sharer="whatsapp" data-title="<?php the_title(); ?>"
 data-url="<?php the_permalink(); ?>">
 <i class="fa fa-whatsapp"></i>
</button>

<button class="m_icon" data-toggle="tooltip" data-placement="right" title="telegram"
 data-sharer="telegram" data-title="<?php the_title(); ?>"
 data-url="<?php the_permalink(); ?>" data-to="+44555-03564">
 <i class="fa fa-telegram"></i>
</button>

<button class="m_icon" data-toggle="tooltip" data-placement="right" title="skype"
 data-sharer="skype" data-url="<?php the_permalink(); ?>"
 data-title="<?php the_title(); ?>">
 <i class="fa fa-skype"></i>
</button>
</div>
<?php

}

/*---------Search--------*/
function monst_simple_search() {
    ?>

<form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
	<input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'creote' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr__( 'Search', 'creote' ); ?>" />
	<button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
</form>

<?php 
}
 
/*---------Search-popup-------*/

function monst_search_popup() { ?>
    <div id="search-popup" class="search-popup">
  <div class="close-search"><i class="fa fa-times"></i></div>
  <div class="popup-inner">
      <div class="overlay-layer"></div>
      <div class="search-form">
           <fieldset>
           <form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
      <input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'creote' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr__( 'Search', 'creote' ); ?>" />
      <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
  </form>
           </fieldset>
      </div>
  </div>
  </div>
   <?php }
  
  
  /*---------coontact-popup-------*/
  
  function monst_contact_popup() { ?>
  <div id="contact-popup" class="contact-popup">
    <div class="close-contact-popup">
        <i class="fa fa-times"></i>
    </div>
    <div class="contact-popup-inner">
        <div class="overlay-layer"></div>
        
    </div>
  </div>
     <?php }
  /*---------get-icon-------*/
  
  if (!function_exists('monst_get_theme_side_icon_two')) {
  
      function monst_get_theme_side_icon_two()
      { 
          $get_icon_data = get_transient('monst_get_theme_side_icon_two');
  
          if (empty($get_icon_data)) {
          global $wp_filesystem;
          require_once(ABSPATH . '/wp-admin/includes/file.php');
          WP_Filesystem();
          $file = get_template_directory() . '/assets/css/font-awesome.min.css';
       
          $theme_pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s*{\s*content/';
     
          $theme_subject = $wp_filesystem->get_contents( $file );
          preg_match_all($theme_pattern, $theme_subject, $theme_matches, PREG_SET_ORDER);
          $theme_icons = array();
          //fontawesome
          foreach($theme_matches as $theme_matche)
          {
              $theme_icons[] = array('value' => 'fa '.$theme_matche[1], 'label' => 'fa '.$theme_matche[1]);
          }
          
          $filetwos = get_template_directory() . '/assets/css/icomoon.css';
          $theme_patterntwo = '/\.(icon-(?:\w+(?:-)?)+):before\s*{\s*content/';
              $theme_subjectwo = $wp_filesystem->get_contents( $filetwos );
              preg_match_all($theme_patterntwo, $theme_subjectwo, $theme_matchestwo, PREG_SET_ORDER);
              
          foreach($theme_matchestwo as $theme_match)
          {
              $theme_icons[] = array('value' => 'icon '.$theme_match[1], 'label' => 'icon '.$theme_match[1]);
          }
          
          $theme_icons = array_column($theme_icons, 'label', 'value');
          //print_r($icons); exit('hellow');
          return $theme_icons;
      }
  }
  }
  
  /*---------megamenu--------*/
  function monst_render_content( $post_id ) {
      global $monst_theme_mod;
      $content  = '';
      if (isset($monst_theme_mod['select_mega_menu']) == 'elementor_mega_menu'):
          $content = Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $post_id );
      elseif(isset($monst_theme_mod['select_mega_menu']) == 'wp_bakery_mega_menu'):
          $content = do_shortcode(get_the_content( null, false, $post_id ));
      else:{
          $content = esc_attr__('choose any option from creote settings--> general settings --> mega menu section  based on your page builder' , 'creote');
      }
      endif;
    
      return $content;
  }
  if (!function_exists('monst_footer_query')) {
      function monst_footer_query($post_type)
      {
  
          $post_list = get_posts(array(
              'post_type' => $post_type,
              'showposts' => -1,
          ));
          $posts = array();
  
          if (!empty($post_list) && !is_wp_error($post_list)) {
              foreach ($post_list as $post) {
                  $options[$post->ID] = $post->post_title;
              }
              return $options;
          }
  
      }
  }
  /*---------monst_header_query--------*/
  if (!function_exists('monst_header_query')) {
      function monst_header_query($post_type){
   
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


 /*---------get-tags-and-share-------*/

function monst_tags_and_share(){ 
    global $monst_theme_mod;
    $tags = get_the_tags();
    $get_the_categorys = get_the_category();
?>
<div class="tags_and_share <?php if((!empty($tags)) && (!empty($monst_theme_mod['tag_disables']) == true)):?> yes_tags <?php endif; ?> <?php  if(!empty($monst_theme_mod['share_disable']) == true):?> yes_share <?php endif; ?>">
  <div class="d-flex">
    <?php if(!empty($monst_theme_mod['tag_disables']) == true):?>
    <?php if(!empty($tags)): ?>
        <div class="tags_content left_one d-flex">

        <div class="title"><?php echo esc_html('Tags' , 'creote'); ?></div>
        <?php foreach ($tags as $tag):?>
        <a class="btn"
          href="<?php echo get_term_link($tag); ?>"><?php echo esc_html('#' , 'creote');?><?php echo esc_attr($tag->name); ?></a>
        <?php endforeach; ?>
 
    </div>
    <?php endif;?>
    <?php endif;?>
    <?php  if(!empty($monst_theme_mod['share_disable']) == true): ?>
        <div class="tags_content left_one  d-flex">

            <div class="title"><?php echo esc_html('Posted in' , 'creote'); ?></div>
            <?php foreach ($get_the_categorys as $get_the_category):?>
            <a class="btn"
              href="<?php echo get_term_link($get_the_category); ?>"><?php echo esc_html('#' , 'creote');?><?php echo esc_attr($get_the_category->name); ?></a>
            <?php endforeach; ?>
         
        </div>
   <?php //<div class="share_content right_one">
     // <?php monst_share_options_one(); 
    //</div> ?>
  <?php endif;?>
  </div>
</div>
<?php 
}