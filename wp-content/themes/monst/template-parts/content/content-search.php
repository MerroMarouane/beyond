<?php
/**
* Search Content
* @package Monst WordPress theme
**/
 
$blog_class = esc_html('col-xs-12' , 'monst');
$myexcerpt = wp_trim_words(get_the_excerpt());  
$mycontent = wp_trim_words(get_the_content()); 
?>
<article <?php post_class($blog_class); ?>>
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