<?php
/*
 ====================
    Blog Settings
 ====================
*/
Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Blog Settings', 'monst' ),
            'id'     => 'blog_settings_all',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
  
               array(
                'id'       => 'category_enable',
                'type'     => 'switch', 
                'default'  => false,
                'title'    => __('Category Enable / Disable', 'monst'),
                'desc'       => esc_html__( 'This is used to enable and disable Category in blog single', 'monst'),
            ),
            array(
                'id'       => 'share_disable',
                'type'     => 'switch', 
                'default'  => false,
                'title'    => __('Category Enable / Disable ', 'monst'),
                'desc'       => esc_html__( 'This is used to enable and disable Share in blog single', 'monst'),
            ),
            array(
                'id'       => 'tag_disables',
                'type'     => 'switch', 
                'default'  => true,
                'title'    => __('Tag Enable / Disable', 'monst'),
                'desc'       => esc_html__('This is used to enable and disable Tags in blog single', 'monst'),
            ),

            array(
                'id'       => 'post_nav_enable',
                'type'     => 'switch', 
                'default'  => false,
                'title'    => __('Post Navigation Enable / Disable ', 'monst'),
                'desc'       => esc_html__( 'This is used to enable and disable Share in blog single', 'monst'),
            ),
        
           
            )
        )
    );