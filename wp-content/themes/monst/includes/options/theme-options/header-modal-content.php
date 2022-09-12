<?php
/*
 ====================
    Modal Settings
 ====================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Modal Content Settings', 'monst' ),
            'id'     => 'header_modal_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'subsection' => true,
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id'       => 'modal_box_enable',
                    'type'     => 'switch', 
                    'title'    => __('Modal Enable', 'monst'),
                    'default'  => true,
               ),
            array(
                'id'       => 'modal_form_short_code',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Modal Form Shortcode', 'monst' ),
                'desc' => esc_html__('Enter Contact Form 7 Short Code here', 'monst') ,
                'placeholder'     => esc_html__( '[contact-form-7 id="344" title="Contact Form"]', 'monst' ),
            ),
             
            array(
                'id'       => 'company_logo_modal',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo', 'monst'),
            ),

            array(
                'id'       => 'about_company_modal',
                'type'     => 'textarea',
                'title'    => esc_html__( 'About Company', 'monst' ),
                'desc'     => esc_html__( '', 'monst' ),
                'default' => esc_html__('Denounce with righteous indignation and dislike men who are beguiled
                and demoralized by the charms pleasure moment so blinded desire that
                they cannot foresee the pain and trouble.', 'monst') ,
            ),
            array(
                'id'       => 'modal_read_more',
                'type'     => 'text',
                'title'    => esc_html__( 'Read More', 'monst' ),
                'default' => esc_html__('Read More', 'monst') ,
            ),
            array(
                'id'       => 'modal_read_more_link',
                'type'     => 'text',
                'title'    => esc_html__( ' Link (url)', 'monst' ),
                'desc'     => esc_html__( 'Enter the url here', 'monst' ),
                'default' => esc_html__('#', 'monst') ,
            ),
            array(
                'id'       => 'post_enable_modal',
                'type'     => 'switch', 
                'title'    => __('Post Enable', 'monst'),
                'default'  => true,
           ),
            
            array(
                'id'       => 'post_title_modal',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'monst' ),
                'desc'     => esc_html__( '', 'monst' ),
                'default' => esc_html__('Latest Projects', 'monst') , 
            ),
            array(
                'id'       => 'post_style_modal',
                'type'     => 'select',
                'title'    => __('Select Post To Display', 'monst'),  
                // Must provide key => value pairs for select options
                'options'  => array(
                    'service' => esc_html__( 'Service Post', 'monst' ),   
                    'project' => esc_html__( 'Project Post', 'monst' ),   
                    'post' => esc_html__( 'Post', 'monst'),   
                )
            ),
            array(
                'id'       => 'copy_right_modal',
                'type'     => 'text',
                'title'    => esc_html__( 'Copy Right', 'monst' ),
                'desc'     => esc_html__( '', 'monst' ),
                'default' => esc_html__('© 2022 monst. All Rights Reserved.', 'monst') , 
            ),
        )
 ) );