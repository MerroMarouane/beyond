<?php
return array(
	'title'      => 'Monst Setting',
	'id'         => 'monst_team_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'team'),
	'sections'   => array(
		
		require MONST_ADDONS_DIR . '/metabox/options/team.php',
		require MONST_ADDONS_DIR . '/metabox/options/pageheader.php',
		require MONST_ADDONS_DIR . '/metabox/options/general.php',
	),
);