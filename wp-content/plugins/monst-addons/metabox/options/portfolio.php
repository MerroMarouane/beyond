
<?php

return array(
	'id'     => 'Monst_portfolio_settings',
	'title'  => esc_html__( "Portfolio Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'port_details_enable',
			'type'     => 'switch', 
			'title'    => __('Portfolio Details Enable', 'monst'),
			'default'  => true,
		), 
		array(
			'id'       => 'port_client',
			'type'     => 'text',
			'title'    =>  esc_html__('Client', 'monst') ,
			'default' =>  esc_html__('Magix box Pvt Ltd', 'monst') ,
			'required' => array( 'port_details_enable', '=', true ),
		),
		array(
			'id'       => 'port_work_type',
			'type'     => 'text',
			'title'    =>  esc_html__('Type', 'monst') ,
			'default' =>  esc_html__('Marketing', 'monst') ,
			'required' => array( 'port_details_enable', '=', true ),
		),
		array(
			'id'       => 'port_Date',
			'type'     => 'text',
			'title'    =>  esc_html__('Date', 'monst') ,
			'default' =>  esc_html__('February 28, 2022', 'monst') ,
			'required' => array( 'port_details_enable', '=', true ),
		),
		array(
			'id'       => 'port_website',
			'type'     => 'text',
			'title'    =>  esc_html__('Website', 'monst') ,
			'default' =>  esc_html__('www.example.com', 'monst') ,
			'required' => array( 'port_details_enable', '=', true ),
		),
 
		 
		// social media
		array(
			'id'       => 'port_member_media_enable',
			'type'     => 'switch', 
			'title'    => __('Share Enable (Social Media)', 'monst'),
			'default'  => true,
			'required' => array( 'port_details_enable', '=', true ),
		), 
		array(
			'id'          => 'port_social_media_text',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text One', 'monst' ),
			'placeholder' => __( 'fab fa-facebook', 'monst' ),
			'default' => __( 'fab fa-facebook', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'port_social_media_link',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link One', 'monst' ),
			'placeholder' => __( '#', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
	
		array(
			'id'          => 'port_social_media_text_two',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Two', 'monst' ),
			'placeholder' => __( 'fab fa-twitter', 'monst' ),
			'default' => __( 'fab fa-twitter', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'port_social_media_link_two',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Two', 'monst' ),
			'placeholder' => __( '#', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
	   
		array(
			'id'          => 'port_social_media_text_three',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Three', 'monst' ),
			'placeholder' => __( 'fab fa-skype', 'monst' ),
			'default' => __( 'fab fa-skype', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'port_social_media_link_three',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Three', 'monst' ),
			'placeholder' => __( '#', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
	  
		array(
			'id'          => 'port_social_media_text_four',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Four', 'monst' ),
			'placeholder' => __( 'fab fa-youtube', 'monst' ),
			'default' => __( 'fab fa-youtube', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'port_social_media_link_four',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Four', 'monst' ),
			'placeholder' => __( '#', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
	  
		array(
			'id'          => 'port_social_media_text_five',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Five', 'monst' ),
			'placeholder' => __( 'fab fa-instagram', 'monst' ),
			'default' => __( 'fab fa-instagram', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'port_social_media_link_five',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Five', 'monst' ),
			'placeholder' => __( '#', 'monst' ),
			'required' => array( 'port_member_media_enable', '=', true ),
		),
		 
	),
);

