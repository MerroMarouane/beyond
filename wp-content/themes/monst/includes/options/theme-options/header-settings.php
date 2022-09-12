<?php
/*
 ====================
    Header Settings
 ====================
*/
 
Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Header Settings', 'monst' ),
            'id'     => 'header_versions',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
          
            array(
                'id' => 'header-sec-start',
                'type' => 'section',
                'title' => __('Header  Section', 'monst'),
                'indent' => true 
            ),                
            array(
                'id'       => 'header_custom',
                'type'     => 'switch', 
                'title'    => __('Header Custom Enable / Disable', 'monst'),
                'default'  => false,
            ),
            array(
                'id'       => 'header_style',
                'type'     => 'select',
                'title'    => __('Select Header Style', 'monst'),  
                // Must provide key => value pairs for select options
                'options'  => monst_default_query('header'),
                'required' => array( 'header_custom', '=', true ),
            ),
            
            array(
                'id'       => 'header_sticky_enables',
                'type'     => 'switch', 
                'title'    => __('Enable Header Sticky And Choose Style', 'monst'),
                'default'  => false,
            ),

            array(
                'id'       => 'sticky_header_style',
                'type'     => 'select',
                'title'    => __('Select Header Style', 'monst'),  
                // Must provide key => value pairs for select options
                'options'  => monst_default_query('sticky_header'),
                'required' => array( 'header_sticky_enables', '=', true ),
            ),

           
        )
));

