<?php
/*
 ====================
    Modal Settings
 ====================
*/

Redux::set_section( $opt_name, array(
            'title'  => esc_html__( 'Breadcrumb Settings', 'monst' ),
            'id'     => 'breadcrumb_settings',
            'desc'   => esc_html__( '', 'monst' ),
            'subsection' => true,
            'icon'   => 'el el-cog',
            'fields' => array(
                array(
                    'id' => 'project_breadcrud_section',
                    'type' => 'section',
                    'title' => __('Portfolio Section', 'monst'),
                    'indent' => true 
                ),
                array(
                    'id'       => 'portfolio_breadcrumb_name',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Portfolio Breadcrumb Text', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('Portfolio', 'monst') ,
                ),
                array(
                    'id'       => 'portfolio_breadcrumb_link',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Portfolio Breadcrumb Link', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('#', 'monst') ,
                ),

                array(
                    'id' => 'service_breadcrud_section',
                    'type' => 'section',
                    'title' => __('Service Section', 'monst'),
                    'indent' => true 
                ),
                array(
                    'id'       => 'service_breadcrumb_name',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Service Breadcrumb Text', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('Service', 'monst') ,
                ),
                array(
                    'id'       => 'service_breadcrumb_link',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Service Breadcrumb Link', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('#', 'monst') ,
                ),
                array(
                    'id' => 'team_breadcrud_section',
                    'type' => 'section',
                    'title' => __('Team Section', 'monst'),
                    'indent' => true 
                ),
                array(
                    'id'       => 'team_breadcrumb_name',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Team Breadcrumb Text', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('Team', 'monst') ,
                ),
                array(
                    'id'       => 'team_breadcrumb_link',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Team Breadcrumb Link', 'monst' ),
                    'required' => array( 'enable_related_post', '=', true ),
                    'default' => esc_html__('#', 'monst') ,
                ),
           
        )
 ) );