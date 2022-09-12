<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Theme_btn_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-themebtns-v1';
    }

    public function get_title()
    {
        return __('Theme Buttons V1' , 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    

    protected function register_controls()
    {

         

        $this->start_controls_section(
            'theme_btn_content',
            [
                'label' => __('Button Content', 'monst-addons')
            ]
        );

 
        $this->add_control(
			'button_text',
			[
				'label'       => esc_html__( 'Button Text', 'monst-addons' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Contact us' , 'monst-addons'),
		    ]
        );

        $this->add_control(
            'button_link',
        [
            'label' => __('Theme Link', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => __('https://your-link.com', 'monst-addons'),
            'show_external' => true,
            'default' => [
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
            ],
        ]
        );  

        $this->add_control(
            'wow_animation',
            [
                'label' => esc_html__( 'Transition Timing', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '0',
                'options' => [
                    '0'  => esc_html__( '0', 'monst-addons' ),
                    '.1s' => esc_html__( '.1s', 'monst-addons' ),
                    '.2s' => esc_html__( '.2s', 'monst-addons' ),
                    '.3s' => esc_html__( '.3s', 'monst-addons' ),
                    '.4s' => esc_html__( '.4s', 'monst-addons' ),
                    '.5s' => esc_html__( '.5s', 'monst-addons' ),
                    '.6s' => esc_html__( '.6s', 'monst-addons' ),
                    '.7s' => esc_html__( '.7s', 'monst-addons' ),
                    '.8s' => esc_html__( '.8s', 'monst-addons' ),
                    '.9s' => esc_html__( '.9s', 'monst-addons' ),
                    '1s' => esc_html__( '1s', 'monst-addons' ),
                    '1.1s' => esc_html__( '1.1s', 'monst-addons' ),
                    '1.2s' => esc_html__( '1.2s', 'monst-addons' ),
                    '1.3s' => esc_html__( '1.3s', 'monst-addons' ),
                    '1.4s' => esc_html__( '1.4s', 'monst-addons' ),
                    '1.5s' => esc_html__( '1.5s', 'monst-addons' ),
                    '1.6s' => esc_html__( '1.6s', 'monst-addons' ),
                    '1.7s' => esc_html__( '1.7s', 'monst-addons' ),
                    '1.8s' => esc_html__( '1.8s', 'monst-addons' ),
                    '1.9s' => esc_html__( '1.9s', 'monst-addons' ),
                    '2s' => esc_html__( '2s', 'monst-addons' ),
                ],
            ]
          );
        
     
        $this->end_controls_section();

        
        $this->start_controls_section('button_css',
        [ 
            'label' => __('Button Css', 'monst-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Button Typography', 'monst-addons' ),
				'name' => 'button_typo',
				'selector' => '{{WRAPPER}} .theme_btn_all a',
			]
		);
        $this->add_control(
            'min_width',
             [
                'label' => __('Button Min Width', 'monst-addons'),
                'default' => __('220px', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a ' => 'min-width: {{VALUE}}!important;',
                ],
             ]
        );
        $this->add_control(
            'button_color',
             [
                'label' => __('Button Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        $this->add_control(
            'button_bg',
             [
                'label' => __('Button Bg Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a ' => 'background: {{VALUE}}!important;',
                ],
             ]
        );
         
        $this->add_responsive_control(
            'btn_alignments',
            [
                'label' => __('Button alignments', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'left' => [
                    'title' => __( 'Text Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Text Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                  ],
                  'right' => [
                    'title' => __( 'Text Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                  ],
                ],
                'default' => 'text-left',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .theme_btn_all' => 'text-align: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
			'button_padding',
			[
				'label' => esc_html__( 'Button Padding', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .theme_btn_all a ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'border_radius',
			[
				'label' => esc_html__( 'Button Radius', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .theme_btn_all a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
			'border_width',
			[
				'label' => esc_html__( 'Button Radius', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .theme_btn_all a ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
            'border_style',
            [
            'label' => __('Border Style', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'solid' => __( 'Solid', 'monst-addons' ),
                'dotted' => __( 'Dotted', 'monst-addons' ),
                'dashed' => __( 'Dashed', 'monst-addons' ),
                'double' => __( 'Double', 'monst-addons' ),
                'none' => __( 'None', 'monst-addons' ),
            ],
            'default' => __('none' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .theme_btn_all a ' => 'border-style: {{VALUE}}!important;',
            ],
            ]
        );
        $this->add_control(
            'border_color',
             [
                'label' => __('Button Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a ' => 'border-color: {{VALUE}}!important;',
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
 <?php $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
$nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>

        <div class="theme_btn_all  wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
            <a href="<?php echo esc_url($settings['button_link']['url']);?>"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="theme_btn one">
              <?php echo esc_html($settings['button_text']);?>
            </a>
        </div>
       
<?php
    }
}

 