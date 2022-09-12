<?php
namespace Monstaddons;
if (! defined('ABSPATH' )){
	die('-1');
}
class StartMonst{
      /**
      * Instance
      *
      * @var $instance
      */
      private static $instance;
      /**
      * Initiator
      *
      * @since 1.0.0
      * @return object
      */
      public static function instance() {
        if ( ! isset( self::$instance ) ) {
          self::$instance = new self();
        }

        return self::$instance;
      }


      /**
      * Instantiate the object.
      *
      * @since 1.0.0
      *
      * @return void
      */
      public function __construct() {
         add_action('wp_enqueue_scripts', array($this, 'monst_enqueue_scripts'));  
          add_action('elementor/editor/before_enqueue_scripts', array($this, 'monst_elementor_scripts'));
          add_action( 'elementor/elements/categories_registered', array($this, 'add_category' ) );

      }
 	      /**
	      * Add  category
	      *
	      * @since 1.0.0
	      *
	      * @return void
	      */
	      public function add_category( $elements_manager ) {
            $elements_manager->add_category(
              '100',
              [
                  'title'  => 'Monst Headers Content',
                  'icon' => 'font',
              ],
              1
            );
            $elements_manager->add_category(
              '101',
              [
                'title'  => 'Monst Sliders',
                'icon' => 'font',
              ],
              2
            );
            $elements_manager->add_category(
              '102',
              [
                  'title'  => 'Monst Content',
                  'icon' => 'font',
              ],
              3
            );

            $elements_manager->add_category(
              '103',
              [
                  'title'  => 'Monst Post Type',
                  'icon' => 'font',
              ],
              3
            );
          
          
          $elements_manager->add_category(
              '104',
              [
                'title'  => 'Monst Footer Content',
                'icon' => 'font',
              ],
           5
      );
	  }
    /**
    * Get All ths scriptis and styles
    *
    * @return void
    */
    public function monst_enqueue_scripts(){
      global $monst_theme_mod;
      if(!empty($monst_theme_mod['rtl_enable_all']) == 'true'):
        wp_enqueue_style('monst-bootstrap', MONST_ADDONS_URL .'/assets/css/bootstrap.rtl.min.css' , array() , '5.0.2', 'all');
      else:
        wp_enqueue_style('monst-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' , array() , '5.0.2', 'all');
      endif;

        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/font/css/all.min.css', array(), '6.0.0');
        wp_enqueue_style('animate', MONST_ADDONS_URL . '/assets/css/animate.min.css', array(), '4.1.1');
        wp_enqueue_style('icomoon', MONST_ADDONS_URL . '/assets/fonts/fonts/style.css', array(), '1.0.0');
        wp_enqueue_style('slick', MONST_ADDONS_URL . '/assets/css/slick.css', array(), '1.8.1');
        wp_enqueue_style('monst-meta-box', get_template_directory_uri().'/assets/css/metabox.css' );  
        wp_enqueue_style('monst-theme', get_template_directory_uri().'/assets/css/scss/theme-css.css' );
        wp_enqueue_style('monst-style', get_template_directory_uri().'/style.css' );    
        wp_add_inline_style('monst-style', \Monstaddons\Shortcodes\Themecss::monst_customize_css());
        wp_add_inline_style('monst-style', \Monstaddons\Shortcodes\Typography::monst_typogrophy_css());
        if(monst_isMobile()){
            wp_enqueue_style('monst-mobile-scss', get_template_directory_uri().'/assets/css/scss/mobile.css' );
        }
        if(!empty($monst_theme_mod['color_scheme_option']) == true){
          wp_enqueue_style('monst-color-switcher', get_template_directory_uri().'/assets/css/scss/elements/color-switcher/color.css');   
        }
        if(!empty($monst_theme_mod['rtl_enable_all']) == 'true'):
          wp_enqueue_style('monst-theme-scss-rtl', get_template_directory_uri().'/assets/css/scss/rtl/rtl.css' );
        endif;
        if(!empty($monst_theme_mod['dark_mode_enable']) == 'true'):
          wp_enqueue_style('monst-theme-dark', get_template_directory_uri().'/assets/css/scss/dark/dark.css' );
        endif;
        
        //
        wp_enqueue_script('monst-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') , '5.0.2', true);
        wp_enqueue_script('monst-Waypoints', MONST_ADDONS_URL . '/assets/js/vendor/waypoints.js', array('jquery') , '4.0.1', true);
        wp_enqueue_script('monst-counterup', MONST_ADDONS_URL . '/assets/js/vendor/counterup.js', array('jquery') , '1.0.0', true);
        wp_enqueue_script('monst-fancybox', MONST_ADDONS_URL . '/assets/js/vendor/jquery.fancybox.js', array('jquery') , '3.5.7', true);
        wp_enqueue_script('monst-slick', MONST_ADDONS_URL . '/assets/js/vendor/slick.js', array('jquery') , '1.8.1', true);
        wp_enqueue_script('monst-wow', MONST_ADDONS_URL . '/assets/js/vendor/wow.js', array('jquery') , '1.1.3', true);
        if(!empty($monst_theme_mod['color_scheme_option']) == true){
        wp_enqueue_script('monst-style-switcher', MONST_ADDONS_URL . '/assets/js/vendor/jQuery.style.switcher.min.js', array('jquery') , '1.0', true);
        }
        if(!empty($monst_theme_mod['bactotop_enable']) == true): 
          wp_enqueue_script('monst-scrollup', MONST_ADDONS_URL . '/assets/js/vendor/scrollup.js', array('jquery') , '2.4.1', true);
        endif;

        wp_enqueue_script('monst-mobile', get_template_directory_uri() . '/assets/js/mobile-menu.js', array('jquery') , '1.0.0', true);
        if(!empty($monst_theme_mod['color_scheme_option']) == true){
        wp_enqueue_script('monst-color', MONST_ADDONS_URL . '/assets/js/vendor/color-scheme.js', array('jquery') , '1.0.0', true);
        }
        if(!empty($monst_theme_mod['bactotop_enable']) == true): 
          wp_enqueue_script('monst-scrollup-active', MONST_ADDONS_URL . '/assets/js/vendor/scrollup-active.js', array('jquery') , '2.4.1', true);
        endif;
        wp_enqueue_script('monst-main', MONST_ADDONS_URL . '/assets/js/vendor/main.js', array('jquery') , '1.0.0', true);
    }
    /**
    * Get All ths Elementor Call back scripts
    *
    * @return void
    */
    public static function monst_elementor_scripts(){
        wp_enqueue_style('fontello', MONST_ADDONS_URL . '/assets/fonts/fontello/fontello.css', array() , '1.0.0', 'all');
     
    }
   
}