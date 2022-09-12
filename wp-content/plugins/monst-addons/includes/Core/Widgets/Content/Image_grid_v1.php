<?php

namespace  Nestaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Image_grid_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'nest-image-grids-v1';
    }

    public function get_title()
    {
        return __('Image Grid V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-nest-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('image_grid_v1_settings',
        [ 
            'label' => __('Image Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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


    $this->add_control(
        'grid_width',
        [
            'label' => esc_html__( 'Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
          
            'default' => __('auto', 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .download-app a ' => 'max-width: {{VALUE}}%!important;',
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
    <div class="download-app">
    <?php foreach($settings['image_repeater'] as  $key => $image_repeater):   
        $target = $image_repeater['image_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $image_repeater['image_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
        
        <a href="<?php echo esc_url($image_repeater['image_link']['url']); ?>" class="hover-up mb-sm-2 mb-lg-0"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
        <img class="active img-fluid" src="<?php echo esc_url($image_repeater['image']['url']); ?>" alt="img" ></a>        
        <?php endforeach; ?>
    </div>
    <?php
    }
}

 