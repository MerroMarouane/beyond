<?php
/*
 ====================
    Footer Settings
 ====================
*/
Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Footer Settings', 'monst' ),
            'id'     => 'footer_settings_all',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
            array(
                'id'       => 'footer_custom',
                'type'     => 'switch', 
                'title'    => __('Footer Custom Enable / Disable', 'monst'),
                'default'  => false,
            ),
            array(
                'id'       => 'footer_style',
               'type'     => 'select',
               'title'    => __('Select Footer Style', 'monst'), 
               // Must provide key => value pairs for select options
               'options'  => monst_default_query('footer'),
               'required' => array( 'footer_custom', '=', true ),
           ),
        )
    ) 
);