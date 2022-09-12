<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Protfolio_card_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-portfolio-card-v1';
    }

    public function get_title()
    {
        return __('Protfolio Card V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('protfolio_v1_settings',
        [ 
            'label' => __('Protfolio Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
      
        $this->add_control(
			'image',
			[
				'label' => __( 'Protfolio Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
              
			]
        );

        $this->add_responsive_control(
            'title',
            [
               'label' => __('Protfolio Title', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Your Partner for e-commerce grocery solution', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );
        $this->add_responsive_control(
              'descriptions',
              [
                'label' => __('Protfolio Description', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum, dolor sit amet consectetur', 'monst-addons'),
                'placeholder' => __('Type your text here', 'monst-addons'),
              ]
          );
          $this->add_responsive_control(
            'button_text',
            [
              'label' => __('Button Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('View details', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
          'link',
          [
              'label' => __('Link', 'monst-addons'),
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
 
      $this->add_responsive_control(
        'content_active',
        [
          'label' => __( 'Content Active Enable', 'monst-addons' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => __( 'Show', 'monst-addons' ),
          'label_off' => __( 'Hide', 'monst-addons' ),
          'return_value' => 'yes',
          'default' => 'yes',
 
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

    $this->start_controls_section('protfoliocss',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );


    $this->add_responsive_control(
        'text_align',
        [
            'label' => esc_html__( 'Content Alignment', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in ' => 'text-align: {{VALUE}}!important;',
            ],
        ]
    );

    
         
    $this->add_control(
        'image_height',
        [
            'label' => esc_html__( 'Image Height', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'default' => __('20', 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .image , {{WRAPPER}} .protfolio_grid .protfolio .image img' => 'height: {{VALUE}}rem!important;',
            ], 
        ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in h2 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in h2 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_hover_color',
         [
            'label' => __('Title Hover Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in h2 a:hover ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in p' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Button Typography', 'monst-addons' ),
            'name' => 'button_typo',
            'selector' => '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in a.theme_btn ',
        ]
    );

    $this->add_control(
        'button_color',
        [
            'label' => esc_html__( 'Button Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in a.theme_btn ' => 'color: {{VALUE}}!important;',
            ],
           
        ]
    );
    $this->add_control(
        'button_bg_color',
        [
            'label' => esc_html__( 'Button bg Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in a.theme_btn ' => 'background: {{VALUE}}!important;border-color: {{VALUE}}!important;',
            ],
           
        ]
    );
    $this->add_control(
        'button_hover_color',
        [
            'label' => esc_html__( 'Button Hover Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in a.theme_btn:hover ' => 'color: {{VALUE}}!important;',
            ],
           
        ]
    );
   
    $this->add_control(
        'button_hover_bg_color',
        [
            'label' => esc_html__( 'Button Hover bg Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in a.theme_btn:hover ' => 'background: {{VALUE}}!important; border-color: {{VALUE}}!important;',
            ],
           
        ]
    );

    $this->add_control(
        'box_bg_color',
        [
            'label' => esc_html__( 'Box bg Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .protfolio_grid .protfolio .content_box .content_box_in ' => 'background: {{VALUE}}!important;',
            ],
           
        ]
    );
    
    $this->end_controls_section();


    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
        $target = $settings['link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
    <div class="protfolio_grid wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
        <div class="d-flex">
       
            <div class="protfolio one <?php if($settings['content_active'] == 'yes'): ?> active_boxed<?php endif; ?>">
            <?php if(!empty($settings['image']['url'])): ?>
                <div class="image">
            <img class="active img-fluid" src="<?php echo esc_url($settings['image']['url']); ?>" alt="img" >  
                </div>     
                  <?php endif; ?>
                <div class="content_box">
                <div class="content_box_in">
                    <?php if(!empty($settings['title'])): ?>
                        <h2> <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
               
                    <?php echo wp_kses($settings['title'] , $allowed_tags); ?></h2>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($settings['descriptions'])): ?>
                    <p><?php echo wp_kses($settings['descriptions'] , $allowed_tags); ?></p>
                    <?php endif; ?>
                    <?php if(!empty($settings['button_text'])): ?>
                    <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="theme_btn one"><?php echo wp_kses($settings['button_text'] , $allowed_tags); ?></a>
                    <?php endif; ?>
                </div>       </div>
            </div>
           
         </div>
    </div>
    <?php
    }
}

 