<?php
/**
 * *
 * Page Header.
 * @package Monst WordPress Theme
 * @version 1.0.0
 * *
* */

function monst_page_header()
{
  global $monst_theme_mod;

    if(!monst_has_page_header())
    {
      return false;
    }
    if(is_singular('post') || is_404())
    {
      return false;
    }

    if(is_page_template( 'template-empty.php' )){
      return false;
    }
   
    if(!is_front_page() && is_home())
    {
        $class = 'blog-title';
    }

  $title_text = get_post_meta(get_the_ID() , 'page_header_title', true); 
  $page_header_alignment = '';
  if(!empty($monst_theme_mod['page_header_alignment'])):
    $page_header_alignment = $monst_theme_mod['page_header_alignment'];
  endif;
?>
<section class="page_header_default style_one <?php echo esc_attr($page_header_alignment) ?>">
    <?php  monst_get_default_header_image(); ?>
  <div class="page_header_content">
    <div class="auto-container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner_title_inner">
            <h1>
              <?php if(empty($title_text)){
                        the_archive_title(); 
                    }
                    elseif(!empty($title_text)){
                      echo  do_shortcode(wp_kses($title_text , wp_kses_allowed_html('post'))); 
                    }?>
            </h1>
          </div>
          <?php if(function_exists('monst_breadcrumb')):  echo monst_breadcrumb(); endif; ?>
        </div>
        
      </div>
    </div>
  </div>
</section>
<?php    }
 add_action('monst_after_header_no_blog', 'monst_page_header');

 