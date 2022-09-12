<?php

/**
 * Plugin Name: Monst Addons
 * Plugin URI: http://demo2.steelthemes.com/
 * Description: Extra Addons For Monst theme. It was built for Monst theme.
 * Version: 1.0.1
 * Author:  Steelthemes
 * Author URI: http://steelthemes.com
 * License: GPL2+
 * Text Domain: monst-addons
 * Domain Path: /lang/
 */

if (! defined('ABSPATH' )){
	die('-1');
}

if (!defined('MONST_ADDONS_DIR')){
  define('MONST_ADDONS_DIR', plugin_dir_path( __FILE__ ));
}

if (!defined('MONST_ADDONS_URL')){
  define('MONST_ADDONS_URL', plugin_dir_url( __FILE__ ));
}
 

require_once __DIR__ . '/vendor/autoload.php';

/**
* Main Monst Addons Class
*
* The main class that initiates and runs the plugin.
*
* @since 1.0.0
*/
final class  Monst_elementor_extension {

  /**
   * Plugin Version
   *
   * @since 1.0.0
   *
   * @var string The plugin version.
   */
  const VERSION = '1.0.0';

  /**
   * Minimum Elementor Version
   *
   * @since 1.0.0
   *
   * @var string Minimum Elementor version required to run the plugin.
   */
  const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

  /**
   * Minimum PHP Version
   *
   * @since 1.0.0
   *
   * @var string Minimum PHP version required to run the plugin.
   */
  const MINIMUM_PHP_VERSION = '7.0';

  /**
   * Instance
   *
   * @since 1.0.0
   *
   * @access private
   * @static
   *
   * @var  Monst_elementor_extension The single instance of the class.
   */
  private static $_instance = null;

  /**
   * Instance
   *
   * Ensures only one instance of the class is loaded or can be loaded.
   *
   * @since 1.0.0
   *
   * @access public
   * @static
   *
   * @return  Monst_elementor_extension An instance of the class.
   */
  public static function instance() {

      if ( is_null( self::$_instance ) ) {
    self::$_instance = new self();
      }
      return self::$_instance;

  }

  /**
   * Constructor
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function __construct() {

      add_action( 'init', [ $this, 'i18n' ] );
      add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );
 

      $this->add_Monst_extra();
 
      
      $this->get_shortcodes();
  }


   /**
    * Get All the wanted files
    *
    * @return void
    */
    public function add_Monst_extra(){
            //require_once MONST_ADDONS_DIR . '/includes/woocom/woocom-functions.php';
        require_once MONST_ADDONS_DIR . '/includes/theme-panel/theme-panel.php';

        //require_once MONST_ADDONS_DIR . '/includes/Plugins/Widgets/Shop_banner.php';
         // require_once MONST_ADDONS_DIR  . '/includes/plugins/Header.php';
          //require_once MONST_ADDONS_DIR  . '/includes/plugins/Footer.php';
          //require_once MONST_ADDONS_DIR  . '/includes/plugins/Megamenu.php';
          //require_once MONST_ADDONS_DIR  . '/includes/plugins/Taxonomy_brands.php';
 
          //require_once MONST_ADDONS_DIR . '/includes/widgets/widgets.php';
          //require_once MONST_ADDONS_DIR . '/includes/core/Functions.php';
          require_once MONST_ADDONS_DIR . '/includes/demo-content/demo-content.php';
        if (!class_exists('Redux' )){
            require_once MONST_ADDONS_DIR . 'redux-framework/redux-framework.php';
            require_once MONST_ADDONS_DIR . '/metabox/metaboxes.php';
        }
      }
      public function on_plugins_loaded(){
        new Monstaddons\StartMonst();
        new Monstaddons\Admin();
 

       // new Monstaddons\Header();
        //new Monstaddons\Mega_menu();
        //new Monstaddons\Footer();
        //new Monstaddons\Taxamony_brands();
        //new Monstaddons\Monstaddons();
     
        if ($this->is_compatible()) {
            add_action('elementor/init', [$this, 'init']);
        }
      }
  

     /*
** ============================== 
**   get_shortcodes
** ==============================
*/ 
public function get_shortcodes() {
    /*
    ** ============================== 
    **   Monst_navmenu
    ** ==============================
    */ 
    if (!function_exists('monst_navmenu')) {
        function monst_navmenu() {
            $options = array();
            $nvmenus = wp_get_nav_menus();
                if (!empty($nvmenus)) {
                    foreach ($nvmenus as $navigationmenu) {
                        if (isset($navigationmenu)) {
                            $options[''] = 'Select';
                            if (isset($navigationmenu->slug) && isset($navigationmenu->name)) {
                                $options[$navigationmenu->slug] = $navigationmenu->name;
                            }
                        }
                    }
                }
            
            return $options;
        }
    }
    /*
    ** ============================== 
    **   Monst Render Megamenu
    ** ==============================
    */ 
    function monst_render_megamenu_content( $post_id ) {
        global $monst_theme_mod;
        $content  = '';
 
        $content = Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $post_id );
        
        return $content;
    }
    
