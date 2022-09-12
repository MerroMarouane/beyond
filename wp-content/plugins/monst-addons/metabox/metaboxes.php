<?php
if ( ! function_exists( "monst_add_metaboxes" ) ) {
	function monst_add_metaboxes( $metaboxes ) {
		$directories_array = array(
			'page.php',
			'portfolio.php',
			'service.php',
			'team.php',
			'post.php'
		);
		foreach ( $directories_array as $dir ) {
			$metaboxes[] = require_once( MONST_ADDONS_DIR . '/metabox/' . $dir );
		}

		return $metaboxes;
	}

	add_action( "redux/metaboxes/monst_theme_mod/boxes", "monst_add_metaboxes" );
}

