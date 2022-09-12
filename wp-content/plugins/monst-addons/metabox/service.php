<?php
return array(
	'title'      => 'Monst Setting',
	'id'         => 'monst_service_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array('service'),
	'sections'   => array(
		require MONST_ADDONS_DIR . '/metabox/options/service.php',
		require MONST_ADDONS_DIR . '/metabox/options/pageheader.php',
		require MONST_ADDONS_DIR . '/metabox/options/general.php',
	),
);