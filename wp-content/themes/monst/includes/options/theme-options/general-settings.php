<?php
/*
 ====================
    General Settings
 ====================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'General Settings', 'monst' ),
            'id'     => 'general_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-wrench',
            'fields' => array(
                array(
                    'id' => 'backtopreloader-sec-start',
                    'type' => 'section',
                    'title' => __('Preloader / Backtotop Section', 'monst'),
                    'indent' => true 
                ),
                //preloader
                array(
                    'id'       => 'preloader_show',
                    'type'     => 'switch', 
                    'title'    => __('Preloader Hide  / show', 'monst'),
                    'subtitle' => __('Preloader', 'monst'),
                    'default'  => true,
                ),  
                
                 array(
                    'id'       => 'preloader_image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('Preloader Image', 'monst'),
                    'required' => [ 'preloader_styles', '=', 'preloader_style_one' ],
                ),
                array(
                    'id'       => 'perloader_text',
                    'type'     => 'text', 
                    'default'  =>  __('Monst', 'monst'),
                    'title'    => __('Preloader Text', 'monst'),
                ),
                array(         
                    'id'       => 'pre_loader_background',
                    'type'     => 'color',
                    'title'    => __('Preloader Background', 'monst'),
                    'subtitle' => __('Preloader background color, etc.', 'monst'),
                    'validate' => 'color',
                    'required' => [ 'preloader_styles', '=', 'preloader_style_one' ],
                ),

                //preloader
                array(
                    'id'       => 'bactotop_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Back to top Enable /Disable', 'monst'),
                ),
                array(
                    'id' => 'animation-sec-start',
                    'type' => 'section',
                    'title' => __('Animation Section', 'monst'),
                    'indent' => true 
                ),
                array(
                    'id'       => 'aos_animation_stop',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Fade Anmation Effects On /Off', 'monst'),
                ),

                  array(
                    'id' => 'rtl-sec-start',
                    'type' => 'section',
                    'title' => __('Rtl Section', 'monst'),
                    'indent' => true 
                  ),

                  array(
                    'id'       => 'rtl_enable_all',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('RTL Enable', 'monst'),
                ),

                array(
                    'id' => 'sidebar-sticky-start',
                    'type' => 'section',
                    'title' => __('Sidebar Section', 'monst'),
                    'indent' => true 
                  ),

                  array(
                    'id'       => 'sidebar_sticky_enables',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Sidebar Sticky Enable / Disable', 'monst'),
                ),
                array(
                    'id' => 'color_scheme_option-start',
                    'type' => 'section',
                    'title' => __('Color Switcher Section', 'monst'),
                    'indent' => true 
                  ),

                  array(
                    'id'       => 'color_scheme_option',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Color Switcher  Enable / Disable', 'monst'),
                ),
              
                array(
                    'id' => 'dark_mode_section-start',
                    'type' => 'section',
                    'title' => __('Dark Mode Section', 'monst'),
                    'indent' => true 
                  ),

                  array(
                    'id'       => 'dark_mode_enable',
                    'type'     => 'switch', 
                    'default'  => false,
                    'title'    => __('Dark Mode  Enable / Disable', 'monst'),
                ),
              
                
            ),
        ));