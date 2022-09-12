<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Social_media_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-social-media-v1';
    }

    public function get_title()
    {
        return __('Social Media V1' , 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    

    protected function register_controls() {

		$this->start_controls_section(
			'media_content',
			[
				'label' => esc_html__( 'Media Content', 'monst-addons' ),
			]
        );
     
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'media_icon',
        [
            'label' => esc_html__('Media Icon', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('fab  fa-facebook' , 'monst-addons'),
        ]);
        
       
        $repeater->add_control(
            'media_link',
        [
            'label' => esc_html__('Media Link', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('#' , 'monst-addons'),
        ]);
        
      
      $this->add_control(
        'media_repeater',
        [
            'label' => __('Media Repeater', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'media_icon' =>  __('fab  fa-facebook','monst-addons'),
                ],
                [
                    'media_icon' =>  __('fab  fa-twitter','monst-addons'),
                ],
                [
                    'media_icon' =>  __('fab  fa-skype','monst-addons'),
                ],
                [
                    'media_icon' =>  __('fab  fa-instagram','monst-addons'),
                ]
                
            ],
            'title_field' => '{{{ media_icon }}}',
        ]);


        
        $this->add_responsive_control(
            'media_alignments',
            [
                'label' => __('Media Alignments', 'monst-addons'),
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
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .mobile-social-icon ' => 'text-align: {{VALUE}}!important;',
                ],
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section('css_changing',
        [ 
            'label' => __('Style', 'monst-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]);

        $this->add_control(
            'display',
            [
            'label' => __('Display Type', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'block' => __( 'Block', 'monst-addons' ),
                'inline-block' => __( 'Inline-block', 'monst-addons' ),
            ],
            'default' => __('inline-block' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li ' => 'display: {{VALUE}}!important;',
            ],
            ]
        );

        $this->add_control(
            'icon_font_size',
        [
            'label' => esc_html__('Font Size', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('18px' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li a  ' => 'font-size: {{VALUE}}!important;',
            ],
        ]);


        $this->add_control(
            'border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mobile-social-icon ul li a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'margin',
            [
                'label' => esc_html__( 'Margin', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mobile-social-icon ul li ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );

        $this->add_control(
            'width',
        [
            'label' => esc_html__('Width', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('40px' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li a ' => 'width: {{VALUE}}!important;',
            ],
        ]);
        $this->add_control(
            'height',
        [
            'label' => esc_html__('Height', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('40px' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li a ' => 'height: {{VALUE}}!important;',
            ],
        ]);
        $this->add_control(
            'line_height',
        [
            'label' => esc_html__('Line Height', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('40px' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li a  ' => 'line-height: {{VALUE}}!important;',
            ],
        ]);

        $this->add_control(
            'border_width',
        [
            'label' => esc_html__('Border Width', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('4px' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .mobile-social-icon ul li a  ' => 'border-width: {{VALUE}}!important;',
            ],
        ]);

 
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
                '{{WRAPPER}} .mobile-social-icon ul li a ' => 'border-style: {{VALUE}}!important;',
            ],
            ]
        );
        $this->add_control(
            'border_color',
            [
                'label' => __( 'Border Color  ', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile-social-icon ul li a ' => 'border-color: {{VALUE}}',
                ],
            ]
          );
  
        $this->add_control(
          'color_one',
          [
              'label' => __( 'Color', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                  '{{WRAPPER}} .mobile-social-icon ul li a ' => 'color: {{VALUE}}',
              ],
          ]
        );
  
      $this->add_control(
          'color_two',
          [
              'label' => __( 'Background Color', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                  '{{WRAPPER}} .mobile-social-icon ul li a' => 'background: {{VALUE}}',
              ],
          ]
      );
  
      
      $this->end_controls_section();
        
       
	}
    protected function render() {
		$settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
  
		?>

<div class="mobile-social-icon">
<ul>
        <?php foreach($settings['media_repeater'] as $media): ?>
          <li>  <a href="<?php echo esc_url($media['media_link']); ?>"> <span class="<?php echo esc_attr($media['media_icon']); ?>"></span>
              
            </a></li>
        <?php endforeach; ?>
        </ul>
</div>
 
	
		<?php 
	}
}

 