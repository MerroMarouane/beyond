
<?php

return array(
	'id'     => 'Monst_header_settings',
	'title'  => esc_html__( "General Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'custom_header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Style', 'monst-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'header_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Header Style', 'monst-addons' ),
			'options' => monst_default_query('header'),
			'required' => array( 'custom_header', '=', true ),
		),
		
		array(
			'id'       => 'sticky_custom_header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Sticky Header Style', 'monst-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'sticky_header_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Sticky Header Style', 'monst-addons' ),
			'options' => monst_default_query('sticky_header'),
			'required' => array( 'sticky_custom_header', '=', true ),
		),
		array(
			'id'       => 'custom_footer',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Style', 'monst-addons' ),
			'default'  => false,
		),
		array(
			'id'    => 'footer_settings_meta',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Footer Style', 'monst-addons' ),
			'options' => monst_default_query('footer'),
			'required' => array( 'custom_footer', '=', true ),
		),

		array(
			'id'       => 'custom_layout',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Custom Layout', 'monst-addons' ),
			'default'  => false,
		),
		array(
			'title' => esc_html__('Choose Layout', 'monst-addons') ,
			'id' => 'layout',
			'type' => 'image_select',
			'options' => array(
				'no-sidebar' => get_template_directory_uri() . '/assets/images/full-width.png',
				'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
				'left-sidebar' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
			) ,
			'required' => array( 'custom_layout', '=', true ),
		) ,
		 
	),
);