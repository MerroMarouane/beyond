<?php
/*
 ====================
    404 Settings
 ====================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( '404 Settings', 'monst' ),
            'id'     => 'fournotfour_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id'             => '404_padding',
                    'type'           => 'spacing',
          
                    'mode'           => 'padding',
                    'units'          => array('em', 'px' , 'rem'),
                    'units_extended' => 'false',
                    'title'          => __('Padding for 404', 'monst'),
                    'subtitle'       => __('Allow your users to choose the spacing or padding they want.', 'monst'),
                    'default'            => array(
                        'padding-top'     => '', 
                        'padding-right'   => '', 
                        'padding-bottom'  => '', 
                        'padding-left'    => '',
                        'units'          => 'px', 
                    )
                ),
                array(         
                    'id'       => '404_bg_color',
                    'type'     => 'background',
                    'title'    => __('404 Background', 'monst'),
                    'subtitle' => __('404 background with image, color, etc.', 'monst'),
                    
                ),
                array(
                    'id'       => 'fournotbg_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('404 Image', 'monst'),
                ),
            )
        )
    );