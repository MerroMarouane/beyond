<?php
/*
**
monst side menu
**
*/



function monst_menu_display_arear(){
    if(is_singular('mega_menu') || is_post_type_archive('mega_menu')):
        return false;
    endif;
 global $monst_theme_mod;
$side_menu_display_area = '';
if(!empty($monst_theme_mod['side_menu_display_area'])):
    $side_menu_display_area = $monst_theme_mod['side_menu_display_area'];
endif;
?>
  <?php if(!empty($monst_theme_mod['side_menu_button_texts'])): ?>
    <a href="#" id="side_menu_toggle_btn">
        <i class="icon-bar-chart-2"></i>
        <div class="text_rotate"><?php echo esc_attr($monst_theme_mod['side_menu_button_texts']); ?></div>
    </a>
    <?php endif; ?>
<div class="sidemenu_area">
  
 
    <div class="side_menu_content">
        <a href="#" id="side_menu_toggle_btn_close"><i class="fa fa-close"></i></a>
      <?php  if(!empty($monst_theme_mod['side_menu_display_area'])): ?>
        <div class="position-relative">
            <?php  echo do_shortcode('[monst-mega-menu id="' . $side_menu_display_area . '"]'); ?>
            </div>
            <?php endif; ?>
    </div>

</div>
 <?php }