<?php
/**
 *  Default Footer 
 *
 * @package Monst
 */
if(is_page_template( 'template-empty.php' )){
  return false;
  }
global $monst_theme_mod;
$footer_style = '';
if(!empty($monst_theme_mod['footer_style'])):
$footer_style = $monst_theme_mod['footer_style'];
endif;
$footer_custom = '';
if(!empty($monst_theme_mod['footer_custom'])):
$footer_custom = $monst_theme_mod['footer_custom'];
endif;
$footer_id = $footer_style;
if(get_post_meta(get_the_ID() , 'custom_footer', true)){
    $footer_id = get_post_meta(get_the_ID() , 'footer_settings_meta', true);
}
?>
<?php function  monst_default_footer(){
  global $monst_theme_mod;
?>
<footer class="footer footer_default text-center">
  <div class="auto-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright">
          <?php echo esc_html('© 2022 Steelthemes. All Right Reseved' , 'monst'); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php  } ?>
<?php if($footer_custom == false): 
        monst_default_footer();
else: ?>
<div class="footer_area" id="footer_contents">
  <?php    echo do_shortcode('[monst-footer id="' . $footer_id . '"]'); ?>
</div>
<?php endif; ?>