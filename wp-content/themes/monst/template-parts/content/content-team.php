<?php
/**
 * @package Monst WordPress theme
 * content team
 */
global $monst_theme_mod;
$allowed_tags = wp_kses_allowed_html('post');
$column = '';
if(get_post_meta(get_the_ID() , 'team_member_details_enable', true)){
  $column = 'col-lg-8 col-sm-12';
}else{
  $column = 'col-sm-12';
}
?>
<section id="post-<?php esc_attr(the_ID()); ?>" <?php esc_attr(post_class('team_single_box')); ?>>
<div class="row">
    <div class="<?php echo esc_attr($column); ?>">
      <div  class="team_single_content">
        <?php the_content(); ?>
      </div>
    </div>
<?php if(get_post_meta(get_the_ID() , 'team_member_details_enable', true)): ?>
  <div class="col-lg-4 col-sm-12">
    <?php 
        $tm_member_designation = get_post_meta(get_the_ID() , 'tm_member_designation', true);
        $tm_member_email = get_post_meta(get_the_ID() , 'tm_member_email', true);
        $tm_member_phone = get_post_meta(get_the_ID() , 'tm_member_phone', true);
        $tm_member_address = get_post_meta(get_the_ID() , 'tm_member_address', true);
        $tm_member_website = get_post_meta(get_the_ID() , 'tm_member_website', true);
        // social media
        $tm_social_media_text = get_post_meta(get_the_ID() , 'tm_social_media_text', true);
        $tm_social_media_link = get_post_meta(get_the_ID() , 'tm_social_media_link', true);
        $tm_social_media_text_two = get_post_meta(get_the_ID() , 'tm_social_media_text_two', true);
        $tm_social_media_link_two = get_post_meta(get_the_ID() , 'tm_social_media_link_two', true);
        $tm_social_media_text_three = get_post_meta(get_the_ID() , 'tm_social_media_text_three', true);
        $tm_social_media_link_three = get_post_meta(get_the_ID() , 'tm_social_media_link_three', true);
        $tm_social_media_text_four = get_post_meta(get_the_ID() , 'tm_social_media_text_four', true);
        $tm_social_media_link_four = get_post_meta(get_the_ID() , 'tm_social_media_link_four', true);
        $tm_social_media_text_five = get_post_meta(get_the_ID() , 'tm_social_media_text_five', true);
        $tm_social_media_link_five = get_post_meta(get_the_ID() , 'tm_social_media_link_five', true);
 

        //tm_member_media_enable
    ?>
  
  <div class="about_team_member_box">
  <?php if(has_post_thumbnail()): ?>
    <div class="team_member_img">
      <?php the_post_thumbnail(array(770,400)); ?>
    </div>
  <?php endif; ?>
    <div class="member_details">
    <?php if(get_post_meta(get_the_ID() , 'tm_member_media_enable', true)): ?>

      <div class="share_team">
        <a class="share"><i class="fa fa-share-alt"></i></a>
        <ul>
        <?php if(!empty($tm_social_media_text)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link); ?>"><i class="<?php echo esc_attr($tm_social_media_text); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_two)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_two); ?>"><i class="<?php echo esc_attr($tm_social_media_text_two); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_three)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_three); ?>"><i class="<?php echo esc_attr($tm_social_media_text_three); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_four)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_four); ?>"><i class="<?php echo esc_attr($tm_social_media_text_four); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_five)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_five); ?>"><i class="<?php echo esc_attr($tm_social_media_text_five); ?>"></i></a></li>
          <?php endif; ?>
        </ul>
    </div>

      <?php endif; ?>
        <div class="upper">
            <?php the_title( '<h2 class="title"><a href="' .  esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>' ); ?>
            <?php if(!empty($tm_member_designation)): ?>
                <h6><?php echo wp_kses($tm_member_designation , $allowed_tags); ?></h6>
            <?php endif; ?>
        </div>
        <div class="lower">
            <?php if(!empty($tm_member_email)): ?>
                <p><span><?php echo esc_html__('Email:' , 'monst'); ?></span><a href="mailto:<?php echo esc_attr($tm_member_email); ?>"><?php echo wp_kses($tm_member_email , $allowed_tags); ?></a></p>
            <?php endif; ?>
            <?php if(!empty($tm_member_phone)): ?>
                <p><span><?php echo esc_html__('Phone:' , 'monst'); ?></span><a href="tel:<?php echo esc_attr($tm_member_phone); ?>"><?php echo wp_kses($tm_member_phone , $allowed_tags); ?></a></p>
            <?php endif; ?>
            <?php if(!empty($tm_member_address)): ?>
                <p><span><?php echo esc_html__('Address:' , 'monst'); ?></span><a><?php echo wp_kses($tm_member_address , $allowed_tags); ?></a></p>
            <?php endif; ?>
            <?php if(!empty($tm_member_website)): ?>
                <p><span><?php echo esc_html__('Website:' , 'monst'); ?></span><a href="<?php echo esc_attr($tm_member_website); ?>"><?php echo wp_kses($tm_member_website , $allowed_tags); ?></a></p>
            <?php endif; ?>
        </div>

    </div>
  </div>
   
  </div>
  
<?php endif; ?>
</div>

 

   
</section>