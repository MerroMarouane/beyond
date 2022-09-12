<?php
/*
 ====================
    Header Settings
 ====================
*/
 
Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Page Header Settings', 'monst' ),
            'id'     => 'page_header_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'icon'   => 'el el-cog',
            'subsection' => true,
            'fields' => array(
           
            array(
                'id' => 'page-header-sec-start',
                'type' => 'section',
                'title' => __('Page Header  Section', 'monst'),
                'indent' => true 
            ),    
            array(
                'id'       => 'page_header_enable',
                'type'     => 'switch', 
                'title'    => __('Page Header Enable / Disable', 'monst'),
                'default'  => true,
            ),
            array(
                'id'       => 'default_page_header_image',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Pageheader Background Image', 'monst'),
                'default'  => array(
                    'url'=> '', 
                ),
            ),
            array(
                'id'       => 'default_page_header_bg_color',
                'type'     => 'color',
                'title'    => __('Page Header Background Color', 'monst'), 
                'validate' => 'color',
            ),
            array(
                'id'       => 'page_header_padding',
                'type'     => 'text',
                'title'    => __('Page Header Padding', 'monst'),
                'placeholder'    => __('5rem 0px 5rem 0px', 'monst'),
                'default'  => ''
            ),

            array(
                'id'    => 'page_header_alignment',
                'type'  => 'select',
                'title' => esc_html__( 'Page Header Alignment', 'monst' ),
                'options'  => array(
                    'page_header_left' => esc_html__( 'Left', 'monst' ),
                    'page_header_center' => esc_html__( 'Center', 'monst' ),
                    'page_header_right' => esc_html__( 'Right', 'monst' ),
                ),
                'default'  => 'page_header_center',
            ),


            array(
                'id' => 'page_header_style',
                'type' => 'section',
                'title' => __('Page Header style', 'monst'),
                'indent' => true 
            ),    
            array(
                'id'       => 'pageheader_title_color',
                'type'     => 'color',
                'title'    => __('Page Header Title COlor', 'monst'), 
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_breadcrumb_color',
                'type'     => 'color',
                'title'    => __('Page Header Breadcrumb Color', 'monst'), 
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_breadcrumb_active_color',
                'type'     => 'color',
                'title'    => __('Page Header Breadcrumb Active Color', 'monst'), 
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_breadcrumb_arrow_color',
                'type'     => 'color',
                'title'    => __('Page Header Breadcrumb Arrow Color', 'monst'), 
                'validate' => 'color',
            ),

            array(
                'id'       => 'pageheader_cat_color',
                'type'     => 'color',
                'title'    => __('Page Header Categoty  Color', 'monst'), 
                'desc'       => esc_html__( 'This custom color css for Category in blog single', 'monst'),
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_cat_bg_color',
                'type'     => 'color',
                'title'    => __('Page Header Categoty Background Color', 'monst'), 
                'desc'       => esc_html__( 'This custom background color css for Category in blog single', 'monst'),
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_date_color',
                'type'     => 'color',
                'title'    => __('Page Header Date  Color', 'monst'), 
                'desc'       => esc_html__( 'This custom  color css for Date in blog single', 'monst'),
                'validate' => 'color',
            ),

            array(
                'id'       => 'pageheader_auton_extra_color',
                'type'     => 'color',
                'title'    => __('Page Header Authour Extra  Color', 'monst'), 
                'desc'       => esc_html__( 'This custom  color css for Authout Title in blog single', 'monst'),
                'validate' => 'color',
            ),
            array(
                'id'       => 'pageheader_auton_color',
                'type'     => 'color',
                'title'    => __('Page Header Authour   Color', 'monst'), 
                'desc'       => esc_html__( 'This custom  color css for Authout  in blog single', 'monst'),
                'validate' => 'color',
            ),


        )
));

