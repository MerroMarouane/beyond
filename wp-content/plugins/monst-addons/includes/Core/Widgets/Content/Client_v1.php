<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Client_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-cleint-image-v1';
    }

    public function get_title()
    {
        return __('Client V1', 'monst-addons');
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
        $this->start_controls_section('client_image',
        [ 
            'label' => __('Image Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'client_style',
            [
            'label' => __('Client Display Types', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'type_one' => __( 'Style One', 'monst-addons' ),
                'type_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('type_one' , 'monst-addons'),
            ]
        );
     

        $repeater = new \Elementor\Repeater();
      
        $repeater->add_control(
			'image',
			[
				'label' => __( 'Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
              
			]
        );
        
        $repeater->add_responsive_control(
          'image_link',
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
 

       $this->add_control(
        'image_repeater',
        [
            'label' => __('Image Repeater', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
        
                'image_link' =>  __('#', 'monst-addons'),
                ],
                [
        
                'image_link' =>  __('#', 'monst-addons'),
                ],
                [
             
                'image_link' =>  __('#', 'monst-addons'),
                ],
                [
           
                'image_link' =>  __('#', 'monst-addons'),
                ],
            ],
            'title_field' =>   __('Image', 'monst-addons'),
        ]
    );

    $this->add_responsive_control(
        'text_align',
        [
            'label' => esc_html__( 'Alignment', 'monst-addons' ),
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
                '{{WRAPPER}} .client_image a img ' => 'text-align: {{VALUE}}!important;',
            ],
        ]
    );


    $this->add_control(
        'image_width',
        [
            'label' => esc_html__( 'Image Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
          
            'default' => __('auto', 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .client_image a img ' => 'width: {{VALUE}}px!important;',
            ], 
        ]
    );
    
    $this->add_control(
        'image_margin',
        [
            'label' => esc_html__( 'Image Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .client_image a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important; overflow:hidden;',
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
    <?php if($settings['client_style'] == 'type_one'): ?>
    <div class="client_image d-flex align-items-center">
    <?php foreach($settings['image_repeater'] as  $key => $image_repeater):   
        $target = $image_repeater['image_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $image_repeater['image_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
        
        <a href="<?php echo esc_url($image_repeater['image_link']['url']); ?>" class="c_image"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
        <img class="active img-fluid" src="<?php echo esc_url($image_repeater['image']['url']); ?>" alt="img" ></a>        
        <?php endforeach; ?>
    </div>
    <?php elseif($settings['client_style'] == 'type_two'): ?>
        <div class="client_image">
                        
                        <div class="client_carousel slick-carausel">
                        <?php foreach($settings['image_repeater'] as  $key => $image_repeater):   
                                $target = $image_repeater['image_link']['is_external'] ? ' target="_blank"' : '';
                                $nofollow = $image_repeater['image_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
                                <a href="<?php echo esc_url($image_repeater['image_link']['url']); ?>" class="c_image"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                                    <img class="active img-fluid" src="<?php echo esc_url($image_repeater['image']['url']); ?>" alt="img" ></a>        
                                <?php endforeach; ?>
                        </div>   
                     </div>

                     <?php endif; ?>
    <?php
    }
}

 