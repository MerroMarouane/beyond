<?php

namespace  Monstaddons\Core\Widgets\Slider;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Single_banner_v2 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-single-banner-v2';
    }

    public function get_title()
    {
        return __('Single Banner V2', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['101'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('signle_banner_v2_settings',
        [ 
            'label' => __('Newsteller Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'single_banner_style',
            [
            'label' => __('Banner Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_control(
            'layout_width',
            [
            'label' => __('Layout', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'container_fluid' => __( 'Full Width', 'monst-addons' ),
                'container' => __( 'Boxed', 'monst-addons' ),
            ],
            'default' => __('container' , 'monst-addons'),
            ]
        );


        $this->add_responsive_control(
            'sub_title',
            [
               'label' => __('Sub Title', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('New Event', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );
        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Committed to People Committed <span>to the Future</span>', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        $this->add_responsive_control(
            'description',
            [
              'label' => __('Decription', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('We are <span><strong>Monst</strong></span>, a Creative', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );


        $this->add_responsive_control(
            'typewrite',
            [
              'label' => __('Type Write Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('"Web Agency", "Social Marketing"', 'monst-addons'),
              'placeholder' => __('"Web Agency", "Social Marketing"', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'form_short_code',
            [
              'label' => __('Form Short Code', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'placeholder' => __('Please Enter Your Short Code Here', 'monst-addons'),
            ]
        );

        $this->add_control(
            'hr_onecss',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_responsive_control(
            'client_enable',
            [
              'label' => __( 'Brand  Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
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
            'label' => __('Brand Image Repeater', 'monst-addons'),
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
            'condition' =>[
                'client_enable' => 'yes',
            ],
        ]
    );

    $this->add_responsive_control(
        'c_text_align',
        [
            'label' => esc_html__( 'Alignment', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                '0 auto 0 0' => [
                    'title' => esc_html__( 'Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                ],
                'auto' => [
                    'title' => esc_html__( 'Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                ],
                '0 0 0 auto' => [
                    'title' => esc_html__( 'Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'default' => 'auto',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .client_image a img ' => 'margin: {{VALUE}}!important;',
            ],
        ]
    );


    $this->add_control(
        'c_image_width',
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
        'c_image_margin',
        [
            'label' => esc_html__( 'Image Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .client_image a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important; overflow:hidden;',
            ],
        ]
    );

    $this->add_control(
        'hr_oneco',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

        
        $this->add_responsive_control(
            'image_left',
            [
              'label' => __( 'Image Left', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::MEDIA,
              'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
              ],
              
            ] 
        );
        
        $this->add_responsive_control(
            'image_right',
            [
              'label' => __( 'Image Right', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::MEDIA,
              'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
              ],
            ] 
        );

        

        
    $this->end_controls_section();
    $this->start_controls_section('form_css',
    [ 
        'label' => __('Form  Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_responsive_control(
        'over_ride_enale',
        [
          'label' => __( 'Form Override  Enable', 'monst-addons' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => __( 'Show', 'monst-addons' ),
          'label_off' => __( 'Hide', 'monst-addons' ),
          'return_value' => 'yes',
          'default' => 'no',
        ]
    );

    $this->end_controls_section();
    $this->start_controls_section('banner_csss',
    [ 
        'label' => __('Banner Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'banner_one_backgrounds',
            'label' => esc_html__( 'Banner Background', 'monst-addons' ),
            'types' => [ 'classic', 'gradient', 'video' ],
            'selector' => '{{WRAPPER}} .single_banner_v2',
        ]
    );

    $this->add_control(
        'content_padding',
        [
            'label' => esc_html__( 'Banner Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner_v2   ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
             
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box h2 ',
        ]
    );
    
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box h2 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_span_color',
         [
            'label' => __('Title Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box h2 span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'hr_twos',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box  p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box  p  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'description_span_color',
         [
            'label' => __('Description Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box p span , {{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box p span strong ' => 'color: {{VALUE}}!important;',
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
            'selector' => '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.one ',
        ]
    );

    $this->add_control(
        'button_one_color',
         [
            'label' => __('Button One Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.one ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'button_one_bg_color',
         [
            'label' => __('Button One Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.one ' => 'background-color: {{VALUE}}!important;',
 
            ],
         ]
    );
    
    $this->add_control(
        'button_one_bor_color',
         [
            'label' => __('Button One Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.one ' => 'border-color: {{VALUE}}!important;'
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
                '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
            'selector' => '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.two ',
        ]
    );
    $this->add_control(
        'button_two_color',
         [
            'label' => __('Button Two Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.default ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'button_two_bg_color',
         [
            'label' => __('Button Two Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.default ' => 'background-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'button_two_bor_color',
         [
            'label' => __('Button Two Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner_v2 .banner_box_in .content_box .button_group li a.default ' => 'border-color: {{VALUE}}!important;'
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
                '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.default ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .single_banner_v2 .banner_box_in .content_box .button_group li a.default ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
<?php if($settings['single_banner_style'] == 'style_one'): ?>
<section class="single_banner_v2 one">

<div class="<?php echo esc_attr($settings['layout_width']); ?>">
    <div class="banner_box_in">
      
            <div class="text-center">
                <div class="content_box">
                    <div class="top_content">
                    <?php if(!empty($settings['sub_title'])): ?>
                    <h6 class="wow animate__animated animate__fadeIn">
                        <?php echo wp_kses($settings['sub_title'] , $allowed_tags); ?>
                    </h6>
                    <?php endif; ?>
                    <?php if(!empty($settings['title'])): ?>
                    <h2 class="wow animate__animated animate__fadeIn">
                        <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(!empty($settings['description']) || !empty($settings['typewrite'])): ?>
                    <p class="text-blueGray-400 leading-relaxed wow animate__animated animate__fadeIn">
                        <?php echo wp_kses($settings['description'] , $allowed_tags); ?>
                        <span class="typewrite d-inline" data-period="3000"
                            data-type='[<?php echo wp_kses($settings['typewrite'] , $allowed_tags); ?>]'></span>
                    </p>
                    <?php endif; ?>
                    </div>  
                    <?php if(!empty($settings['form_short_code'])): ?>
                    <div class="form_short_code <?php if($settings['over_ride_enale'] == 'yes'): ?> override_custom_form<?php endif; ?>">
                    <?php echo do_shortcode($settings['form_short_code']); ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($settings['client_enable'] == 'yes') : ?>
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
                 
                </div>

            </div>
        
    </div>
 
    </div>
    <div class="clearfix">
    <?php if(!empty($settings['image_left']['url'])): ?>
<div class="float_image_left">
     <img class="wow animate__animated animate__fadeInUp jump"  src="<?php echo esc_url($settings['image_left']['url']); ?>" alt="" />
</div>
<?php endif; ?>
    <?php if(!empty($settings['image_right']['url'])): ?>
    <div class="float_image_right">
    <img class="wow animate__animated animate__fadeInUp jump"  src="<?php echo esc_url($settings['image_right']['url']); ?>" alt="" />
    </div>
    <?php endif; ?>    </div>
</section> 
<?php endif; ?>
<?php
    }
}

 