<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Image_carousel_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-carousel-image-box-v1';
    }

    public function get_title()
    {
        return __('Image Carousel V1' , 'monst-addons');
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
			'image_carousel',
			[
				'label' => esc_html__( 'Image Carousel Content', 'monst-addons' ),
			]
        );

        
        $this->add_control(
            'image_carousel_styles',
            [
            'label' => __('Carousel Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );


        $image_carousel = new \Elementor\Repeater();
         
        $image_carousel->add_control(
			'image',
			[
				'label' => __( 'Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
              
			]
        );
         
        $this->add_control(
            'image_carouse_repeater',
            [
                'label' => __('Image Carousel Repeater', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $image_carousel->get_controls(),
                'default' => [
                    'image' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'title_field' =>  __('Image', 'monst-addons'),
      
            ]
          );
       

          $this->add_responsive_control(
            'image_fit_enable',
            [
              'label' => __( 'Image Fit Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
            ]
        );

        $this->add_control(
			'img_height',
			[
				'label' => __( 'Image Height', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10000,
				'step' => 1,
				'default' => '',
                'selectors' => [
					'{{WRAPPER}}   .image_carousel  img.rounded ' => 'height: {{VALUE}}px',
				],
			]
		);
        $this->add_control(
			'border_radius',
			[
				'label' => __( 'Border Radius', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],

				'selectors' => [
					'{{WRAPPER}}    .image_carousel  img.rounded ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section('image_caro_css',
        [ 
            'label' => __('Arrow Css', 'monst-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
          
        ]
        );
    
        $this->add_responsive_control(
            'arrows_enable',
            [
              'label' => __( 'Arrows Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
            ]
        );
    
        $this->add_control(
            'arrow_moving',
            [
            'label' => __('Arrow Move', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                '' => __( 'Select Type', 'monst-addons' ),
                'top_left' => __( 'Top Left', 'monst-addons' ),
                'top_right' => __( 'Top Right', 'monst-addons' ),
                'bottom_left' => __( 'Bottom  Left', 'monst-addons' ),
                'bottom_right' => __( 'Bottom Right', 'monst-addons' ),
            ],
            'default' => __('' , 'monst-addons'),
            'condition' => [
                'arrows_enable' => 'yes' , 
            ],  
            ]
        );
    
         
        $this->add_responsive_control(
            'top_left_top',
            [
               'label' => __('Move Top', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Top Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'top: {{VALUE}}!important; bottom:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'top_left' , 
                ],    
            ]
        );
        $this->add_responsive_control(
            'top_left_left',
            [
               'label' => __('Move Left', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Left Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'left: {{VALUE}}!important;right:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'top_left' , 
                ],    
            ]
        );
    
        $this->add_responsive_control(
            'top_right_top',
            [
               'label' => __('Move Top', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Top Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'top: {{VALUE}}!important; bottom:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'top_right' , 
                ],    
            ]
        );
        $this->add_responsive_control(
            'top_right_right',
            [
               'label' => __('Move Right', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Right Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'right: {{VALUE}}!important; left:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'top_right' , 
                ],    
            ]
        );
    
        $this->add_responsive_control(
            'bottom_left_bottom',
            [
               'label' => __('Move Bottom', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Bottom Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'bottom: {{VALUE}}!important; top:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'bottom_left' , 
                ],    
            ]
        );
        $this->add_responsive_control(
            'bottom_left_left',
            [
               'label' => __('Move Left', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Left Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'left: {{VALUE}}!important; right:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'bottom_left' , 
                ],    
            ]
        );
    
    
        
        $this->add_responsive_control(
            'bottom_right_bottom',
            [
               'label' => __('Move Bottom', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Bottom Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'bottom: {{VALUE}}!important; top:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'bottom_right' , 
                ],    
            ]
        );
        $this->add_responsive_control(
            'bottom_right_right',
            [
               'label' => __('Move Right', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('0', 'monst-addons'),
               'description' => __('Move Right Example (-10px , -10rem) Like This', 'monst-addons'), 
               'selectors' => [
                '{{WRAPPER}} .carausel-fade-1-arrows ' => 'right: {{VALUE}}!important; left:unset!important;',
                ],
               'condition' => [
                'arrows_enable' => 'yes' , 
                'arrow_moving' => 'bottom_right' , 
                ],    
            ]
        );
        
       
    
        $this->end_controls_section();
    

 
	}
    protected function render() {
		$settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
?>
 
<?php if($settings['image_carousel_styles'] == 'style_one'): ?>
 <div class="image_carousel one wow animate__animated animate__fadeIn <?php if($settings['image_fit_enable'] == 'yes'): ?>image_fit<?php endif; ?>" data-wow-delay=".3s">
    <?php if($settings['arrows_enable'] == 'yes'): ?>
        <div class="carausel-fade-1-arrows"></div>
    <?php endif; ?>
    <div class="carausel-fade slick-carausel">
        <?php foreach($settings['image_carouse_repeater'] as  $key => $image_carouse_repeater): ?>
            <?php if(!empty($image_carouse_repeater['image']['url'])): ?>
                <img class="rounded" src="<?php echo esc_url($image_carouse_repeater['image']['url']); ?>" alt="img" />
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php elseif($settings['image_carousel_styles'] == 'style_two'): ?>

    <div class="image_carousel two wow animate__animated animate__fadeIn <?php if($settings['image_fit_enable'] == 'yes'): ?>image_fit<?php endif; ?>" data-wow-delay=".3s">
        <img src="<?php echo esc_url(MONST_ADDONS_URL . '/assets/image/macbook.png'); ?>" alt="macbook" /> 
        <div class="carousel_absolute">
            <div class="r_elatvie">
            <div class="carausel-fade-2 slick-carausel">
                <?php foreach($settings['image_carouse_repeater'] as  $key => $image_carouse_repeater): ?>
                    <?php if(!empty($image_carouse_repeater['image']['url'])): ?>
                        <img class="rounded" src="<?php echo esc_url($image_carouse_repeater['image']['url']); ?>" alt="img" />
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>  </div>
        </div>
    </div>

 
 <?php endif; ?>

<?php 
	}
}
 