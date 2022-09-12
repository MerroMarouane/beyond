<?php

namespace  Monstaddons\Core\Widgets\Header;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Header_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-header-v1';
    }

    public function get_title()
    {
        return __('Header V1', 'monst-addons');
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
       

        $this->start_controls_section('header_content',
        [ 
            'label' => __('Header Content', 'monst-addons'),
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

        $this->add_control(
            'header_width',
            [
              'label' => __('Header Layout Width', 'creote-addons'),
              'type' => \Elementor\Controls_Manager::SELECT,
              'options' => [
                'no-container' => __( 'No Container', 'creote-addons' ),
                'full-container' => __( 'Full With Container', 'creote-addons' ),
                'large-container' => __( 'large Container', 'creote-addons' ),
                'container' => __( 'Container', 'creote-addons' ),
                'medium-container' => __( 'medium Container', 'creote-addons' ),
                'auto-container' => __( 'auto Container', 'creote-addons' ),
            ],
              'default' => __('auto-container' , 'creote-addons'),
            ]
        );

   


        $this->add_control(
            'logo_default',
        [
            'label' => __( 'Logo Default', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => MONST_ADDONS_URL . '/assets/image/monst-logo.svg',
            ],
        ] 
       );
   

       $this->add_control(
        'logo_width',
        [
            'label' => __( 'Logo Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( '170px', 'monst-addons' ),
            'placeholder' => __( 'Enter logo width here in (px , rem and em )', 'monst-addons' ),
            'selectors' => [
                '{{WRAPPER}} .default_header  .logo_box img' => 'width: {{VALUE}}!important;',
            ],
        ]
        );
        $this->add_control(
            'margin_logo',
            [
                'label' => __( 'Margin', 'monst-monst' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .default_header  .logo_box img ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'custom_link_enable',
            [
                'label' => __('Custom Link show / hide', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'monst-addons'),
                'label_off' => __('No', 'monst-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
    
    
        $this->add_control(
            'logo_link',
            [
                'label' => __( 'Link', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'monst-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'custom_link_enable' => 'yes'
                ],
            ]
        );

        $this->add_control(
			'hr_sear',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'search_enable',
            [
                'label' => __('Search show / hide', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'monst-addons'),
                'label_off' => __('No', 'monst-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'hr_five_f',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'button_enable',
            [
                'label' => __('Button One show / hide', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'monst-addons'),
                'label_off' => __('No', 'monst-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button One Text', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Became Vendor', 'monst-addons' ),
                'placeholder' => __( 'Type your title here', 'monst-addons' ),
                'condition' => [
                    'button_enable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button One Link', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'monst-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'button_enable' => 'yes'
                ],
            ]
        );
        $this->add_control(
			'hr_five_last',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'button_enable_two',
            [
                'label' => __('Button Two show / hide', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'monst-addons'),
                'label_off' => __('No', 'monst-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'button_text_two',
            [
                'label' => __( 'Button Two Text', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Became Vendor', 'monst-addons' ),
                'placeholder' => __( 'Type your title here', 'monst-addons' ),
                'condition' => [
                    'button_enable_two' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'button_link_two',
            [
                'label' => __( 'Button Two Link', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'monst-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'button_enable_two' => 'yes'
                ],
            ]
        );
 
      
      

    $this->end_controls_section();


  


 
$this->start_controls_section('header_m_css',
[ 
    'label' => __('Header Css', 'monst-addons'),
    'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
]);
 
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__( 'Menu Typography', 'plugin-name' ),
        'name' => 'menu_typo',
        'selector' => '{{WRAPPER}} .default_header  .navbar_nav > li > a',
    ]
);
$this->add_control(
    'menu_color',
    [
        'label' => __('Menu Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav > li > a  ' => 'color: {{VALUE}}!important;',
        ],
    ]
); 

$this->add_control(
    'menu_ac_color',
    [
        'label' => __('Menu Hover/ Active Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav > li.current_page_item.active > a , {{WRAPPER}}  .default_header  .navbar_nav > li:hover > a' => 'color: {{VALUE}}!important;',
        ],
    ]
); 
  
$this->add_control(
    'menu_dot_color',
    [
        'label' => __('Menu Dot Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav > li.dropdown::after ' => 'background-color: {{VALUE}}!important;',
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
        'selector' => '{{WRAPPER}}  .default_header  .navbar_nav li .dropdown_menu > li > a ',
    ]
);
$this->add_control(
    'drop_bg_color',
    [
        'label' => __('Dropdown Background Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav li .dropdown_menu  ' => 'background: {{VALUE}}!important;',
        ],
    ]
); 
$this->add_control(
    'drop_border_color',
    [
        'label' => __('Dropdown Broder Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav li .dropdown_menu  ' => 'border-color: {{VALUE}}!important;',
        ],
    ]
); 
$this->add_control(
    'drop_menu_color',
    [
        'label' => __('Dropdown Menu Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}   .default_header  .navbar_nav li .dropdown_menu > li > a  ' => 'color: {{VALUE}}!important;',
        ],
    ]
); 

$this->add_control(
    'drop_homenu_color',
    [
        'label' => __('Dropdown Menu Hover  Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav li .dropdown_menu > li > a:hover ' => 'color: {{VALUE}}!important;',
        ],
    ]
);  
$this->add_control(
    'drop_homenu_dor_color',
    [
        'label' => __('Dropdown Menu Dot  Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .navbar_nav li .dropdown_menu > li.dropdown::after ' => 'background-color: {{VALUE}}!important;',
        ],
    ]
);  

$this->add_responsive_control(
    'menu_alignmentd',
    [
        'label' => __('Menu alignments', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
          '0 0 0 auto' => [
            'title' => __( 'Menu Left', 'monst-addons' ),
            'icon' => 'fa fa-align-left',
          ],
          'auto' => [
            'title' => __( 'Menu Center', 'monst-addons' ),
            'icon' => 'fa fa-align-center',
          ],
          '0 auto 0 0' => [
            'title' => __( 'Menu Right', 'monst-addons' ),
            'icon' => 'fa fa-align-right',
          ],
        ],
        'default' => 'auto',
        'toggle' => true,
        'selectors' => [
          '{{WRAPPER}}  .default_header  .menu_area' => 'margin: {{VALUE}}!important;',
        ],
    ]
);



$this->add_control(
    'hr_three',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__( ' Button One Typography', 'monst-addons' ),
        'name' => 'button_typo_one',
        'selector' => '{{WRAPPER}} .default_header  .theme_btn.two ',
    ]
);

$this->add_control(
    'button_one_color',
     [
        'label' => __('Button One Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.two ' => 'color: {{VALUE}}!important;',
        ],
     ]
);

$this->add_control(
    'button_one_bg_color',
     [
        'label' => __('Button One Background Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.two ' => 'background-color: {{VALUE}}!important;',

        ],
     ]
);

$this->add_control(
    'button_one_bor_color',
     [
        'label' => __('Button One Border Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.two ' => 'border-color: {{VALUE}}!important;'
        ],
     ]
);
$this->add_control(
    'button_padding_one',
    [
        'label' => esc_html__( 'Button One Padding', 'monst-addons' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.two ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
        ],
    ]
);
$this->add_control(
    'button_border_radius_one',
    [
        'label' => esc_html__( 'Button One Radius', 'monst-addons' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.two ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
        ],
    ]
);


$this->add_control(
    'hr_four',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'label' => esc_html__( ' Button Two Typography', 'monst-addons' ),
        'name' => 'button_typo_two',
        'selector' => '{{WRAPPER}}  .default_header  .theme_btn.one ',
    ]
);
$this->add_control(
    'button_two_color',
     [
        'label' => __('Button Two Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}   .default_header  .theme_btn.one ' => 'color: {{VALUE}}!important;',
        ],
     ]
);
$this->add_control(
    'button_two_bg_color',
     [
        'label' => __('Button Two Background Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.one ' => 'background-color: {{VALUE}}!important;',
        ],
     ]
);
$this->add_control(
    'button_two_bor_color',
     [
        'label' => __('Button Two Border Color', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.one ' => 'border-color: {{VALUE}}!important;'
        ],
     ]
);

$this->add_control(
    'button_padding_two',
    [
        'label' => esc_html__( 'Button Two Padding', 'monst-addons' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}}   .default_header  .theme_btn.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
        ],
    ]
);
$this->add_control(
    'button_border_radius_two',
    [
        'label' => esc_html__( 'Button Two Radius', 'monst-addons' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}}  .default_header  .theme_btn.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
        ],
    ]
);


$this->end_controls_section();


} 
    protected function render()
    {
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
    $link = '';
    if($settings['custom_link_enable'] == 'yes'):
        $link = $settings['logo_link']['url'];
        $targe_logo = $settings['logo_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow_logo = $settings['logo_link']['nofollow'] ? ' rel="nofollow"' : '';
    else:
        $link = home_url();
    endif;
    ?>


<header class="default_header in_elementor">
        <div class="<?php  echo esc_attr($settings['header_width']); ?>">
        <nav class="inner_box">
            <div class="logo_box">
                <a href="<?php echo esc_url($link); ?>"
                    <?php if($settings['custom_link_enable'] == 'yes'):  echo esc_attr($targe_logo); echo esc_attr($nofollow_logo);  endif; ?>
                    class="logo navbar_brand">
                    <img src="<?php echo esc_url($settings['logo_default']['url']); ?>"
                        alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default">
                </a>
            </div>
            <div class="menu_area">
                <?php if(!empty($settings['navigations'])):
            wp_nav_menu(array(
                'menu' => $settings['navigations'],
                'container' => false,
                'menu_class' => 'navbar_nav',
                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new \WP_Bootstrap_Navwalker()
            )); endif; ?>
            </div>
            <div class="button_box_menu">
            <div class="navbar_togglers">
                    <button class="navbar-burger">
                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="right_content">
            <?php if($settings['button_enable'] == 'yes'): ?>
             <?php  $targe_set = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow_set = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
                      <a href="<?php echo esc_url($settings['button_link']['url']); ?>" class="theme_btn two"
                           <?php echo esc_attr($targe_set); ?>
                            <?php echo esc_attr($nofollow_set); ?>><?php echo esc_attr($settings['button_text']); ?>
                            <i class="fi-rs-arrow-right"></i>
                        </a> 
                      
                <?php endif; ?>
                <?php if($settings['button_enable_two'] == 'yes'): ?>
             <?php  $targe_set_two = $settings['button_link_two']['is_external'] ? ' target="_blank"' : '';
                    $nofollow_set_two = $settings['button_link_two']['nofollow'] ? ' rel="nofollow"' : ''; ?>
                        <a href="<?php echo esc_url($settings['button_link_two']['url']); ?>" class="theme_btn one"
                           <?php echo esc_attr($targe_set_two); ?>
                            <?php echo esc_attr($nofollow_set_two); ?>><?php echo esc_attr($settings['button_text_two']); ?>
                            <i class="fi-rs-arrow-right"></i>
                        </a> 
                      
                <?php endif; ?>
            </div>
        </nav>
                </div>
</header>
 


    <?php
    }
}