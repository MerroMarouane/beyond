<?php
/**
 * @package Monst WordPress theme
 * content Portfolio
 */
global $monst_theme_mod;
$allowed_tags = wp_kses_allowed_html('post');


?>
<section id="post-<?php esc_attr(the_ID()); ?>" <?php esc_attr(post_class('portfolio_single_box')); ?>>


	  <?php if(has_post_thumbnail()): ?>
    	<div class="project_detail_image">
      		<?php the_post_thumbnail(array(770,400)); ?>
			  <?php if(get_post_meta(get_the_ID() , 'port_details_enable', true)): ?>
    <?php 
        $port_client = get_post_meta(get_the_ID() , 'port_client', true);
        $port_work_type = get_post_meta(get_the_ID() , 'port_work_type', true);
        $port_Date = get_post_meta(get_the_ID() , 'port_Date', true);
        $port_website = get_post_meta(get_the_ID() , 'port_website', true);
 
        // social media
        $port_social_media_text = get_post_meta(get_the_ID() , 'port_social_media_text', true);
        $port_social_media_link = get_post_meta(get_the_ID() , 'port_social_media_link', true);
        $port_social_media_text_two = get_post_meta(get_the_ID() , 'port_social_media_text_two', true);
        $port_social_media_link_two = get_post_meta(get_the_ID() , 'port_social_media_link_two', true);
        $port_social_media_text_three = get_post_meta(get_the_ID() , 'port_social_media_text_three', true);
        $port_social_media_link_three = get_post_meta(get_the_ID() , 'port_social_media_link_three', true);
        $port_social_media_text_four = get_post_meta(get_the_ID() , 'port_social_media_text_four', true);
        $port_social_media_link_four = get_post_meta(get_the_ID() , 'port_social_media_link_four', true);
        $port_social_media_text_five = get_post_meta(get_the_ID() , 'port_social_media_text_five', true);
        $port_social_media_link_five = get_post_meta(get_the_ID() , 'port_social_media_link_five', true);
    ?>
    <div class="project_details">
   
        <div class="lower">
            <?php if(!empty($port_client)): ?>
                <p><span><?php echo esc_html__('Client:' , 'monst'); ?></span> <?php echo wp_kses($port_client , $allowed_tags); ?> </p>
            <?php endif; ?>
            <?php if(!empty($port_work_type)): ?>
                <p><span><?php echo esc_html__('Details:' , 'monst'); ?></span><?php echo wp_kses($port_work_type , $allowed_tags); ?></p>
            <?php endif; ?>
            <?php if(!empty($port_Date)): ?>
                <p><span><?php echo esc_html__('Date:' , 'monst'); ?></span> <?php echo wp_kses($port_Date , $allowed_tags); ?> </p>
            <?php endif; ?>
            <?php if(!empty($port_website)): ?>
                <p><span><?php echo esc_html__('Website:' , 'monst'); ?></span><a href="<?php echo esc_attr($port_website); ?>"><?php echo wp_kses($port_website , $allowed_tags); ?></a></p>
            <?php endif; ?>
        </div>
		<?php if(get_post_meta(get_the_ID() , 'port_member_media_enable', true)): ?>
      <div class="share_team">
     
        <ul>
        <?php if(!empty($port_social_media_text)): ?>
          <li><a href="<?php echo esc_attr($port_social_media_link); ?>"><i class="<?php echo esc_attr($port_social_media_text); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($port_social_media_text_two)): ?>
          <li><a href="<?php echo esc_attr($port_social_media_link_two); ?>"><i class="<?php echo esc_attr($port_social_media_text_two); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($port_social_media_text_three)): ?>
          <li><a href="<?php echo esc_attr($port_social_media_link_three); ?>"><i class="<?php echo esc_attr($port_social_media_text_three); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($port_social_media_text_four)): ?>
          <li><a href="<?php echo esc_attr($port_social_media_link_four); ?>"><i class="<?php echo esc_attr($port_social_media_text_four); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($port_social_media_text_five)): ?>
          <li><a href="<?php echo esc_attr($port_social_media_link_five); ?>"><i class="<?php echo esc_attr($port_social_media_text_five); ?>"></i></a></li>
          <?php endif; ?>
        </ul>
    </div>
    <?php endif; ?>
    </div>
<?php endif; ?>
    	</div>
 	 <?php endif; ?>    
        <div  class="port_single_content">
        <?php the_content(); ?>
      </div>
   
</section>

 

 

