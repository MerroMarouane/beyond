<?php

/**
 * *
 * The 404 template file .
 * @package Monst WordPress Theme
 * *
* */
get_header();
global  $monst_theme_mod; 
$fournotimage = '';
if(!empty($monst_theme_mod['fournotbg_image']['url'])){
  $fournotimage =  $monst_theme_mod['fournotbg_image']['url'];
}
elseif(empty($fournotimage)) {
   $fournotimage = get_template_directory_uri() . '/assets/images/error2.png';
}
?>
<div id="primary" class="content-area col-lg-12">
  <main id="main" class="site-main" role="main">
    <section class="error-404 not-found">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12">
          <div class="error_404">
            <div class="image_box">
              <img src="<?php echo esc_url($fournotimage); ?>" class="img-fluid"
                alt="<?php echo esc_attr__('404' , 'monst'); ?>" />
            </div>
          </div>
     
          <div class="fourntcontent">
            <div class="content">
              
              <h2><span><?php esc_html_e( 'Error 404', 'monst') ?></span><?php esc_html_e( 'Something went wrong!', 'monst') ?></h2>
              <p>
                <?php esc_html_e( 'Sorry, but we are unable to open this page.', 'monst') ?>
              </p>
              <div class="simple_search text-center">
                <div class="form-group">
                  <form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
                    <input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'monst' ); ?>"
                      value="<?php echo get_search_query() ?>" name="s"
                      title="<?php echo esc_attr__( 'Search', 'monst' ); ?>" />
                    <button type="submit" class="sch_btn"> <i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="theme_btn_all">
                <a href="<?php echo esc_url(home_url()); ?>"
                  class="theme_btn one"><?php esc_html_e('Back to home', 'monst') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer();?>