
<?php

return array(
	'id'     => 'Monst_service_settings',
	'title'  => esc_html__( "Service Settings", "Monst" ),
	'fields' => array(
        array(
			'id'      => 'service_icon_or_image',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Service Source Type', 'monst-addons' ),
			'options' => array(
				'icon'    => esc_html__( 'Icon', 'monst-addons' ),
				'image'    => esc_html__( 'Image', 'monst-addons' ),
			),
			'default' => '',
		),
		array(
			'id'    => 'service_icon',
			'type'  => 'select',
			'title' => esc_html__( 'Choose Icon For Service', 'monst-addons' ),
			'options' => get_monst_icons(),
			'required' => array( 'service_icon_or_image', '=', 'icon' ),
		),
		 
        array(
			'id'       => 'service_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Service Icon Image', 'monst-addons' ),
			'required' => array( 'service_icon_or_image', '=', 'image' ),
		),
		 
	),
);

