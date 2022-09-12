<?php
/*
 ====================
    Color Settings
 ====================
*/
Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Theme Color Settings', 'monst' ),
            'id'     => 'color_scheme',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id'       => 'theme_setttings_enable',
                    'type'     => 'switch', 
                    'title'    => __('Theme Color Settings Enable', 'monst'),
                    'default'  => false,
                ),
                array(
                    'id' => 'theme_color_section',
                    'type' => 'section',
                    'title' => __('Theme Primary Colors', 'monst'),
                    'indent' => true ,
                    'required' => array( 'theme_setttings_enable', '=', true ),
                ),

                array(
                    'id'       => 'body_bg_color',
                    'type'     => 'color',
                    'title'    => __('Whole Site Background Color', 'monst'), 
                    'validate' => 'color',
                    'required' => array( 'theme_setttings_enable', '=', true ),
                ),
           
            array(
                'id'       => 'theme_color_one',
                'type'     => 'color',
                'title'    => __('Theme Color (1)', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'theme_color_two',
                'type'     => 'color',
                'title'    => __('Theme Color (2)', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
           

            array(
                'id' => 'theme_bgcolor_section',
                'type' => 'section',
                'title' => __('Theme Background Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
       
        array(
            'id'       => 'theme_bgcolor_one',
            'type'     => 'color',
            'title'    => __('Theme Background Color (1)', 'monst'), 
            'validate' => 'color',
            'required' => array( 'theme_setttings_enable', '=', true ),
        ),
        array(
            'id'       => 'theme_bgcolor_two',
            'type'     => 'color',
            'title'    => __('Theme Background Color (2)', 'monst'), 
            'validate' => 'color',
            'required' => array( 'theme_setttings_enable', '=', true ),
        ),
        array(
            'id'       => 'theme_bgcolor_three',
            'type'     => 'color',
            'title'    => __('Theme Background Color (3) ', 'monst'), 
            'validate' => 'color',
            'required' => array( 'theme_setttings_enable', '=', true ),
        ),
       

            array(
                'id' => 'theme_heding_clor_section',
                'type' => 'section',
                'title' => __('Theme Heading Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'heading_color',
                'type'     => 'color',
                'title'    => __('Heading Color', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
               
            ),
            array(
                'id' => 'theme_descr_clor_section',
                'type' => 'section',
                'title' => __('Text Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'description_color',
                'type'     => 'color',
                'title'    => __('Text  Color', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'description_light',
                'type'     => 'color',
                'title'    => __('Text Color (Light)', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),

            array(
                'id' => 'theme_border_color_sect',
                'type' => 'section',
                'title' => __('Border Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),

            array(
                'id'       => 'border_color',
                'type'     => 'color',
                'title'    => __('Border Color', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),

            array(
                'id'       => 'border_color_two',
                'type'     => 'color',
                'title'    => __('Border Color (2)', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),

            array(
                'id'       => 'border_color_three',
                'type'     => 'color',
                'title'    => __('Border Color (3)', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
 
            array(
                'id' => 'theme_mobile_color_sect',
                'type' => 'section',
                'title' => __('Mobile Menu Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),

            array(
                'id'       => 'menu_color',
                'type'     => 'color',
                'title'    => __('Mobile Menu Color', 'monst'), 
                'validate' => 'color',
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
           
            array(
                'id'       => 'menu_active_color',
               'type'     => 'color',
               'title'    => __('Mobile Menu Active Color', 'monst'), 
               'validate' => 'color',
               'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id' => 'theme_sticky_color_sect',
                'type' => 'section',
                'title' => __('Sticky Header Menu Colors', 'monst'),
                'indent' => true ,
                'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'sticky_menu_color',
               'type'     => 'color',
               'title'    => __('Header Sticky Menu  Color', 'monst'), 
               'validate' => 'color',
               'required' => array( 'theme_setttings_enable', '=', true ),
            ),
            array(
                'id'       => 'sticky_menu_active_color',
               'type'     => 'color',
               'title'    => __('Header Sticky Menu Active Color', 'monst'), 
               'validate' => 'color',
               'required' => array( 'theme_setttings_enable', '=', true ),
            ),
        )
    )   
);

