<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Simple_image_box_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-simple-image-box-v1';
    }

    public function get_title()
    {
        return __('Image V1' , 'monst-addons');
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
			'simple_image_type',
			[
				'label' => esc_html__( 'Image Content', 'monst-addons' ),
			]
        );

        $this->add_control(
            'image_styles',
            [
            'label' => __('Image Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_control(
			'image',
			[
				'label' => __( 'Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                
			]
        );
        $this->add_responsive_control(
            'pattern_enable',
            [
              'label' => __( 'Pattern Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
              'condition' => [
                'image_styles' => 'style_one' ,
              ],
            ]
        );
        $this->add_control(
			'pattern_image',
			[
				'label' => __( 'Pattern Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => MONST_ADDONS_URL . '/assets/image/blob-tear.svg',
				],
                'condition' => [
                    'pattern_enable' => 'yes' ,
                    'image_styles' => 'style_one' ,
                ]
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
        $this->add_responsive_control(
            'jump_enable',
            [
              'label' => __( 'Jump Animation Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
              'condition' => [
                'image_styles' => 'style_one' ,
              ],
            ]
        );
        $this->add_control(
            'image_height_or_width',
            [
            'label' => __('Image Height / Width', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'height' => __( 'Height', 'monst-addons' ),
                'width' => __( 'Width', 'monst-addons' ),
            ],
            'default' => __('height' , 'monst-addons'),
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
				'default' => 400,
                'selectors' => [
					'{{WRAPPER}} .simple_image_boxes , {{WRAPPER}} .simple_image_boxes  img.image  , {{WRAPPER}} .simple_image_boxes  .absolute_bg ' => 'height: {{VALUE}}px', 
				],
                'condition' => [
                    'image_height_or_width' => 'height' ,
                  ],
			]
		);
        $this->add_control(
			'img_width',
			[
				'label' => __( 'Image Width', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10000,
				'step' => 1,
				'default' => 400,
                'selectors' => [
					'{{WRAPPER}} .simple_image_boxes , {{WRAPPER}} .simple_image_boxes  img.image  , {{WRAPPER}} .simple_image_boxes  .absolute_bg ' => 'width: {{VALUE}}px; height:unset!important;', 
				],
                'condition' => [
                    'image_height_or_width' => 'width' ,
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
					'{{WRAPPER}} .simple_image_boxes , {{WRAPPER}} .simple_image_boxes img.image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);

        $this->add_control(
            'image_bg_color',
             [
                'label' => __('Background Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .simple_image_boxes.two .absolute_bg  ' => 'background: {{VALUE}}!important;',
                ],
                'condition' => [
                    'image_styles' => 'style_two' ,
                ],
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
                    '{{WRAPPER}} .simple_image_boxes ' => 'text-align: {{VALUE}}!important;',
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

 
	}
    protected function render() {
		$settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
?>
 

 <?php if($settings['image_styles'] == 'style_one'): ?>
<?php if(!empty($settings['image']['url'])): ?>
<div class="simple_image_boxes <?php if($settings['image_fit_enable'] == 'yes'): ?> image_fit <?php endif; ?> wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_html($settings['wow_animation']); ?>">
    <img class="<?php if($settings['jump_enable'] == 'yes'):?>jump <?php endif; ?> image img-fluid" src="<?php echo esc_url($settings['image']['url']); ?>" alt="image" />
        <?php if($settings['pattern_enable'] == 'yes'):?>   
    <?php if(!empty($settings['pattern_image']['url'])): ?>
    <img class="abso_top" src="<?php echo esc_url($settings['pattern_image']['url']); ?>" alt="pattern">
    <img class="abso_bottom " src="<?php echo esc_url($settings['pattern_image']['url']); ?>" alt="pattern">
    <?php endif; ?>  <?php endif; ?>
</div>
<?php endif; ?>
<?php elseif($settings['image_styles'] == 'style_two'): ?>
    <?php if(!empty($settings['image']['url'])): ?>
<div class="simple_image_boxes two <?php if($settings['image_fit_enable'] == 'yes'): ?> image_fit <?php endif; ?> wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_html($settings['wow_animation']); ?>">
    <img class="image img-fluid" src="<?php echo esc_url($settings['image']['url']); ?>" alt="image" />
    <div class="absolute_bg"></div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php 
	}
}
 