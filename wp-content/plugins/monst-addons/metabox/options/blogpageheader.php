
<?php

return array(
	'id'     => 'monst_blogpageheader_settings',
	'title'  => esc_html__( "Page header Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'postpg_header_enable_disableds',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Disable / Enable', 'monst-addons' ),
			'default'  => false,
			'desc' =>  esc_html__( 'Here  (Switch Off) is Enable and (Switch On) is Disable', 'monst-addons' ),
		),
		
	
		array(
			'id'       => 'blog_hide_breadcrumb',
			'type'     => 'switch',
			'title'    => esc_html__( 'Breadcrumb Enable / Disable', 'monst-addons' ),
			'default'  => true,
			'required' => array( 'postpg_header_enable_disableds', '=', false ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),
	
		array(
			'id'       => 'blog_page_header_title',
			'type'     => 'textarea',
			'title'    =>  esc_html__('Page Header Title', 'monst-addons') ,
			'desc'     => esc_html__( 'Enter the title to show in Page Header section', 'monst-addons' ),
			'required' => array( 'postpg_header_enable_disableds', '=', false ),
		),
	
        array(
			'id'       => 'blog_page_header_bgcolor_enable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Bakground Color Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'postpg_header_enable_disableds', '=', false ),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),
		array(
			'id'       => 'blog_page_header_bgcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Background Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change Background Color for Page Header', 'monst-addons' ),
			'required' => array( 'blog_page_header_bgcolor_enable', '=', true ),
			
		),

		array(
			'id'       => 'blog_page_header_bg_image_show',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Header Image Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'postpg_header_enable_disableds', '=', false),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),

		array(
			'id'       => 'blog_page_header_bgimage',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Page Header Background Image', 'monst-addons' ),
			'desc'     => esc_html__( 'Insert Background Image for Page Header', 'monst-addons' ),
			'required' => array( 'blog_page_header_bg_image_show', '=', true ),
		),


		array(
			'id'       => 'blog_page_header_custom_style',
			'type'     => 'switch',
			'title'    => esc_html__( 'Custom Style Enable / Disable', 'monst-addons' ),
			'default'  => false,
			'required' => array( 'postpg_header_enable_disableds', '=', false),
			'desc' =>  esc_html__( 'Here  (Switch Off) is Disable and (Switch On) is Enable', 'monst-addons' ),
		),

		array(
			'id'       => 'blog_page_header_padding_custom',
			'type'     => 'text',
			'title'    => __('Page Header Padding', 'monst-addons'),
			'placeholder'    => __('5rem 0px 5rem 0px', 'monst-addons'),
			'default'  => '',
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
	

        array(
			'id'       => 'blog_cat_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Category Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Page Category', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
        array(
			'id'       => 'blog_catbg_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Category Background Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Background Color for Page Header Category', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true),
		),

        array(
			'id'       => 'blog_date_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Date  Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change Color for Page Header Date', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
	
		array(
			'id'       => 'blog_pg_title_colors',
			'type'     => 'color',
			'title'    => esc_html__( 'Page Header Title Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Page Header Title', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
	
		array(
			'id'       => 'blog_breadcrumb_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true),
		),
		array(
			'id'       => 'blog_breadcrumb_active_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Active Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
		array(
			'id'       => 'blog_breadcrumb_arrow_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Breadcrumb Arrow Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for Breadcrumb Arrow', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),

        array(
			'id'       => 'blog_authour_text_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Authour Text Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for  Authour Text Color', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
        array(
			'id'       => 'blog_authour_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Authour  Color', 'monst-addons' ),
			'desc'     => esc_html__( 'Change  Color for  Authour  Color', 'monst-addons' ),
			'required' => array( 'blog_page_header_custom_style', '=', true ),
		),
 
	),
);