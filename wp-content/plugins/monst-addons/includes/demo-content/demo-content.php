<?php

/*------
monst Content
-------*/

function monst_vc_addons_importers() {

return array(
 

  array(
    'import_file_name'           => 'Monst  Demo Content Defult',
    'import_file_url'            => 'https://themepanthers.com/wp/monst/demo-content/demo-content.xml',
    'import_widget_file_url'     => 'https://themepanthers.com/wp/monst/demo-content/widgets.wie',
    'import_redux'               => array(
      array(
      'file_url'    => 'https://themepanthers.com/wp/monst/demo-content/redux-options.json',
      'option_name' => 'monst_theme_mod',
      ),
    ),
    'import_preview_image_url'   => 'https://themepanthers.com/wp/monst/demo-content/screenshot.jpg',
    'import_notice'              => __( 'Please keep patients while importing sample data.', 'monst' ),
    'preview_url'                => 'https://themepanthers.com/wp/monst/v1/',
  ),

  array(
    'import_file_name'           => 'Monst Demo Content Dark Version',
    'import_file_url'            => 'https://themepanthers.com/wp/monst/demo-content-dark/demo-dark-xml.xml',
    'import_widget_file_url'     => 'https://themepanthers.com/wp/monst/demo-content-dark/demo-dark-widgets.wie',
    'import_redux'               => array(
      array(
      'file_url'    => 'https://themepanthers.com/wp/monst/demo-content-dark/demo-dark-option.json',
      'option_name' => 'monst_theme_mod',
      ),
    ),
    'import_preview_image_url'   => 'https://themepanthers.com/wp/monst/demo-content-dark/screenshot.jpg',
    'import_notice'              => __( 'Please keep patients while importing sample data.', 'monst' ),
    'preview_url'                => 'https://themepanthers.com/wp/monst/v1-dark/',
  ),
 

);


}

add_filter( 'pt-ocdi/import_files', 'monst_vc_addons_importers' );


function monst_after_imports() {
    $top_menu = get_term_by('primary', 'primary', 'wp_nav_menu');
        
    set_theme_mod( 'nav_menu_locations' , array( 
        'primary' => $top_menu->term_id, 
       ) 
  );

    //Set Front page
    $page = get_page_by_title( 'Landing Page 1');
    $blogpage = get_page_by_title( 'Blog');
    if ( isset( $page->ID ) ) {
     update_option( 'page_on_front', $page->ID );
     update_option( 'show_on_front', 'page' );
     update_option( 'page_for_posts', $blogpage->ID );
    }


}
add_action( 'pt-ocdi/after_import', 'monst_after_imports' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

