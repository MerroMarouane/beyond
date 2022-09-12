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
 
 
$sticky_header_id = '';
if(!empty($monst_theme_mod['sticky_header_style'])):
$sticky_header_id = $monst_theme_mod['sticky_header_style'];
endif;
if(get_post_meta(get_the_ID() , 'sticky_custom_header', true)):
    $sticky_header_id = get_post_meta(get_the_ID() , 'sticky_header_settings_meta', true);
endif;
?>
<div class="sticky_header_area sticky-bar" id="sticky_header_area">
    <?php  echo do_shortcode('[monst-sticky-header id="' . $sticky_header_id . '"]'); ?>
</div>      