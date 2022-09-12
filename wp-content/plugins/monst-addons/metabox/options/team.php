
<?php

return array(
	'id'     => 'Monst_team_settings',
	'title'  => esc_html__( "Team Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'team_member_details_enable',
			'type'     => 'switch', 
			'title'    => __('Member Details Enable', 'monst-addons'),
			'default'  => true,

		), 
		array(
			'id'       => 'tm_member_designation',
			'type'     => 'text',
			'title'    =>  esc_html__('Designation', 'monst-addons') ,
			'default' =>  esc_html__('Ceo & Founder', 'monst-addons') ,
			'required' => array( 'team_member_details_enable', '=', true ),
		),
		array(
			'id'       => 'tm_member_email',
			'type'     => 'text',
			'title'    =>  esc_html__('Mail Id', 'monst-addons') ,
			'default' =>  esc_html__('theodore@example.com', 'monst-addons') ,
			'required' => array( 'team_member_details_enable', '=', true ),
		),
		array(
			'id'       => 'tm_member_phone',
			'type'     => 'text',
			'title'    =>  esc_html__('Phone Number', 'monst-addons') ,
			'default' =>  esc_html__('+44-555-66-456', 'monst-addons') ,
			'required' => array( 'team_member_details_enable', '=', true ),
		),
		array(
			'id'       => 'tm_member_address',
			'type'     => 'text',
			'title'    =>  esc_html__('Address', 'monst-addons') ,
			'default' =>  esc_html__('3333 Raleigh St, Houston, USA.', 'monst-addons') ,
			'required' => array( 'team_member_details_enable', '=', true ),
		),
		array(
			'id'       => 'tm_member_website',
			'type'     => 'text',
			'title'    =>  esc_html__('Website', 'monst-addons') ,
			'default' =>  esc_html__('www.example.com', 'monst-addons') ,
			'required' => array( 'team_member_details_enable', '=', true ),
		),
		// social media
		array(
			'id'       => 'tm_member_media_enable',
			'type'     => 'switch', 
			'title'    => __('Share Enable (Social Media)', 'monst-addons'),
			'default'  => true,
			'required' => array( 'team_member_details_enable', '=', true ),
		), 
		array(
			'id'          => 'tm_social_media_text',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text One', 'monst-addons' ),
			'placeholder' => __( 'fab fa-facebook', 'monst-addons' ),
			'default' => __( 'fab fa-facebook', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'tm_social_media_link',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link One', 'monst-addons' ),
			'placeholder' => __( '#', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
	
		array(
			'id'          => 'tm_social_media_text_two',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Two', 'monst-addons' ),
			'placeholder' => __( 'fab fa-twitter', 'monst-addons' ),
			'default' => __( 'fab fa-twitter', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'tm_social_media_link_two',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Two', 'monst-addons' ),
			'placeholder' => __( '#', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
	   
		array(
			'id'          => 'tm_social_media_text_three',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Three', 'monst-addons' ),
			'placeholder' => __( 'fab fa-skype', 'monst-addons' ),
			'default' => __( 'fab fa-skype', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'tm_social_media_link_three',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Three', 'monst-addons' ),
			'placeholder' => __( '#', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
	  
		array(
			'id'          => 'tm_social_media_text_four',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Four', 'monst-addons' ),
			'placeholder' => __( 'fab fa-youtube', 'monst-addons' ),
			'default' => __( 'fab fa-youtube', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'tm_social_media_link_four',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Four', 'monst-addons' ),
			'placeholder' => __( '#', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
	  
		array(
			'id'          => 'tm_social_media_text_five',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Text Five', 'monst-addons' ),
			'placeholder' => __( 'fab fa-instagram', 'monst-addons' ),
			'default' => __( 'fab fa-instagram', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		array(
			'id'          => 'tm_social_media_link_five',
			'type'        => 'text',
			'title'    => esc_html__( 'Social Media Icon Link Five', 'monst-addons' ),
			'placeholder' => __( '#', 'monst-addons' ),
			'required' => array( 'tm_member_media_enable', '=', true ),
		),
		 
	),
);

