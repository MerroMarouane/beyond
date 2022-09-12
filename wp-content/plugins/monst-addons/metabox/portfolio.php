<?php
return array(
	'title'      => 'Monst Setting',
	'id'         => 'nonst_project_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'portfolio'),
	'sections'   => array(
		require  MONST_ADDONS_DIR . '/metabox/options/portfolio.php',
		require  MONST_ADDONS_DIR . '/metabox/options/pageheader.php',
		require MONST_ADDONS_DIR . '/metabox/options/general.php',
	),
);