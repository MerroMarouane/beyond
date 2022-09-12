<?php
/**
 * @package Monst WordPress theme
 */
global $monst_theme_mod;
$extra_class = 'blog_single_details_outer  content-Sblog';
$post_sub_title = get_post_meta(get_the_ID() , 'post_sub_title', true);
?>
<section id="post-<?php esc_attr(the_ID()); ?>" <?php esc_attr(post_class($extra_class)); ?>>
  <div class="single_content_upper">
  <?php if(get_post_meta(get_the_ID() , 'frature_img_enable' , true) == true): ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="blog_feature_image">
      <?php the_post_thumbnail(array(770,400)); ?>
    </div>
    <?php endif; ?>
  <?php endif; ?>
    <div class="post_single_content">
      <?php the_content(); ?>
      <div class="clearfix"></div>
      <?php wp_link_pages(); ?>
    </div>
  </div>
  <div class="single_content_lower">
    <?php if(function_exists('monst_tags_and_share')):
            monst_tags_and_share(); 
    else: ?>
    <?php  $get_the_categorys = get_the_category();
    $tag_outputs = get_the_tags();
    if(!empty($tag_outputs)): ?>
    <div class="tags_and_share yes_tags yes_share">
      <div class="d-flex">
        <div class="tags_content left_one d-flex">
  
            <div class="title"><?php echo esc_html__('Tags' , 'monst'); ?></div>
            <?php foreach ($tag_outputs as $tag_output):?>
            <a class="btn"
              href="<?php echo get_term_link($tag_output); ?>"><?php echo esc_html('#' , 'monst');?><?php echo esc_attr($tag_output->name); ?></a>
            <?php endforeach; ?>
        
        </div>
        <div class="tags_content right_one d-flex">
     
            <div class="title"><?php echo esc_html__('Posted in' , 'monst'); ?></div>
            <?php foreach ($get_the_categorys as $get_the_category):?>
            <a class="btn"
              href="<?php echo get_term_link($get_the_category); ?>"><?php echo esc_html('#' , 'monst');?><?php echo esc_attr($get_the_category->name); ?></a>
            <?php endforeach; ?>
      
        </div>
      </div>
      <?php endif; ?>
      <?php endif; ?>
      <?php if(!empty($monst_theme_mod['post_nav_enable']) == true):  do_action('monst_entry_nav_footer'); endif; ?>
      <?php
	  // If comments are open or we have at least one comment, load up the comment template
	  if ( comments_open() || get_comments_number() ) :
		  comments_template();
	  endif;
    ?>
    </div>
    <?php if(!empty($monst_theme_mod['enable_related_post']) == true):
    do_action('monst_get_related_post');
    endif;?>
</section>