    /*
    ** ============================== 
    **   Monst_navmenu
    ** ==============================
    */ 

    if(!function_exists('get_monst_icons')) {
    function get_monst_icons()
{ 
	// scrape list of icons from fontawesome css
	
	$pattern = '/\.((?:\w+(?:-)?)+):before\s*{\s*content/';
	$subject = file_get_contents(MONST_ADDONS_URL . '/assets/css/all.css');
	preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
	$icons = array();
	//fontawesome
	foreach($matches as $match)
	{
		$icons[] = array('value' => 'fa fas'.$match[1], 'label' => $match[1]);
	}
    
    $patterntwo = '/\.(icon-(?:\w+(?:-)?)+):before\s*{\s*content/';
        $subjectwo = file_get_contents(MONST_ADDONS_URL . '/assets/fonts/fonts/style.css');
        preg_match_all($patterntwo, $subjectwo, $matchestwo, PREG_SET_ORDER);
        
	foreach($matchestwo as $match)
	{
		$icons[] = array('value' => ' '.$match[1], 'label' => $match[1]);
	}
	
	$icons = array_column($icons, 'label', 'value');
	//print_r($icons); exit('hellow');
	return $icons;
}}


     
    /*
    ** ============================== 
    **   Monst_contact_form_7_query
    ** ==============================
    */ 
    if (!function_exists('monst_contact_form_7_query')):
        function monst_contact_form_7_query($post_type){
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
    endif;
   
    
    /*
    ** ============================== 
    ** Monst_get_product_categories
    ** ============================== 
    */
    
    if (!function_exists('monst_get_product_categories')):
    function monst_get_product_categories() {
        $options = array();
        $taxonomy = 'product_cat';
        if (!empty($taxonomy)) {
            $terms = get_terms(
                array(
                    'parent' => 0,
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                    )
                );
                if (!empty($terms)) {
                    foreach ($terms as $term) {
                        if (isset($term)) {
                            $options[''] = 'Select';
                            if (isset($term->slug) && isset($term->name)) {
                                $options[$term->slug] = $term->name;
                            }
                        }
                    }
                }
            }
        return $options;
    }
endif;
    /*
    ** ============================== 
    ** Monst_get_product_categories
    ** ============================== 
    */
    
    if (!function_exists('monst_get_blog_categories')):
    function monst_get_blog_categories() {
        $options = array();
        $taxonomy = 'category_name';
        if (!empty($taxonomy)) {
            $terms = get_terms(
                array(
                    'parent' => 0,
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                    )
                );
                if (!empty($terms)) {
                    foreach ($terms as $term) {
                        if (isset($term)) {
                            $options[''] = 'Select';
                            if (isset($term->slug) && isset($term->name)) {
                                $options[$term->slug] = $term->name;
                            }
                        }
                    }
                }
            }
        return $options;
    }
    endif;

    /*
    ** ============================== 
    ** Monst_get_service_categories
    ** ============================== 
    */
    
    if (!function_exists('monst_get_service_categories')):
        function monst_get_service_categories() {
            $options = array();
            $taxonomy = 'service_category';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
        }
        endif;

         /*
    ** ============================== 
    ** Monst_get_portfolio_categories
    ** ============================== 
    */
    
    if (!function_exists('monst_get_portfolio_categories')):
        function monst_get_portfolio_categories() {
            $options = array();
            $taxonomy = 'portfolio_category';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
        }
        endif;
             /*
    ** ============================== 
    ** Monst_get_portfolio_categories
    ** ============================== 
    */
    
    if (!function_exists('monst_get_team_categories')):
        function monst_get_team_categories() {
            $options = array();
            $taxonomy = 'team_category';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
        }
        endif;
    
    
}


  /**
   * Load Textdomain
   *
   * Load plugin localization files.
   *
   * Fired by `init` action hook.
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function i18n() {
   load_theme_textdomain( 'Monst', get_template_directory() . '/lang' );
  }

  /**
     * Compatibility Checks
     *
     * Checks if the installed version of Elementor meets the plugin's minimum requirement.
     * Checks if the installed PHP version meets the plugin's minimum requirement.
     *
     * @since 1.0.0
     *
     * @access public
     */
    public function is_compatible()
    {

         // Check if Elementor installed and activated
      if ( ! did_action( 'elementor/loaded' ) ) {
          add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
          return;
      }

      // Check for required Elementor version
      if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
          add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
          return;
      }

