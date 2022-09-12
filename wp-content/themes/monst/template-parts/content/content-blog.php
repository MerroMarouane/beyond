<?php
/**
  * Blog Content
  * @package Monst WordPress theme
**/
global $monst_theme_mod;

$column_count = '';
$blog_column = 'col-xs-12';
if(!empty($monst_theme_mod['blog_layout_column'])){
  $column_count = $monst_theme_mod['blog_layout_column'];
}
if(!is_singular()) {
  if($column_count == 'one_column') {
    $blog_column = 'col-lg-12';
  }
  elseif($column_count == 'two_column'){
    $blog_column = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
  } 
  elseif($column_count == 'three_column'){
    $blog_column = 'col-lg-4 col-md-6 col-sm-6 col-xs-12';
  }
  elseif($column_count == 'four_column'){
    $blog_column = 'col-lg-3 col-md-6 col-sm-6 col-xs-12';
  } 
} 
$blog_class = esc_html('col-xs-12' , 'monst');
 
/* grab the url for the full size featured image */
$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
$myexcerpt = wp_trim_words(get_the_excerpt());  
$mycontent = wp_trim_words(get_the_content()); 

$val = get_post_meta(get_the_ID() , 'opt-text' , true);
?>
 

<article <?php post_class($blog_class); ?>>
<?php echo esc_attr($val); ?>
  <div class="card_blog default_style clearfix <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>" id="post-<?php esc_attr(the_ID()); ?>">
    <?php if(has_post_thumbnail()): ?>
      <a href="<?php echo esc_url(get_permalink()); ?>">
        <figure class="image">
          <?php the_post_thumbnail(); ?>
        </figure>
      </a>
    <?php endif; ?>
    <div class="content_box">
      <ul class="meta_box">
        <?php if(function_exists('monst_category')): ?>
          <li><?php monst_category(); ?></li>
        <?php endif; ?>
          <li><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></li>
      </ul>
      <?php the_title( '<h2 class="title"><a href="' .  esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>' ); ?>
      <?php if(!empty($myexcerpt)):?>
        <p><?php echo esc_html($myexcerpt); ?></p>
      <?php elseif(!empty($mycontent)):?>
        <p><?php  echo esc_html($mycontent); ?></p>
      <?php endif; ?>
    </div>
  </div>
</article>

  