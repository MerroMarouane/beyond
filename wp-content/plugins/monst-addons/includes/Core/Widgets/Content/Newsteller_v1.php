<?php

namespace  Monstaddons\Core\Widgets\Content;
   
   if (!defined('ABSPATH')) {
       exit;
   } // If this file is called directly, abort.
   
   class Newsteller_v1 extends \Elementor\Widget_Base
   {
   
       public function get_name()
       {
           return 'monst-subscribe-v1';
       }
   
       public function get_title()
       {
           return __('Newsletter V1' , 'monst-addons');
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
               'subscribe_content',
               [
                   'label' => __('Subscribe  Content', 'monst-addons')
               ]
           );
   
           $this->add_control(
             'subscribe_style_two',
             [
               'label'   => esc_html__( 'Choose Style', 'monst-addons' ),
               'type'    => \Elementor\Controls_Manager::SELECT,
               'default' => 'type_one',
               'options' => array(
                 'type_one' => esc_html__( 'Style One', 'monst-addons' ),
                  
                ),
                ]
             );
               
             $this->add_control(
               'subscribe_high',
               [
                  'label'       => esc_html__( 'Highlight Text', 'monst-addons' ),
                  'type'        => \Elementor\Controls_Manager::TEXTAREA,
                  'default' =>  esc_html__( 'Updates on products' , 'monst-addons'),
                 
               ]
              );
           $this->add_control(
   			'subscribe_title',
   			[
   				'label'       => esc_html__( 'Subscribe Title', 'monst-addons' ),
   				'type'        => \Elementor\Controls_Manager::TEXTAREA,
               'default' =>  esc_html__( 'Subscribe to creote' , 'monst-addons'),   
   			]
           );
           $this->add_control(
               'subscribe_description',
               [
               	'label'       => esc_html__( 'Description', 'monst-addons' ),
   				   'type'        => \Elementor\Controls_Manager::TEXTAREA,
                  'default' =>  esc_html__( 'Get the latest posts delivers right to your inbox' , 'monst-addons'),
               ]
           );
           $this->add_control(
               'subscribe_shortcode',
               [
               	'label'       => esc_html__( 'Shortcode', 'monst-addons' ),
   				   'type'        => \Elementor\Controls_Manager::TEXTAREA,
                  'default' =>  esc_html__( '[mc4wp_form id="1174"]' , 'monst-addons'),
                  'placeholder'  =>  esc_html__( '[mc4wp_form id="1174"]' , 'monst-addons'),
               ]
           );
          
           $this->add_control(
   			'padding_sub',
   			[
   				'label' => __( 'Content Padding', 'monst-addons' ),
   				'type' => \Elementor\Controls_Manager::DIMENSIONS,
   				'size_units' => [ 'px', '%', 'em' ],
   				'selectors' => [
   					'{{WRAPPER}} .newsteller.style_one , {{WRAPPER}} .newsteller.style_two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
   				],
               'condition' => [
                  'subscribe_style_two' => ['type_one' , 'type_two'],
               ], 
   			]
   		);
           $this->add_control(
               'background_image',
               [
                   'label' => __('Background Image', 'monst-addons'),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'default' => [
                       'url' => \Elementor\Utils::get_placeholder_image_src(),
                   ],
                  'condition' => [
                     'subscribe_style_two' => 'type_two',
                  ],  
               ]
           );
        
    $this->end_controls_section();

    $this->start_controls_section('title_css',
    [ 
        'label' => __('Title Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Sub Title Typography', 'monst-addons' ),
            'name' => 'sm_typo',
            'selector' => '{{WRAPPER}} .section_title h4',
        ]
    );
    $this->add_control(
        'sm_title_color',
         [
            'label' => __('Sub Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title h4 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'sm_title_bg_color',
         [
            'label' => __('Sub Title Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title h4 ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'sm_margin',
        [
            'label' => esc_html__( 'Sub Title Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .section_title h4 ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .section_title h1',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title h1 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_span_color',
         [
            'label' => __('Title Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title h1 span' => 'color: {{VALUE}}!important;',
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
                '{{WRAPPER}} .section_title .title ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .section_title p',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'description_span_color',
         [
            'label' => __('Description Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section_title p span' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'description_margin',
        [
            'label' => esc_html__( 'Description Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .section_title p ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .section_title ' => 'text-align: {{VALUE}}!important;',
            ],
        ]
    );

    $this->end_controls_section();

    
    $this->start_controls_section('form_css',
    [ 
        'label' => __('Form Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );
     
    $this->add_responsive_control(
        'form_alignment',
        [
            'label' => esc_html__( 'Alignment', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left_form' => [
                    'title' => esc_html__( 'Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                ],
                'center_form' => [
                    'title' => esc_html__( 'Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                ],
                'right_form' => [
                    'title' => esc_html__( 'Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'default' => 'center_form',
            'toggle' => true,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_shadow',
            'label' => esc_html__( 'Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group',
        ]
    );


    $this->add_control(
        'form_bg_color',
         [
            'label' => __('Form Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'form_paddding',
        [
            'label' => esc_html__( 'Form Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'form_bor_color',
         [
            'label' => __('Form Input Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="email"] ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'form_test_bg_color',
         [
            'label' => __('Form Input Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="email"] ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'form_test_color',
         [
            'label' => __('Form Input Text Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="email"]::placeholder ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'form_icon_color',
         [
            'label' => __('Form Input Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form p i ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'form_button_color',
         [
            'label' => __('Form Button  Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"]::placeholder , 
                {{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"] ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'form_button_bg_color',
         [
            'label' => __('Form Button Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"] ,
                {{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"] ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'form_button_bor_color',
         [
            'label' => __('Form Button Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"] ,
                {{WRAPPER}} .newsteller.style_one .item_scubscribe .input_group form input[type="submit"] ' => 'border-color: {{VALUE}}!important; ',
            ],
         ]
    );
   
    $this->end_controls_section();

    }
protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
?>
<?php if($settings['subscribe_style_two'] == 'type_one'): ?>
<section class="newsteller style_one <?php echo esc_attr($settings['form_alignment']); ?>">

    
        <div class="section_title type_one">
            <?php if(!empty($settings['subscribe_high'])): ?>
                <h4 class="text-brand"> <?php echo wp_kses($settings['subscribe_high'] , $allowed_tags);  ?></h4>
            <?php endif; ?>
            <?php if(!empty($settings['subscribe_title'])): ?>
                <div class="title_whole">
                    <h1 class="title"> <?php echo wp_kses($settings['subscribe_title'] , $allowed_tags);  ?>  </h1>
                    
                </div>
            <?php endif; ?>
            <?php if(!empty($settings['subscribe_description'])): ?>
                <p> <?php echo wp_kses($settings['subscribe_description'] , $allowed_tags);  ?></p>
            <?php endif; ?>
        </div>


            <div class="item_scubscribe">
               <div class="input_group">
                  <?php echo do_shortcode( $settings['subscribe_shortcode'] );?>
               </div>
            </div>
   
</section>
 <?php endif; ?>
 
<?php
}
}
 