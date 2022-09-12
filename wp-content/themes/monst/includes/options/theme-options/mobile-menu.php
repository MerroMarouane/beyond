<?php
/*
 *=================================
 * Header Extra Settings
 * @package monst WordPress Theme
 *==================================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Mobile Header Settings', 'monst' ),
            'id'     => 'mobile_header_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'subsection' => true,
            'icon'   => 'el el-cog',
            'fields' => array(
            array(
                'id'       => 'contact_enable',
                'type'     => 'switch', 
                'title'    => __('Contact  Enable', 'monst'),
                'default'  => false,
            ),
            array(
                'id'       => 'contact_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Contact Title', 'monst' ),
                'required' => array( 'contact_enable', '=', true ),
                'default' => esc_html__('Get In Touch', 'monst') ,
            ),
          
            array(
                'id'       => 'mobile_phone_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone Number', 'monst' ),
                'required' => array( 'mobile_phone_enable', '=', true ),
                'default' => esc_html__('9806071234', 'monst') ,
                'required' => array( 'contact_enable', '=', true ),
            ),

          
            array(
                'id'       => 'mobile_mail_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Mail Id', 'monst' ),
                'required' => array( 'mobile_email_enable', '=', true ),
                'default' => esc_html__('sendmail@example.com', 'monst') ,
                'required' => array( 'contact_enable', '=', true ),
            ),

            array(
                'id'       => 'mobile_logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo', 'monst'),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/assets/images/monst-logo.svg', 
                ),
            ),
            array(
                'id'       => 'mobile_logo_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo LInk', 'monst' ),
                'placeholder' => esc_html__('https://example.com', 'monst') ,
            ),      

            array(
                'id'       => 'mobile_logo_width',
                'type'     => 'dimensions',
                'units'    => array('em','px','%'),
                'title'    => esc_html__('Logo Width', 'monst'),
                'height' => false,
                'subtitle' => esc_html__('Allow your users to choose width', 'monst'),
                'desc'     => esc_html__('Enable or disable any piece of this field. Width, or Units.', 'monst'),
                'default'  => array(
                    'Width'   => '120', 
                    'Height'  => false
                ),
                'output' => array(
                    '.mobile_header .mobile_logo img'
                ),
            ),
            
            array(
                'id'       => 'mobile_button_enable',
                'type'     => 'switch', 
                'title'    => __('Button Enable', 'monst'),
                'default'  => false,
            ),
            array(
                'id'       => 'mobile_button_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text One', 'monst' ),
                'required' => array( 'mobile_button_enable', '=', true ),
                'default' => esc_html__('Sign Up', 'monst') ,
            ),
            array(
                'id'       => 'mobile_button_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Link One', 'monst' ),
                'placeholder' => esc_html__('https://example.com', 'monst') ,
                'required' => array( 'mobile_button_enable', '=', true ),
            ),   
            array(
                'id'       => 'mobile_button_text_two',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text Two', 'monst' ),
                'required' => array( 'mobile_button_enable', '=', true ),
                'default' => esc_html__('Log In', 'monst') ,
            ),
            array(
                'id'       => 'mobile_button_link_two',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Link Two', 'monst' ),
                'placeholder' => esc_html__('https://example.com', 'monst') ,
                'required' => array( 'mobile_button_enable', '=', true ),
            ),    
            array(
                'id'       => 'mobile_social_media_enable',
                'type'     => 'switch', 
                'title'    => __('Share Enable (Social Media)', 'monst'),
                'default'  => false,
            ), 
            array(
                'id'          => 'social_media_text',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Text One', 'monst' ),
                'placeholder' => __( 'fab fa-facebook', 'monst' ),
                'default' => __( 'fab fa-facebook', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
            array(
                'id'          => 'social_media_link',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Link One', 'monst' ),
                'placeholder' => __( '#', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
        
            array(
                'id'          => 'social_media_text_two',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Text Two', 'monst' ),
                'placeholder' => __( 'fab fa-twitter', 'monst' ),
                'default' => __( 'fab fa-twitter', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
            array(
                'id'          => 'social_media_link_two',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Link Two', 'monst' ),
                'placeholder' => __( '#', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
           
            array(
                'id'          => 'social_media_text_three',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Text Three', 'monst' ),
                'placeholder' => __( 'fab fa-skype', 'monst' ),
                'default' => __( 'fab fa-skype', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
            array(
                'id'          => 'social_media_link_three',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Link Three', 'monst' ),
                'placeholder' => __( '#', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
          
            array(
                'id'          => 'social_media_text_four',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Text Four', 'monst' ),
                'placeholder' => __( 'fab fa-youtube', 'monst' ),
                'default' => __( 'fab fa-youtube', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
            array(
                'id'          => 'social_media_link_four',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Link Four', 'monst' ),
                'placeholder' => __( '#', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
          
            array(
                'id'          => 'social_media_text_five',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Text Five', 'monst' ),
                'placeholder' => __( 'fab fa-instagram', 'monst' ),
                'default' => __( 'fab fa-instagram', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
            array(
                'id'          => 'social_media_link_five',
                'type'        => 'text',
                'title'    => esc_html__( 'Social Media Icon Link Five', 'monst' ),
                'placeholder' => __( '#', 'monst' ),
                'required' => array( 'mobile_social_media_enable', '=', true ),
            ),
           
                    
               
    )
));


 