      // Check for required PHP version
      if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
          add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
          return;
      }

        return true;
    }

  /**
   * Initialize the plugin
   *
   * Load the plugin only after Elementor (and other plugins) are loaded.
   * Checks for basic plugin requirements, if one check fail don't continue,
   * if all check have passed load the files required to run the plugin.
   *
   * Fired by `plugins_loaded` action hook.
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function init() {

        $this->i18n();

  // Register widgets

  add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
   
  }

  /**
   * Admin notice
   *
   * Warning when the site doesn't have Elementor installed or activated.
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function admin_notice_missing_main_plugin() {

      if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

      $message = sprintf(
          /* translators: 1: Plugin name 2: Elementor */
          esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'Monst Addons' ),
          '<strong>' . esc_html__( 'Monst Addons', 'Monst Addons' ) . '</strong>',
          '<strong>' . esc_html__( 'Elementor', 'Monst Addons' ) . '</strong>'
      );

      printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

  }

  /**
   * Admin notice
   *
   * Warning when the site doesn't have a minimum required Elementor version.
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function admin_notice_minimum_elementor_version() {

      if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

      $message = sprintf(
          /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
          esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'Monst Addons' ),
          '<strong>' . esc_html__( 'Monst Addons', 'Monst Addons' ) . '</strong>',
          '<strong>' . esc_html__( 'Elementor', 'Monst Addons' ) . '</strong>',
           self::MINIMUM_ELEMENTOR_VERSION
      );

      printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

  }

  /**
   * Admin notice
   *
   * Warning when the site doesn't have a minimum required PHP version.
   *
   * @since 1.0.0
   *
   * @access public
   */
  public function admin_notice_minimum_php_version() {

      if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

      $message = sprintf(
          /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
          esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'Monst Addons' ),
          '<strong>' . esc_html__( 'Monst Addons', 'Monst Addons' ) . '</strong>',
          '<strong>' . esc_html__( 'PHP', 'Monst Addons' ) . '</strong>',
           self::MINIMUM_PHP_VERSION
      );

      printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

  }


  /**
   * Include Files
   *
   * Load required plugin core files.
   *
   * @since 1.0.0
   *
   * @access public
   */
 


public function register_widgets() {
  $widgets_manager = \Elementor\Plugin::instance()->widgets_manager;
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/header/header-v1.php';
  // Slider 
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/slider/slider-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/slider/single-banner-v1.php';
  // Content 
  // MONST_ADDONS_DIR . '/includes/core/widgets/content/title-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/list-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/icon-box-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/fun-facts-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/theme-button-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/team-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/image-grid-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/simple-image-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/contact-box-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/contact-form-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/social-media-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/content/blog-v1.php';
  // Shop
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/category-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/category-list-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/shop-banner-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/product-tab-filter-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/product-tab-filter-carousel-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/product-deals-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/product-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/shop/popup-v1.php';
  // Footer 
    //require_once MONST_ADDONS_DIR . '/includes/core/widgets/footer/widget-about-contact-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/footer/widget-navigation-v1.php';
  //require_once MONST_ADDONS_DIR . '/includes/core/widgets/footer/widget-hot-link-v1.php';
//header
$widgets_manager->register(new  Monstaddons\Core\Widgets\Header\Header_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Header\Logo_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Header\Menu_v1());
//slider
$widgets_manager->register(new  Monstaddons\Core\Widgets\Slider\Single_banner_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Slider\Single_banner_v2());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Slider\Slider_v1());
//shop
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Category_carousel_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Category_list_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Popup_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Product_deals_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Product_tab_filter_carousel_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Product_tab_filter_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Product_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Shop\Shop_banner_v1());
//Content
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Title_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Client_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Theme_btn_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Social_media_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\List_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Icon_box_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Content_box_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Card_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Price_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Newsteller_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Protfolio_card_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Blog_card_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Testimonial_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Process_v1());

//$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Image_grid_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Simple_image_box_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Image_carousel_v1());

$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Contact_box_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Contact_form_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Fun_facts_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Team_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Faqs_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Quotes_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Time_line_v1());
if(class_exists('UM')):
    $widgets_manager->register(new  Monstaddons\Core\Widgets\Content\Ultimate_member_v1());
endif;
// post type
$widgets_manager->register(new  Monstaddons\Core\Widgets\Posttyype\Blog_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Posttyype\Service_post_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Posttyype\Portfolio_post_v1());
$widgets_manager->register(new  Monstaddons\Core\Widgets\Posttyype\Team_post_v1());

//Footer
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Footer\About_contact_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Footer\Hot_line_v1());
//$widgets_manager->register(new  Monstaddons\Core\Widgets\Footer\Navigation_v1());
      

}
}



Monst_elementor_extension::instance();

