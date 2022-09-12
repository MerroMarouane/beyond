<?php

return array(
	'id'     => 'monst_pageheader_settings',
	'title'  => esc_html__( "Page Header Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'page_header_enable_disablsseds',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Disable / Enable', 'monst-addons' ),
			'default'  => false,
			'desc' =>  esc_html__( 'Here  (Switch Off) is Enable and (Switch On) is Disable', 'monst-addons' ),
		),
 
		array(
			'id'       => 'hide_breadcrumb',
			'type'     => 'switch',
			'title'    => esc_html__( 'Breadcrumb Enable / Disable', 'monst-addons' ),
			'default'  => true,
			'required' => array( 'page_header_enable_disablsseds', '=', false ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),
	
		array(
			'id'       => 'page_header_title',
			'type'     => 'textarea',
			'title'    =>  esc_html__('Page Header Title', 'monst-addons') ,
			'desc'     => esc_html__( 'Enter the title to show in Page Header section', 'monst-addons' ),
			'required' => array( 'page_header_enable_disablsseds', '=', false ),
		),
		array(
			'id'       => 'page_header_bgcolor_enable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Bakground Color Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'page_header_enable_disablsseds', '=', false),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),
		array(
			'id'       => 'page_header_bgcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Background Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change Background Color for Page Header', 'monst-addons' ),
			'required' => array( 'page_header_bgcolor_enable', '=', true ),
		),

		array(
			'id'       => 'page_header_bg_image_shows',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Image Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'page_header_enable_disablsseds', '=', false ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),

		array(
			'id'       => 'page_header_bgimages',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Page Header Background Image', 'monst-addons' ),
			'desc'     => esc_html__( 'Insert Background Image for Page Header', 'monst-addons' ),
			'required' => array( 'page_header_bg_image_shows', '=', true ),
		),
	
		array(
			'id'       => 'page_header_custom_style',
			'type'     => 'switch',
			'title'    => esc_html__( 'Custom Style Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'page_header_enable_disablsseds', '=', false),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),


		array(
			'id'       => 'page_header_padding_custom',
			'type'     => 'text',
			'title'    => __('Page Header Padding', 'monst-addons'),
			'placeholder'    => __('5rem 0px 5rem 0px', 'monst-addons'),
			'default'  => '',
			'required' => array( 'page_header_custom_style', '=', true ),
		),
	
		array(
			'id'       => 'pg_title_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Title Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Page Header Title', 'monst-addons' ),

			'required' => array( 'page_header_custom_style', '=', true ),
		),
	
		array(
			'id'       => 'breadcrumb_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'monst-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
		array(
			'id'       => 'breadcrumb_active_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Active Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'monst-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
		array(
			'id'       => 'breadcrumb_arrow_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Arrow Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb Arrow', 'monst-addons' ),
			'required' => array( 'page_header_custom_style', '=', true),
		),
 
	),
);