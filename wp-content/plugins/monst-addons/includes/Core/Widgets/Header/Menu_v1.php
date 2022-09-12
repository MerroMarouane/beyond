<?php

namespace  Monstaddons\Core\Widgets\Header;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Menu_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-menu-v1';
    }

    public function get_title()
    {
        return __('Menu V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['100'];
    }

    protected function register_controls(){
       

        $this->start_controls_section('menu_content',
        [ 
            'label' => __('Menu Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );  
         
        $this->add_control(
            'navigations',
            [
                'label' => __('Select Navigation', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => monst_navmenu(),
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Menu Typography', 'plugin-name' ),
				'name' => 'menu_typo',
				'selector' => '{{WRAPPER}} .navbar_nav > li > a',
			]
		);
        $this->add_control(
            'menu_color',
            [
                'label' => __('Menu Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li > a  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        
        $this->add_control(
            'menu_ac_color',
            [
                'label' => __('Menu Hover/ Active Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li.current_page_item.active > a , {{WRAPPER}} .navbar_nav > li:hover > a' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
          
        $this->add_control(
            'menu_dot_color',
            [
                'label' => __('Menu Dot Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li.dropdown::after ' => 'background-color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
			'hr_one',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Menu Typography', 'plugin-name' ),
				'name' => 'drop_menu_typo',
				'selector' => '{{WRAPPER}} .navbar_nav li .dropdown_menu > li > a ',
			]
		);
        $this->add_control(
            'drop_bg_color',
            [
                'label' => __('Dropdown Background Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .dropdown_menu  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'drop_border_color',
            [
                'label' => __('Dropdown Broder Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .dropdown_menu  ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'drop_menu_color',
            [
                'label' => __('Dropdown Menu Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .dropdown_menu > li > a  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        
        $this->add_control(
            'drop_homenu_color',
            [
                'label' => __('Dropdown Menu Hover  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .dropdown_menu > li > a:hover ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'drop_homenu_dor_color',
            [
                'label' => __('Dropdown Menu Dot  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .dropdown_menu > li.dropdown::after ' => 'background-color: {{VALUE}}!important;',
                ],
            ]
        );  

        $this->add_responsive_control(
            'menu_alignments',
            [
                'label' => __('Menu alignments', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'left' => [
                    'title' => __( 'Menu Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Menu Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                  ],
                  'right' => [
                    'title' => __( 'Menu Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                  ],
                ],
                'default' => 'text-left',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .menu_area' => 'text-align: {{VALUE}}!important;',
                ],
            ]
        );
 
$this->end_controls_section();
} 
protected function render()
{
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
 
   
?>
<div class="menu_area">
    <?php if(!empty($settings['navigations'])):
        wp_nav_menu(array(
            'menu' => $settings['navigations'],
            'container' => false,
            'menu_class' => 'navbar_nav',
            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new \WP_Bootstrap_Navwalker()
        )); 
    endif; ?>
</div>
<?php
    }
}