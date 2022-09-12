<?php
/**
 *  Mobile Header Source
 *
 * @package Monst
 */

function monst_mobile_menu(){ 
global $monst_theme_mod; ?>
<header class="mobile_header_hidden mobile_header_panel">
    <div class="navbar-backdrop"></div>
    <div class="mobile_content">
        <button class="navbar-close">
            <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blue-500" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
            <div class="mobile-menu">
                <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar_nav',
                            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
					    ) );?>
            </div>
            <?php if(!empty($monst_theme_mod['mobile_button_enable']) == true): ?>
            <div class="group_button">
          
                <a href="<?php echo esc_attr($monst_theme_mod['mobile_button_link']); ?>" class="theme_btn one">
                    <?php echo esc_attr($monst_theme_mod['mobile_button_text']); ?>
                </a>

                <a href="<?php echo esc_attr($monst_theme_mod['mobile_button_link']); ?>" class="theme_btn two">
                    <?php echo esc_attr($monst_theme_mod['mobile_button_text']); ?>
                </a>
            </div>
            <?php endif; ?>  
            <?php if(!empty($monst_theme_mod['contact_enable']) == true): ?>
            <div class="get_in_touch">
                <?php if(!empty($monst_theme_mod['contact_title'])): ?>
                    <h6><?php echo esc_attr($monst_theme_mod['contact_title']); ?></h6>
                <?php endif; ?> 
                <?php if(!empty($monst_theme_mod['social_media_text'])): ?>
                <a href="mailto:<?php echo esc_attr($monst_theme_mod['social_media_text']); ?>"> <i class="fa fa-envelope"></i><?php echo esc_attr($monst_theme_mod['social_media_text']); ?></a>
                <?php endif; ?> 
                <?php if(!empty($monst_theme_mod['mobile_mail_number'])): ?>
                <a href="tel:<?php echo esc_attr($monst_theme_mod['mobile_mail_number']); ?>"> <i class="fa fa-phone"></i><?php echo esc_attr($monst_theme_mod['mobile_mail_number']); ?></a>
                <?php endif; ?> 
            </div>
            <?php endif; ?> 
            <?php if(!empty($monst_theme_mod['mobile_social_media_enable']) == true): ?>
            <div class="mt-auto">
                    <a class="inline-block px-1" href="<?php echo esc_attr($monst_theme_mod['social_media_link']); ?>">
                        <i class="<?php echo esc_attr($monst_theme_mod['social_media_text']); ?>"></i>
                    </a>
                    <a class="inline-block px-1" href="<?php echo esc_attr($monst_theme_mod['social_media_link_two']); ?>">
                        <i class="<?php echo esc_attr($monst_theme_mod['social_media_text_two']); ?>"></i>
                    </a>
                    <a class="inline-block px-1" href="<?php echo esc_attr($monst_theme_mod['social_media_link_three']); ?>">
                        <i class="<?php echo esc_attr($monst_theme_mod['social_media_text_three']); ?>"></i>
                    </a>
                    <a class="inline-block px-1" href="<?php echo esc_attr($monst_theme_mod['social_media_link_four']); ?>">
                        <i class="<?php echo esc_attr($monst_theme_mod['social_media_text_four']); ?>"></i>
                    </a>
                    <a class="inline-block px-1" href="<?php echo esc_attr($monst_theme_mod['social_media_link_five']); ?>">
                        <i class="<?php echo esc_attr($monst_theme_mod['social_media_text_five']); ?>"></i>
                    </a>
          
            </div>
            <?php endif; ?> 
        </div>
</header>
<?php }

add_action('monst_get_mobile_menu' , 'monst_mobile_menu');