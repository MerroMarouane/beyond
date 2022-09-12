<?php
/*
 ====================
    Post Settings
 ====================
*/
Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'All Post General Settings', 'monst' ),
        'id'     => 'post_general_settings',
        'desc'   => esc_html__( '', 'monst' ),
        'icon'   => 'el el-cog',
        'subsection' => true,
        'fields' => array(
        array(
            'id' => 'service_post_secton',
            'type' => 'section',
            'title' => __('Service Section', 'monst'),
            'indent' => true 
        ),
        array(
            'id'       => 'service_breadcrumb_name',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Breadcrumb Name', 'monst' ),
            'default' => esc_html__('Service', 'monst') ,
        ),  
        array(
            'id'       => 'service_breadcrumb_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Breadcrumb Link', 'monst' ),
            'default' => esc_html__('#', 'monst') ,
        ),  
        array(
            'id' => 'project_post_secton',
            'type' => 'section',
            'title' => __('Project Section', 'monst'),
            'indent' => true 
        ),
        array(
            'id'       => 'project_breadcrumb_name',
            'type'     => 'text',
            'title'    => esc_html__( 'Project Breadcrumb Name', 'monst' ),
            'default' => esc_html__('Service', 'monst') ,
        ),  
        array(
            'id'       => 'project_breadcrumb_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Project Breadcrumb Link', 'monst' ),
            'default' => esc_html__('#', 'monst') ,
        ),   
     )
));