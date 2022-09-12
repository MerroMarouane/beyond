<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Process_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-process-box-v1';
    }

    public function get_title()
    {
        return __('Process  V1', 'monst-addons');
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
        $this->start_controls_section('process_v1_settings',
        [ 
            'label' => __('Process Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'process_style',
            [
            'label' => __('Process Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
                
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'd_flex',
            [
              'label' => __( 'Dispaly Flex Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'yes',
              'condition' => [
                'process_style' => 'style_two'
            ],
            ]
        );

        $this->add_responsive_control(
            'align_items_center',
            [
              'label' => __( 'Align items Center Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
              'condition' => [
                'process_style' => 'style_two'
            ],
            ]
        );

        $this->add_responsive_control(
            'steps_no',
            [
               'label' => __('Steps No', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('01', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );

        $this->add_responsive_control(
            'image',
            [
            'label' => __( 'Image', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ], 
            'condition' => [
                'process_style' => 'style_one'
            ],
            ] 
        );
       
        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Project Initialization', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        
        $this->add_responsive_control(
            'description',
            [
              'label' => __('Decription', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.', 'monst-addons'),
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

    $this->start_controls_section('icon_box_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Steps Numner Typography', 'monst-addons' ),
            'name' => 'steps_typo',
            'selector' => '{{WRAPPER}} .process_box .steps_no ',
        ]
    );

    $this->add_control(
        'steps_color',
         [
            'label' => __('Step Number Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .process_box .steps_no ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'steps_background_color',
         [
            'label' => __('Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .process_box .steps_no ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'step_radius',
        [
            'label' => esc_html__( 'Step Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .process_box .steps_no ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
           
        ]
    );

    $this->add_control(
        'step_width',
        [
            'label' => esc_html__( 'Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 200,
            'step' => 1,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .process_box .steps_no ' => 'width: {{VALUE}}px!important; min-width: {{VALUE}}px!important;',
            ],
        ]
    );
    
    $this->add_control(
        'step_height',
        [
            'label' => esc_html__( 'Height', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 200,
            'step' => 1,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .process_box .steps_no ' => 'height: {{VALUE}}px!important; min-height: {{VALUE}}px!important;',
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
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .process_box .content_box h3 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .process_box .content_box h3 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_margin',
        [
            'label' => esc_html__( 'Title Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .process_box .content_box h3 a ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'hr_two',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            
        ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .process_box .content_box p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .process_box .content_box p  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'desc_margin',
        [
            'label' => esc_html__( 'Description Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .process_box .content_box p ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );


    $this->add_control(
        'hr_three',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            
        ]
    );

    $this->add_control(
        'image_margin',
        [
            'label' => esc_html__( 'Image Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .process_box .image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'process_style' => 'style_one'
            ],
        ]
    );

    
    
    $this->add_control(
        'image_height',
        [
            'label' => esc_html__( 'Image Height', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 200,
            'step' => 1,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .process_box .image img ' => 'height: {{VALUE}}rem!important;',
            ],
            'condition' => [
                'process_style' => 'style_one'
            ],
        ]
    );

    $this->add_control(
        'image_objet_type',
        [
        'label' => __('Image Type', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'cover' => __( 'Image Fit', 'monst-addons' ),
            'contain' => __( 'Image Normal', 'monst-addons' ),
        ],
        'default' => __('contain' , 'monst-addons'),
        'selectors' => [
            '{{WRAPPER}} .process_box .image img ' => 'object-fit: {{VALUE}}!important;',
        ],
        'condition' => [
            'process_style' => 'style_one'
        ],
        ]
       
    );

    $this->add_control(
        'image_border_radius',
        [
            'label' => esc_html__( 'Image Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .process_box .image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important; overflow:hidden;',
            ],
            'condition' => [
                'process_style' => 'style_one'
            ],
        ]
    );


    $this->add_control(
        'hr_four',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            'condition' => [
                'process_style' => 'style_one'
            ],
        ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_boxhshadow_color',
            'label' => esc_html__( 'Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}} .process_box  ',
            'condition' => [
                'process_style' => 'style_one'
            ],
        ]
    );


    $this->add_control(
        'background_color',
         [
            'label' => __('Box Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .process_box   ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'process_style' => 'style_one'
            ],
         ]
    );
   
    $this->add_control(
        'border_radius',
        [
            'label' => esc_html__( 'Box Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .process_box ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'process_style' => 'style_one'
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

<?php // style ?>
<?php if($settings['process_style'] == 'style_one'):  ?>
<?php // style ?>

<div class="process_box one  wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">

    <?php if(!empty($settings['steps_no'])): ?> 
        <h6 class="steps_no">   
            <?php echo wp_kses($settings['steps_no'] , $allowed_tags); ?>
        </h6>
    <?php endif; ?>

    <?php if(!empty($settings['image'])): // icon image ?>
        <div class="image">
            <img src="<?php echo esc_attr($settings['image']['url']); ?>" alt="icon" />
        </div>
    <?php endif; ?>
  <div class="content_box">
    <?php if(!empty($settings['title'])): ?> 
        <h3 class="font-heading">  
            <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>> 
                <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
            </a>
        </h3>
    <?php endif; ?>
        <?php if(!empty($settings['description'])): ?>
            <p><?php echo wp_kses($settings['description'] , $allowed_tags); ?></p>
        <?php endif; ?>
    </div>
</div>

 
<?php // style ?>
<?php elseif($settings['process_style'] == 'style_two'):  ?>
<?php // style ?>


<div class="process_box two <?php if($settings['d_flex'] == 'yes'): ?>d-flex<?php endif; ?> <?php if($settings['align_items_center'] == 'yes'): ?>align-items-center<?php endif; ?>  wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">

    <?php if(!empty($settings['steps_no'])): ?> 
        <div class="steps_no">   
            <?php echo wp_kses($settings['steps_no'] , $allowed_tags); ?>
        </div>
    <?php endif; ?>

     
  <div class="content_box">
    <?php if(!empty($settings['title'])): ?> 
        <h3 class="font-heading">  
            <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>> 
                <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
            </a>
        </h3>
    <?php endif; ?>
        <?php if(!empty($settings['description'])): ?>
            <p><?php echo wp_kses($settings['description'] , $allowed_tags); ?></p>
        <?php endif; ?>
    </div>
</div>
 
 

<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 