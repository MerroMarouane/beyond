<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class List_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-list-items-v1';
    }

    public function get_title()
    {
        return __('List Items V1', 'monst-addons');
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
 
    
        

        $this->start_controls_section('list_settings',
        [ 
            'label' => __('List Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        
        ]
        );
  
        $this->add_control(
          'list_type',
          [
          'label' => __('List Type', 'monst-addons'),
          'type' => \Elementor\Controls_Manager::SELECT,
          'options' => [
              'linline' => __( 'Inline View', 'monst-addons' ),
              'list' => __( 'List View', 'monst-addons' ),
          ],
          'default' => __('linline' , 'monst-addons'),
          ]
         
      );

    

        $repeater = new \Elementor\Repeater();

        $repeater->add_responsive_control(
            'icon_enable',
            [
              'label' => __( 'Icon Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'yes',
      
            ]
        );


        $repeater->add_control(
            'icon_style',
            [
            'label' => __('Icon Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'type_image' => __( 'Image Type', 'monst-addons' ),
                'type_icon' => __( 'Image Icon', 'monst-addons' ),
            ],
            'default' => __('type_image' , 'monst-addons'),
            'condition' => [
                'icon_enable' => 'yes'
            ],
            ]
        );

        $repeater->add_responsive_control(
            'image_font',
            [
            'label' => __( 'Image', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
                'icon_style' => 'type_image',
                'icon_enable' => 'yes'
            ],
            ] 
        );
        $repeater->add_control(
            'icon_fonts',
            [
                'label' => __('Icon', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::ICON,
                'options' => get_monst_icons(),
                'default' => __('fi-rs-user' , 'monst-addons'),
                'condition' => [
                    'icon_style' => 'type_icon',
                    'icon_enable' => 'yes'
                ],
            ]
        );

      
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
        ]
    );


    $this->end_controls_section();

    $this->start_controls_section('list_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'List Typography', 'monst-addons' ),
            'name' => 'steps_typo',
            'selector' => '{{WRAPPER}} .list_item_box  li a',
        ]
    );

    $this->add_control(
        'list_color',
         [
            'label' => __('List Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li a ' => 'color: {{VALUE}}!important;',
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
                '{{WRAPPER}} .list_item_box  li ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .list_item_box  li ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .list_item_box  li ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
            '{{WRAPPER}} .list_item_box  li ' => 'border-style: {{VALUE}}!important;',
        ],
        ]
    );

    $this->add_control(
        'list_border_color',
         [
            'label' => __('List Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li ' => 'border-color: {{VALUE}}!important;',
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
                '{{WRAPPER}} .list_item_box  li ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

    $this->add_control(
        'list_background_color',
         [
            'label' => __('List Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li' => 'background-color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'hr_one',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            
        ]
    );

    $this->add_control(
        'icon_margin_right',
        [
            'label' => esc_html__( 'Icon margin Right', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 200,
            'step' => 1,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li .icon_bx ' => 'margin-right: {{VALUE}}px!important;',
            ],
        ]
    );

    $this->add_control(
        'icon_image_width',
        [
            'label' => esc_html__( 'Icon Image Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 200,
            'step' => 1,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li small img ' => 'width: {{VALUE}}px!important; min-width: {{VALUE}}px!important;',
            ],
        ]
    );
   
     
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Icon Font Typography', 'monst-addons' ),
            'name' => 'icon_font_typo',
            'selector' => '{{WRAPPER}} .list_item_box  li small i ',
        ]
    );
    $this->add_control(
        'icon_color',
         [
            'label' => __('Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_item_box  li small i ' => 'color: {{VALUE}}!important;',
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

<div class="list_item_box style_<?php echo esc_attr($settings['list_type']); ?>">
    <ul class="list-inline">
        <?php foreach($settings['list_repeater'] as  $key => $list_repeater):   
        $target = $list_repeater['list_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $list_repeater['list_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
        <li class="list_items">
            <small class='d-flex align-items-center'>
                <?php if($list_repeater['icon_enable'] == 'yes'): // icon enable ?>
                <?php if($list_repeater['icon_style'] == 'type_image'): // icon style ?>
                <span class="icon_bx">
                    <?php if(!empty($list_repeater['image_font'])): // icon image ?>
                    <img src="<?php echo esc_attr($list_repeater['image_font']['url']); ?>" alt="icon" />
                    <?php endif; // icon image ?>
                </span>
                <?php elseif($list_repeater['icon_style'] == 'type_icon'): // icon style ?>
                <span class="icon_bx">
                    <i class="fa fab fas <?php echo esc_attr($list_repeater['icon_fonts']); ?>"></i>
                </span>
                <?php endif; // icon style ?>
                <?php endif; // icon enable ?>
                <a class="nav-link" href="<?php echo esc_url($list_repeater['list_link']['url']); ?>"
                    <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                    <?php echo wp_kses($list_repeater['list_item'] , $allowed_tags); ?>
                </a>
            </small>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php

    }
}

 