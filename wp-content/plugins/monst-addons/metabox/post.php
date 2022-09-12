<?php
return array(
	'title'      => 'Monst Setting',
	'id'         => 'monst_post_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array('post'),
	'sections'   => array(
		require MONST_ADDONS_DIR . '/metabox/options/post.php',
		require MONST_ADDONS_DIR . '/metabox/options/blogpageheader.php',
		require MONST_ADDONS_DIR . '/metabox/options/general.php',
	),
);