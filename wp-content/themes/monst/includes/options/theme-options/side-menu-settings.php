<?php
/*
 *=================================
 * Header Extra Settings
 * @package monst WordPress Theme
 *==================================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Side Menu Settings', 'monst' ),
            'id'     => 'side_menu_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'subsection' => true,
            'icon'   => 'el el-cog',
            'fields' => array(
            array(
                'id'       => 'side_menu_enable',
                'type'     => 'switch', 
                'title'    => __('Side Menu  Enable', 'monst'),
                'default'  => false,
            ),
            array(
                'id'       => 'side_menu_button_texts',
                'type'     => 'text',
                'title'    => esc_html__( 'Side Menu Tooltip Text', 'monst' ),
                'placeholder' => esc_html__('Demos', 'monst') ,
                'default' => esc_html__('Demos', 'monst') ,
                'required' => array( 'side_menu_enable', '=', true ),
            ),   
            array(
                'id'       => 'side_menu_button_widths',
                'type'     => 'text',
                'title'    => esc_html__( 'Side Menu Tooltip Width', 'monst' ),
                'placeholder' => esc_html__('90px', 'monst') ,
                'default' => esc_html__('90px', 'monst') ,
                'required' => array( 'side_menu_enable', '=', true ),
            ), 
            array(
                'id'       => 'side_menu_display_area',
                'type'     => 'select',
                'title'    => __('Select Mega Menu Style For display in Side Menu', 'monst'),  
                // Must provide key => value pairs for select options
                'options'  => monst_default_query('mega_menu'),
                'required' => array( 'side_menu_enable', '=', true ),
            ),
          
          
    )
));


 