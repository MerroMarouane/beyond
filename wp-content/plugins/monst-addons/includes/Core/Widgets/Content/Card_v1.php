<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Card_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-card-v1';
    }

    public function get_title()
    {
        return __('Card V1', 'monst-addons');
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
        $this->start_controls_section('card_v1_settings',
        [ 
            'label' => __('Card Settings', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'card_type',
            [
            'label' => __('Card Type', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'single_card' => __( 'Single Card', 'monst-addons' ),
                'card_carousel' => __( 'Card Carousel', 'monst-addons' ),
            ],
            'default' => __('card_carousel' , 'monst-addons'),
            ]
        );

        $this->add_control(
            'card_style',
            [
            'label' => __('Card Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );
        $this->end_controls_section();
        
        // style one start
        $this->start_controls_section('single_carg_content',
        [ 
            'label' => __('Single Card Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'condition' => [
                'card_type' => 'single_card'
            ],  
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
            ] 
        );
       
        $this->add_responsive_control(
          'titles',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Product Launch', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        
        $this->add_responsive_control(
            'details',
            [
              'label' => __('Details', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Alibaba Co', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'button_text',
            [
              'label' => __('Button Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('View Details', 'monst-addons'),
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
 
          // style one start
          $this->start_controls_section('carousel_carg_content',
          [ 
              'label' => __('Carousel Card Content', 'monst-addons'),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
              'condition' => [
                  'card_type' => 'card_carousel'
              ],  
          ]
          );

          $card_repeater = new \Elementor\Repeater();
  
        
          $card_repeater->add_responsive_control(
              'r_image',
              [
              'label' => __( 'Image', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::MEDIA,
              'default' => [
                  'url' => \Elementor\Utils::get_placeholder_image_src(),
              ], 
              ] 
          );
         
          $card_repeater->add_responsive_control(
            'r_titles',
            [
               'label' => __('Title', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Product Launch', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );
          
          $card_repeater->add_responsive_control(
              'r_details',
              [
                'label' => __('Details', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Alibaba Co', 'monst-addons'),
                'placeholder' => __('Type your text here', 'monst-addons'),
              ]
          );
          $card_repeater->add_responsive_control(
              'r_button_text',
              [
                'label' => __('Button Text', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('View Details', 'monst-addons'),
                'placeholder' => __('Type your text here', 'monst-addons'),
              ]
          );
          $card_repeater->add_responsive_control(
              'r_link',
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
        'card_carousel_repeater',
        [
            'label' => __('Card Carousel Repeater', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $card_repeater->get_controls(),
            'default' => [
                [
                'r_titles' => __('Product Launch', 'monst-addons'),
                'r_details' =>  __('Cocacola., Co', 'monst-addons'),
                ],
                [
                'r_titles' => __('New Event', 'monst-addons'),
                'r_details' =>  __('Sign up for the daily newsletter', 'monst-addons'),
                ],
                [
                'r_titles' => __('User growth', 'monst-addons'),
                'r_details' =>  __('Harvard university', 'monst-addons'),
                ], 
            ],
            'title_field' => '{{{ r_titles }}}',

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
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .card_style .content_box h3 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box h3 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .card_style .content_box p ',
        ]
    );
    $this->add_control(
        'desc_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Button Typography', 'monst-addons' ),
            'name' => 'button_typo',
            'selector' => '{{WRAPPER}} .card_style .content_box .btn_content a ',
        ]
    );
    $this->add_control(
        'button_color',
         [
            'label' => __('Button Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box .btn_content a  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'button_bg_color',
         [
            'label' => __('Button Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box .btn_content a ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'button_border_color',
         [
            'label' => __('Button Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box .btn_content a ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );

    
    $this->add_control(
        'button_border_radius',
        [
            'label' => esc_html__( 'Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .card_style .content_box .btn_content a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );


    $this->add_control(
        'box_border_radius',
        [
            'label' => esc_html__( 'Box Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .card_style ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'box_bg_color',
         [
            'label' => __('Box Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
  
    $this->add_control(
        'box_border_color',
         [
            'label' => __('Box Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_style ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
  
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_boxhshadow_color',
            'label' => esc_html__( 'Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}} .card_style  ',
        ]
    );

    $this->end_controls_section();

    $this->start_controls_section('card_caro_arrows',
    [ 
        'label' => __('Arrow Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        'condition' => [
            'card_type' => 'card_carousel'
        ], 
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'top: {{VALUE}}!important; bottom:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'left: {{VALUE}}!important;right:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'top: {{VALUE}}!important; bottom:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'right: {{VALUE}}!important; left:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'bottom: {{VALUE}}!important; top:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'left: {{VALUE}}!important; right:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'bottom: {{VALUE}}!important; top:unset!important;',
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
            '{{WRAPPER}} .carausel-2-columns-1-arrows ' => 'right: {{VALUE}}!important; left:unset!important;',
            ],
           'condition' => [
            'arrows_enable' => 'yes' , 
            'arrow_moving' => 'bottom_right' , 
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


<?php // style ?>
<?php if($settings['card_type'] == 'single_card'): 
    $target = $settings['link']['is_external'] ? ' target="_blank"' : '';
    $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
<?php // style ?>
<div class="card_style one wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
    <?php if(!empty($settings['image'])): // icon image ?>
    <div class="image">
        <img src="<?php echo esc_attr($settings['image']['url']); ?>" alt="icon" />
    </div>
    <?php endif; ?>
    <div class="content_box clearfix">
        <div class="content_left">
            <?php if(!empty($settings['titles'])): ?>
            <h3 class="font-heading">
                <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?>
                    <?php echo esc_attr($nofollow); ?>>
                    <?php echo wp_kses($settings['titles'] , $allowed_tags); ?>
                </a>
            </h3>
            <?php endif; ?>
            <?php if(!empty($settings['details'])): ?>
            <p><?php echo wp_kses($settings['details'] , $allowed_tags); ?></p>
            <?php endif; ?>
        </div>
        <div class="btn_content">
            <?php if(!empty($settings['button_text'])): ?>
            <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?>
                <?php echo esc_attr($nofollow); ?> class="theme_btn two">
                <?php echo wp_kses($settings['button_text'] , $allowed_tags); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>


<?php // style ?>
<?php elseif($settings['card_type'] == 'card_carousel'):  ?>
<?php // style ?>


<div class="card_carousel_type_one <?php if($settings['arrows_enable'] == 'yes'): ?>arrow_enables<?php endif; ?>">
    <?php if($settings['arrows_enable'] == 'yes'): ?>
        <div class="carausel-2-columns-1-arrows"></div>
    <?php endif; ?>
<div class="carausel-2-columns slick-carausel" >
<?php foreach($settings['card_carousel_repeater'] as  $key => $card_carousel_repeater): 
 $target_r = $card_carousel_repeater['r_link']['is_external'] ? ' target="_blank"' : '';
 $nofollow_r = $card_carousel_repeater['r_link']['nofollow'] ? ' rel="nofollow"' : '';
?>
<div class="px-3">
<div class="card_style one">
    <?php if(!empty($card_carousel_repeater['r_image'])): // icon image ?>
    <div class="image">
        <img src="<?php echo esc_attr($card_carousel_repeater['r_image']['url']); ?>" alt="icon" />
    </div>
    <?php endif; ?>
    <div class="content_box clearfix">
        <div class="content_left">
            <?php if(!empty($card_carousel_repeater['r_titles'])): ?>
            <h3 class="font-heading">
                <a href="<?php echo esc_url($card_carousel_repeater['r_link']['url']); ?>" <?php echo esc_attr($target_r); ?>
                    <?php echo esc_attr($nofollow_r); ?>>
                    <?php echo wp_kses($card_carousel_repeater['r_titles'] , $allowed_tags); ?>
                </a>
            </h3>
            <?php endif; ?>
            <?php if(!empty($card_carousel_repeater['r_details'])): ?>
            <p><?php echo wp_kses($card_carousel_repeater['r_details'] , $allowed_tags); ?></p>
            <?php endif; ?>
        </div>
        <div class="btn_content">
            <?php if(!empty($card_carousel_repeater['r_button_text'])): ?>
            <a href="<?php echo esc_url($card_carousel_repeater['r_link']['url']); ?>" <?php echo esc_attr($target_r); ?>
                <?php echo esc_attr($nofollow_r); ?> class="theme_btn two">
                <?php echo wp_kses($card_carousel_repeater['r_button_text'] , $allowed_tags); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>
<?php endforeach; ?>
    </div>
</div>


<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 