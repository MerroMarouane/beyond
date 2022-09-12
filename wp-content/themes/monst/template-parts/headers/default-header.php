<?php
/**
 *  Default Header 
 *
 * @package Monst
 */
if(is_page_template( 'template-empty.php' )){
return false;
}
global $monst_theme_mod;
 
$header_id = '';
if(!empty($monst_theme_mod['header_style'])):
$header_id = $monst_theme_mod['header_style'];
endif;
if(get_post_meta(get_the_ID() , 'custom_header', true)):
    $header_id = get_post_meta(get_the_ID() , 'header_settings_meta', true);
endif;
$header_custom = '';
if(!empty($monst_theme_mod['header_style'])):
$header_custom = $monst_theme_mod['header_custom'];
endif;
?>
<?php function  monst_default_header(){ ?>
<header class="default_header">
    <div class="container">
        <nav class="inner_box">
<!--             <?php do_action('default_logo'); ?> -->
			<img src="http://wordpress.localhost.lc/wp-content/uploads/2022/09/log.png" class="logo-box" width="60px" />
            <div class="menu_area">
                <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar_nav',
                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
					)
				);?>
            </div>
            <div class="button_box_menu">
            <div class="navbar_togglers">
                    <button class="navbar-burger">
                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>

<?php  } ?>
<?php if($header_custom == false): 
        monst_default_header();
 else:  ?>

    <div class="header_area" id="header_contents">
    <?php  echo do_shortcode('[monst-header id="' . $header_id . '"]'); ?>
    <?php if(!empty($monst_theme_mod['header_sticky_enables']) == true): do_action('monst_sticky_header_after_header');  endif;  //echo do_shortcode('[monst-header id="' . $header_id . '"]');  ?>
</div>      


<?php endif;
?>