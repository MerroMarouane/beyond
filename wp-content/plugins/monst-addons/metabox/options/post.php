
<?php

return array(
	'id'     => 'Monst_post_settings',
	'title'  => esc_html__( "Post Settings", "Monst" ),
	'fields' => array(
		array(
			'id'       => 'frature_img_enable',
			'type'     => 'switch', 
			'title' => esc_html__('Featured Image Enable / Disable', 'monst-addons') ,
			'default'  => true,
		), 
 
	),
);

