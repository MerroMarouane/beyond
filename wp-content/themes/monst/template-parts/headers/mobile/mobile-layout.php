<?php
/**
* Default Mobile Header 
*
* @package Monst
*/
function monst_mobile_header() {
    global $monst_theme_mod;
    $blog_titles = get_bloginfo('name');
    $logo_sticky = '';
    if(!empty($monst_theme_mod['mobile_logo']['url'])):
       $logo_sticky =  $monst_theme_mod['mobile_logo']['url'];
    else:
    $logo_sticky =  get_template_directory_uri() . '/assets/images/monst-logo.svg';
    endif;
?>
<div class="logo_box">
    <a href="<?php if(!empty($monst_theme_mod['mobile_logo_link'])): echo esc_html($monst_theme_mod['mobile_logo_link']); else: echo esc_url(home_url()); endif; ?>"
        class="logo">
        <img src="<?php echo esc_url($logo_sticky); ?>" alt="<?php echo esc_attr($blog_titles); ?>"
            class="logo_default_sticky">
    </a>
</div>
<?php } 
add_action('sticky_mobile_logo' , 'monst_mobile_header'); 
 global $monst_theme_mod;
?>
<header class="mobile_header sticky-bar">
<?php if(!empty($monst_theme_mod['contact_enable']) == true): ?>
    <div class="top_bar_moblie">
        <div class="container">

            <div class="mail_id">
                <a href="mailto:<?php echo esc_attr($monst_theme_mod['mobile_mail_number']); ?>">
                    <i class="fa fa-envelope"></i>
                    <?php echo esc_attr($monst_theme_mod['mobile_mail_number']); ?>
                </a>
            </div>
 
            <div class="phone_no">
                <a href="tel:<?php echo esc_attr($monst_theme_mod['mobile_phone_number']); ?>">
                <i class="fa fa-phone"></i>
                    <?php echo esc_attr($monst_theme_mod['mobile_phone_number']); ?>
                </a>
            </div>
          
        </div>
    </div>
    <?php endif; ?>
    <div class="bottom_content clearfix">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="mobile_logo">
                    <?php do_action('sticky_mobile_logo'); ?>
                </div>
                
                <div class="navbar_togglers">
                    <button class="navbar-burger">
                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>