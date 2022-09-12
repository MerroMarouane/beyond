<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Icon_box_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-icon-box-v1';
    }

    public function get_title()
    {
        return __('Icon Box V1', 'monst-addons');
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
        $this->start_controls_section('icon_v1_settings',
        [ 
            'label' => __('Icon Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'icon_box_style',
            [
            'label' => __('Icon Box Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );


        $this->add_control(
            'icon_style',
            [
            'label' => __('Icon Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'type_image' => __( 'Image Type', 'monst-addons' ),
                'type_icon' => __( 'Image Icon', 'monst-addons' ),
            ],
            'default' => __('type_image' , 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'image_font',
            [
            'label' => __( 'Image', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
                'icon_style' => 'type_image'
            ],
            ] 
        );
        $this->add_control(
            'icon_fonts',
            [
                'label' => __('Icon', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::ICON,
                'options' => get_monst_icons(),
                'default' => __('fi-rs-user' , 'monst-addons'),
                'condition' => [
                    'icon_style' => 'type_icon'
                ],
            ]
        );


        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('  Stay home & get your daily <br />  needs from our shop', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        
        $this->add_responsive_control(
            'description',
            [
              'label' => __('Decription', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Start Your Daily Shopping with <span class="text-brand">Nest Mart</span>', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );

        
        $this->add_responsive_control(
            'list_enable',
            [
              'label' => __( 'List item Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'yes',
              'condition' => [
                'icon_box_style' => 'style_two'
            ],
            ]
        );

        $repeater = new \Elementor\Repeater();
      
        $repeater->add_responsive_control(
          'list_item',
          [
             'label' => __('List item', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Cake & Milk', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        
        $repeater->add_responsive_control(
          'list_link',
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
        'list_repeater',
        [
            'label' => __('List Repeater', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                'list_item' =>  __('Cake & Milk ', 'monst-addons'),
                'list_link' =>  __('#', 'monst-addons'),
                ],
                 [
                'list_item' =>  __('Coffes & Teas', 'monst-addons'),
                'list_link' =>  __('#', 'monst-addons'),
                ],
                 [
                'list_item' =>  __('Pet Foods', 'monst-addons'),
                'list_link' =>  __('#', 'monst-addons'),
                ],
                 [
                'list_item' =>  __('Vegetables', 'monst-addons'),
                'list_link' =>  __('#', 'monst-addons'),
                ],
                 
            ],
            'title_field' => '{{{ list_item }}}',
            'condition' => [
                'list_enable'  => 'yes' ,
                'icon_box_style' => 'style_two'
            ],
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

    $this->add_control(
        'icon_color',
         [
            'label' => __('Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box .icon_bx i ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .icon_simple_box .content_box h3 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box .content_box h3 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .icon_simple_box .content_box p',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box .content_box p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );


   
    $this->add_control(
        'border_radius',
        [
            'label' => esc_html__( 'Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'icon_box_style' => 'style_two'
            ],
        ]
    );

    
    $this->add_control(
        'box_border',
        [
            'label' => esc_html__( 'Border Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box   ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'icon_box_style' => 'style_two'
            ],  
        ]
    );
    $this->add_control(
        'box_border_style',
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
            '{{WRAPPER}} .icon_simple_box ' => 'border-style: {{VALUE}}!important;',
        ],
        'condition' => [
            'icon_box_style' => 'style_two'
        ],  
        ]
    );

    $this->add_control(
        'box_border_color',
         [
            'label' => __('Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box ' => 'border-color: {{VALUE}}!important;',
            ],  'condition' => [
                'icon_box_style' => 'style_two'
            ],  
         ]
    );


    $this->add_control(
        'box_bg_color',
         [
            'label' => __('Box Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_simple_box ' => 'background: {{VALUE}}!important;',
            ],  'condition' => [
                'icon_box_style' => 'style_two'
            ],  
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_boxhshadow_color',
            'label' => esc_html__( 'Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}} .icon_simple_box  ',
            'condition' => [
                'icon_box_style' => 'style_two'
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
                '{{WRAPPER}} .icon_simple_box ' => 'text-align: {{VALUE}}!important;',
            ],
            'condition' => [
                'icon_box_style' => 'style_two'
            ],  
        ]
    );
  

    $this->end_controls_section();


    
    $this->start_controls_section('list_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        'condition' => [
            'list_enable'  => 'yes' ,
            'icon_box_style' => 'style_two'
        ],
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'List Typography', 'monst-addons' ),
            'name' => 'steps_typo',
            'selector' => '{{WRAPPER}} .list-disc  li a',
        ]
    );

    $this->add_control(
        'list_color',
         [
            'label' => __('List Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list-disc  li a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    
    $this->add_control(
        'list_margin',
        [
            'label' => esc_html__( 'List Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .list-disc  li ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
      
    $this->add_control(
        'list_padding',
        [
            'label' => esc_html__( 'List Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .list-disc  li ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'list_border',
        [
            'label' => esc_html__( 'List Border Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .list-disc  li ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'list_border_style',
        [
        'label' => __('List Border Style', 'monst-addons'),
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
            '{{WRAPPER}} .list-disc  li ' => 'border-style: {{VALUE}}!important;',
        ],
        ]
    );

    $this->add_control(
        'list_border_color',
         [
            'label' => __('List Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list-disc  li ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'list_border_radius',
        [
            'label' => esc_html__( 'List Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .list-disc  li ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'list_background_color',
         [
            'label' => __('List Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list-disc  li' => 'background-color: {{VALUE}}!important;',
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
<?php if($settings['icon_box_style'] == 'style_one'):  ?>
<?php // style ?>

<div class="icon_simple_box one d-flex wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
    <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
        <div class="icon_bx">
        <?php if(!empty($settings['image_font'])): // icon image ?>
            <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
        </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
        <div class="icon_bx">
            <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
        </div>
    <?php endif; // icon style ?>
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
<?php elseif($settings['icon_box_style'] == 'style_two'):  ?>
<?php // style ?>

<div class="icon_simple_box two wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
    <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
        <div class="icon_bx">
        <?php if(!empty($settings['image_font'])): // icon image ?>
            <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
        </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
        <div class="icon_bx">
            <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
        </div>
    <?php endif; // icon style ?>
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
        <?php if($settings['list_enable'] == 'yes'): ?>
        <ul class="list-disc">
        <?php foreach($settings['list_repeater'] as  $key => $list_repeater):   
        $target = $list_repeater['list_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $list_repeater['list_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
        <li class="list_items">
                <a class="nav-link" href="<?php echo esc_url($list_repeater['list_link']['url']); ?>"
                    <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                    <?php echo wp_kses($list_repeater['list_item'] , $allowed_tags); ?>
                </a>
        </li>
        <?php endforeach; ?>
        </ul>
         <?php endif; ?>
    </div>
</div>


<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 