<?php
/*
 ====================
    Layout Settings
 ====================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Layout Settings', 'monst' ),
            'id'     => 'layout_settings_all',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id'       => 'layout_default',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Default Layouts', 'monst' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'monst' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                       
                    ),

                    'default' => 'right-sidebar',
                ),
                array(
                    'id'       => 'layout_page',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Page Layouts', 'monst' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'monst' ),
                    'options'  => array(
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                       
                    ),

                    'default' => 'right-sidebar',
                ),
                array(
                    'id'       => 'layout_service',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Service Layouts', 'monst' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'monst' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                       
                    ),

                    'default' => 'no-sidebar',
                ),    
                
                array(
                    'id'       => 'layout_shop',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Shop Layouts', 'monst' ),
                    'subtitle' => esc_html__( 'Choose your layouts Styles', 'monst' ),
                    'options'  => array(
        
                        'no-sidebar'  => array(
                            'alt' => esc_html__( 'Full Width', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                        ),
                        'right-sidebar'  => array(
                            'alt' => esc_html__( 'Right Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                        ),
                        'left-sidebar'  => array(
                            'alt' => esc_html__( 'Left Sidebar', 'monst' ),
                            'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                        ),
                       
                ),
                'default' => 'no-sidebar',
            ),  
        )
 ));

