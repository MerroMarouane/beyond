<?php
/**
 * *
 * Page Header.
 * @package Monst WordPress Theme
 * @version 1.0.0
 * *
* */
function monst_page_header_blog()
{
 global $monst_theme_mod;
    
  if(!monst_has_page_header())
  {
    return false;
  }
    
$title_text = get_post_meta(get_the_ID() , 'blog_page_header_title', true); 
$page_header_alignment = '';
if(!empty($monst_theme_mod['page_header_alignment'])):
  $page_header_alignment = $monst_theme_mod['page_header_alignment'];
endif;
the_post(); // queue first post
$author_id = get_the_author_meta('ID');
$curauth = get_user_by('ID', $author_id);
$user_nicename    = $curauth->user_nicename;
rewind_posts(); // rewind the loop
?>
<section class="blog_single_page_header style_one <?php echo esc_attr($page_header_alignment) ?>">
    <?php monst_get_blog_header_image(); ?>
   
  <div class="page_header_content">
    <div class="auto-container">
      <div class="row">
        <div class="col-md-12">
          <div class="banner_title_inner">
          <ul class="meta_box">
             <?php if(function_exists('monst_category')): ?>
                <li><?php monst_category(); ?></li>
              <?php endif; ?>
                <li class="date"><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></li>
          </ul>
            <h1>
              <?php if(empty($title_text)){
                the_archive_title(); 
                }
                elseif(!empty($title_text)){
                 echo  do_shortcode(wp_kses($title_text , wp_kses_allowed_html('post'))); 
              }?>
            </h1>
          </div>
        </div>
        <div class="col-lg-12">
        <?php if(function_exists('monst_breadcrumb')):  echo monst_breadcrumb(); endif; ?>
          <div class="authour_content_box d-flex">
              <div class="authour_image">
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 50 ); ?>
              </div>
              <div class="authour_content">
                <h6><?php echo esc_html__('Posted By' , 'monst'); ?></h6>
                <h4><?php the_author(); ?></h4>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<?php   
}
 add_action('monst_after_header_blog', 'monst_page_header_blog');