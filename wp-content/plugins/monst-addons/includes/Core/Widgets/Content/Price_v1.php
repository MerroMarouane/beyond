<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Price_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-price-style-v1';
    }

    public function get_title()
    {
        return __('Price V1', 'monst-addons');
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
        $this->start_controls_section('price_v1_settings',
        [ 
            'label' => __('Price Settings', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'price_style',
            [
            'label' => __('Price Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
                'style_three' => __( 'Style Three', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'box_active',
            [
              'label' => __( 'Active / Inactive', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section('price_v1_content',
        [ 
            'label' => __('Price Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'condition' => [
                'price_style' => 'style_one'
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
             'default' => __('Startup', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );

        $this->add_responsive_control(
            'price',
            [
              'label' => __('Price', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('$45.99', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
        
        $this->add_responsive_control(
            'details',
            [
              'label' => __('Details', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('user per month', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );

        $p_features_repeater = new \Elementor\Repeater();
        $p_features_repeater->add_responsive_control(
            'features_yes_or_no_enable',
            [
              'label' => __( 'Features Yes / No', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
            ]
        );
     
        $p_features_repeater->add_responsive_control(
          'features',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Product Launch', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        
       
        
     $this->add_control(
      'price_features_repeater',
      [
          'label' => __('Features Repeater', 'monst-addons'),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $p_features_repeater->get_controls(),
          'default' => [
              [
              'features_yes_or_no_enable' => __('yes', 'monst-addons'),
              'features' =>  __('10 GB Storage', 'monst-addons'),
              ],
              [
              'features_yes_or_no_enable' => __('yes', 'monst-addons'),
              'features' =>  __('Unlimited Domains', 'monst-addons'),
              ],
              [
              'features_yes_or_no_enable' => __('yes', 'monst-addons'),
              'features' =>  __('1 Datebases', 'monst-addons'),
              ], 
              [
              'features_yes_or_no_enable' => __('no', 'monst-addons'),
              'features' =>  __('3 Emails', 'monst-addons'),
              ], 
          ],
          'title_field' => '{{{ features }}}',

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
            'button_link',
            [
                'label' => __('Button Link', 'monst-addons'),
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
        $this->add_responsive_control(
            'button_text_two',
            [
              'label' => __('Button Two Text ', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('View Details', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'button_link_two',
            [
                'label' => __('Button Two Link', 'monst-addons'),
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



    $this->start_controls_section('price_v2_content',
    [ 
        'label' => __('Price Content', 'monst-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'price_style' => 'style_two'
        ],
    ]
    );
  
   
   
    $this->add_responsive_control(
      'tw_titles',
      [
         'label' => __('Title', 'monst-addons'),
         'type' => \Elementor\Controls_Manager::TEXTAREA,
         'default' => __('Startup', 'monst-addons'),
         'placeholder' => __('Type your text here', 'monst-addons'),    
      ]
    );

    $this->add_responsive_control(
        'tw_price',
        [
          'label' => __('Price', 'monst-addons'),
          'type' => \Elementor\Controls_Manager::TEXTAREA,
          'default' => __('$45.99', 'monst-addons'),
          'placeholder' => __('Type your text here', 'monst-addons'),
        ]
    );

    $this->add_responsive_control(
        'tw_link',
        [
            'label' => __('Button Link', 'monst-addons'),
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
        'tw_wow_animation',
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



$this->start_controls_section('price_v3_content',
[ 
    'label' => __('Price Content', 'monst-addons'),
    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    'condition' => [
        'price_style' => 'style_three'
    ],
]
);



$this->add_responsive_control(
  'pthre_titles',
  [
     'label' => __('Title', 'monst-addons'),
     'type' => \Elementor\Controls_Manager::TEXTAREA,
     'default' => __('Startup', 'monst-addons'),
     'placeholder' => __('Type your text here', 'monst-addons'),    
  ]
);

$this->add_responsive_control(
    'pthre_descriptions',
    [
      'label' => __('Details', 'monst-addons'),
      'type' => \Elementor\Controls_Manager::TEXTAREA,
      'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit enim non, gravida turpis.', 'monst-addons'),
      'placeholder' => __('Type your text here', 'monst-addons'),
    ]
);
 

$pthre__features_repeater = new \Elementor\Repeater();
$pthre__features_repeater->add_responsive_control(
    'pthre_features_yes_or_no_enable',
    [
      'label' => __( 'Features Yes / No', 'monst-addons' ),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'label_on' => __( 'Show', 'monst-addons' ),
      'label_off' => __( 'Hide', 'monst-addons' ),
      'return_value' => 'yes',
      'default' => 'no',
    ]
);

$pthre__features_repeater->add_responsive_control(
  'pthre_features',
  [
     'label' => __('Title', 'monst-addons'),
     'type' => \Elementor\Controls_Manager::TEXTAREA,
     'default' => __('Product Launch', 'monst-addons'),
     'placeholder' => __('Type your text here', 'monst-addons'),    
  ]
);



$this->add_control(
'pthre_features_repeater',
[
  'label' => __('Features Repeater', 'monst-addons'),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $pthre__features_repeater->get_controls(),
  'default' => [
      [
      'pthre_features_yes_or_no_enable' => __('yes', 'monst-addons'),
      'pthre_features' =>  __('10 GB Storage', 'monst-addons'),
      ],
      [
      'pthre_features_yes_or_no_enable' => __('yes', 'monst-addons'),
      'pthre_features' =>  __('Unlimited Domains', 'monst-addons'),
      ],
      [
      'pthre_features_yes_or_no_enable' => __('yes', 'monst-addons'),
      'pthre_features' =>  __('1 Datebases', 'monst-addons'),
      ], 
      [
      'pthre_features_yes_or_no_enable' => __('no', 'monst-addons'),
      'pthre_features' =>  __('3 Emails', 'monst-addons'),
      ], 
  ],
  'title_field' => '{{{ pthre_features }}}',

]
);


$this->add_responsive_control(
    'pthre_button_text',
    [
      'label' => __('Button Text With Price', 'monst-addons'),
      'type' => \Elementor\Controls_Manager::TEXTAREA,
      'default' => __('Buy 25$', 'monst-addons'),
      'placeholder' => __('Type your text here', 'monst-addons'),
    ]
);
$this->add_responsive_control(
    'pthre_button_link',
    [
        'label' => __('Button Link', 'monst-addons'),
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


$this->add_responsive_control(
    'pthre_plan_period',
    [
      'label' => __('Plan period', 'monst-addons'),
      'type' => \Elementor\Controls_Manager::TEXTAREA,
      'default' => __('Per month', 'monst-addons'),
      'placeholder' => __('Type your text here', 'monst-addons'),
    ]
);


$this->add_control(
    'pthre_wow_animation',
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



    $this->start_controls_section('custom_css',
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
            'selector' => '{{WRAPPER}} .price_style.one h3  , {{WRAPPER}} .price_style.two a span ,  {{WRAPPER}} .price_style.three .in_left h3 ',
            'condition' => [
                'price_style' => ['style_one' , 'style_two' ,  'style_three'],
            ],
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one h3 , {{WRAPPER}} .price_style.two a span ,  {{WRAPPER}} .price_style.three .in_left h3 ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' , 'style_two' ,  'style_three'],
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Price Typography', 'monst-addons' ),
            'name' => 'price_typo',
            'selector' => '{{WRAPPER}} .price_style.one  span  ',
            'condition' => [
                'price_style' => ['style_one'],
            ],
        ]
    );
    $this->add_control(
        'price_color',
         [
            'label' => __('Price Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one  span  ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one'],
            ],
         ]
    );

    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .price_style.one p , {{WRAPPER}} .price_style.three .in_right p , {{WRAPPER}} .price_style.three .price_content_right p  ',
            'condition' => [
                'price_style' => ['style_one' ,  'style_three'],
            ],
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one p , {{WRAPPER}} .price_style.three .in_right p , {{WRAPPER}} .price_style.three .price_content_right p ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' ,  'style_three'],
            ],
         ]
    );

       
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' List Typography', 'monst-addons' ),
            'name' => 'list_typo',
            'selector' => '{{WRAPPER}} .price_style .features ul li  ',
            'condition' => [
                'price_style' => ['style_one'],
            ],
        ]
    );
    $this->add_control(
        'list_color',
         [
            'label' => __('List Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style .features ul li' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' ,  'style_three'],
            ],
         ]
    );
    $this->add_control(
        'list_icon_color',
         [
            'label' => __('List Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style .features ul li svg.stroke_color path' => 'stroke: {{VALUE}}!important;',
                '{{WRAPPER}} .price_style .features ul li svg.border_color path' => 'fill: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' ,  'style_three'],
            ],
         ]
    );


    $this->add_control(
        'button_color',
         [
            'label' => __('Button Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.one , {{WRAPPER}} .price_style.two a span.price ,  {{WRAPPER}} .price_style.three .price_content_right a.theme_btn  ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' , 'style_two'  , 'style_three'],
            ],
         ]
    );
    $this->add_control(
        'button_bg',
         [
            'label' => __('Button Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.one , {{WRAPPER}} .price_style.two a span.price ,  {{WRAPPER}} .price_style.three .price_content_right a.theme_btn ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' , 'style_two'  , 'style_three'],
            ],
         ]
    );
    
    $this->add_control(
        'border_radius',
        [
            'label' => esc_html__( 'Button Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.one , {{WRAPPER}} .price_style.two a span.price ,  {{WRAPPER}} .price_style.three .price_content_right a.theme_btn  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one' , 'style_two'  , 'style_three'],
            ],
        ]
    );
   
    $this->add_control(
        'brnborder_color',
         [
            'label' => __('Button Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.one ,  {{WRAPPER}} .price_style.three .price_content_right a.theme_btn   ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => ['style_one'  , 'style_three'],
            ],
         ]
    );
    $this->add_control(
        'hr_three',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            'condition' => [
                'price_style' => ['style_one'    , 'style_three'],
            ],
        ]
    );
    $this->add_control(
        'button_color_two',
         [
            'label' => __('Button Two Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.two  ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_one'
            ],
         ]
    );
    $this->add_control(
        'button_bg_two',
         [
            'label' => __('Button Two Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.two  ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_one'
            ],
         ]
    );
    
    $this->add_control(
        'border_radius_two',
        [
            'label' => esc_html__( 'Button Two Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.two  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_one'
            ],
        ]
    );
   
    $this->add_control(
        'border_color_two',
         [
            'label' => __('Button Two Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one .buttom_content a.two  ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_one'
            ],
         ]
    );
  
    $this->add_control(
        'hr_four',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            'condition' => [
                'price_style' => 'style_one'
            ],
        ]
    );

    $this->add_control(
        'box_bg_color',
         [
            'label' => __('Price Box Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.one  ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_one'
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_boxhshadow_color',
            'label' => esc_html__( 'Price Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}} .price_style.one  ',
            'condition' => [
                'price_style' => 'style_one'
            ],
        ]
    );


    $this->add_control(
        'box_boder_color',
         [
            'label' => __('Price Box Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three  ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );


    $this->add_control(
        'hover_style_three',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            'condition' => [
                'price_style' => 'style_three'
            ],
        ]
    );

    
    $this->add_control(
        'title_hover_color',
         [
            'label' => __('Hover Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active h3 , {{WRAPPER}} .price_style.three:hover h3 ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );
    $this->add_control(
        'ho_description_color',
         [
            'label' => __('Hover Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active p , {{WRAPPER}} .price_style.three:hover p  ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );
    $this->add_control(
        'ho_list_icon_color',
         [
            'label' => __('Hover List Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style .features ul li svg.stroke_color path' => 'stroke: {{VALUE}}!important;',
                '{{WRAPPER}} .price_style .features ul li svg.border_color path' => 'fill: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );

    $this->add_control(
        'ho_list_color',
         [
            'label' => __('Hover List  Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .price_style.three.box_active ul li , {{WRAPPER}} .price_style.three:hover ul li   ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );

    $this->add_control(
        'ho_button_color',
         [
            'label' => __('Hover Button Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active .price_content_right a.theme_btn , {{WRAPPER}} .price_style.three:hover .price_content_right a.theme_btn ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );
    $this->add_control(
        'ho_button_bg_color',
         [
            'label' => __('Hover Button Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active .price_content_right a.theme_btn , {{WRAPPER}} .price_style.three:hover .price_content_right a.theme_btn ' => 'background: {{VALUE}}!important; border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );

    $this->add_control(
        'ho_box_bg_color',
         [
            'label' => __('Hover Price Box Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active, {{WRAPPER}} .price_style.three:hover ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
            ],
         ]
    );

    $this->add_control(
        'ho_box_border_color',
         [
            'label' => __('Hover Price Box Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_style.three.box_active , {{WRAPPER}} .price_style.three:hover  ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'price_style' => 'style_three'
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
<?php if($settings['price_style'] == 'style_one'): 
    $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
    $nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
<?php // style ?>
<div class="price_style one <?php if($settings['box_active'] == 'yes'): ?>box_active<?php endif; ?>  wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">

    <?php if(!empty($settings['image'])): // icon image ?>
    <div class="image">
        <img src="<?php echo esc_attr($settings['image']['url']); ?>" alt="icon" />
    </div>
    <?php endif; ?>
    <?php if(!empty($settings['titles'])): ?>
    <h3><?php echo wp_kses($settings['titles'] , $allowed_tags); ?></h3>
    <?php endif; ?>
    <?php if(!empty($settings['price'])): ?>
    <span class="price"><?php echo wp_kses($settings['price'] , $allowed_tags); ?></span>
    <?php endif; ?>
    <?php if(!empty($settings['details'])): ?>
    <p><?php echo wp_kses($settings['details'] , $allowed_tags); ?></p>
    <?php endif; ?>
    <div class="features">
        <ul>
            <?php foreach($settings['price_features_repeater'] as  $key => $price_features_repeater): ?>
            <li class="flex mb-3">
                <?php if($price_features_repeater['features_yes_or_no_enable'] == 'yes'): ?>
                <svg class="w-6 h-6 stroke_color" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <?php else: ?>
                <svg class="border_color" xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt"
                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path
                            d="M2380 4794 c-19 -2 -71 -9 -115 -15 -886 -118 -1625 -760 -1861 -1616 -61 -225 -78 -349 -78 -598 -1 -248 12 -351 70 -573 96 -371 283 -704 549 -980 350 -364 776 -585 1290 -669 152 -25 495 -24 650 1 481 77 890 279 1228 605 360 348 586 788 664 1291 24 159 24 481 0 640 -78 503 -304 943 -664 1291 -335 323 -727 519 -1198 600 -115 19 -444 34 -535 23z m355 -324 c463 -44 895 -251 1211 -582 349 -365 534 -827 534 -1330 0 -658 -324 -1250 -885 -1618 -218 -143 -510 -248 -788 -285 -810 -106 -1606 323 -1966 1060 -363 741 -215 1619 369 2204 398 397 968 603 1525 551z" />
                        <path
                            d="M3180 3389 c-14 -5 -159 -143 -322 -307 l-298 -297 -297 297 c-322 320 -321 320 -410 303 -49 -9 -109 -69 -118 -118 -17 -89 -17 -88 303 -410 l297 -297 -195 -198 c-383 -387 -408 -414 -415 -456 -22 -115 84 -215 198 -186 37 10 77 47 339 313 l297 302 303 -302 c263 -261 309 -303 346 -313 60 -16 111 1 155 49 39 44 53 91 43 149 -6 32 -45 75 -314 340 l-307 302 297 293 c163 160 302 302 308 315 19 39 14 118 -10 157 -38 62 -130 91 -200 64z" />
                    </g>
                </svg>
                <?php endif; ?>
                <span><?php echo wp_kses($price_features_repeater['features'] , $allowed_tags); ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="buttom_content">
        <?php if(!empty($settings['button_text'])): ?>
        <a href="<?php echo esc_url($settings['button_link']['url']); ?>" <?php echo esc_attr($target); ?>
            <?php echo esc_attr($nofollow); ?>
            class="theme_btn one"><?php echo esc_attr($settings['button_text']); ?></a>
        <?php endif; ?>
        <?php if(!empty($settings['button_text_two'])): ?>
        <a href="<?php echo esc_url($settings['button_link_two']['url']); ?>" <?php echo esc_attr($target); ?>
            <?php echo esc_attr($nofollow); ?>
            class="theme_btn two"><?php echo esc_attr($settings['button_text_two']); ?></a>
        <?php endif; ?>
    </div>
</div>
<?php // style ?>
<?php elseif($settings['price_style'] == 'style_two'): 
    $target_two = $settings['tw_link']['is_external'] ? ' target="_blank"' : '';
    $nofollow_two = $settings['tw_link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
<?php // style ?>
<div class="price_style two wow animate__ animate__fadeInUp animated animated"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
    <a href="<?php echo esc_url($settings['tw_link']['url']); ?>" <?php echo esc_attr($target_two); ?>
        <?php echo esc_attr($nofollow_two); ?>>
        <span class="title"><?php echo wp_kses($settings['tw_titles'] , $allowed_tags); ?></span>
        <span class="price"><?php echo wp_kses($settings['tw_price'] , $allowed_tags); ?></span>
    </a>
</div>

<?php // style ?>
<?php elseif($settings['price_style'] == 'style_three'): 
    $target_three = $settings['pthre_button_link']['is_external'] ? ' target="_blank"' : '';
    $nofollow_three = $settings['pthre_button_link']['nofollow'] ? ' rel="nofollow"' : '';
    ?>
<?php // style ?>

<div class="price_style three <?php if($settings['box_active'] == 'yes'): ?>box_active<?php endif; ?> wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['pthre_wow_animation']); ?>">

    <div class="d-flex one">


                <div class="in_left">
                    <?php if(!empty($settings['pthre_titles'])): ?>
                    <h3><?php echo wp_kses($settings['pthre_titles'] , $allowed_tags); ?></h3>
                    <?php endif; ?>
                </div>
                <div class="in_right">
                    <?php if(!empty($settings['pthre_descriptions'])): ?>
                    <p><?php echo wp_kses($settings['pthre_descriptions'] , $allowed_tags); ?></p>
                    <?php endif; ?>
                    <div class="features">
                        <ul>
                            <?php foreach($settings['pthre_features_repeater'] as  $key => $pthre_features_repeater): ?>
                            <li class="flex mb-3">
                                <?php if($pthre_features_repeater['pthre_features_yes_or_no_enable'] == 'yes'): ?>
                                <svg class="w-6 h-6 mr-2 stroke_color" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <?php else: ?>
                                <svg class="border_color" xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt"
                                    height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path
                                            d="M2380 4794 c-19 -2 -71 -9 -115 -15 -886 -118 -1625 -760 -1861 -1616 -61 -225 -78 -349 -78 -598 -1 -248 12 -351 70 -573 96 -371 283 -704 549 -980 350 -364 776 -585 1290 -669 152 -25 495 -24 650 1 481 77 890 279 1228 605 360 348 586 788 664 1291 24 159 24 481 0 640 -78 503 -304 943 -664 1291 -335 323 -727 519 -1198 600 -115 19 -444 34 -535 23z m355 -324 c463 -44 895 -251 1211 -582 349 -365 534 -827 534 -1330 0 -658 -324 -1250 -885 -1618 -218 -143 -510 -248 -788 -285 -810 -106 -1606 323 -1966 1060 -363 741 -215 1619 369 2204 398 397 968 603 1525 551z" />
                                        <path
                                            d="M3180 3389 c-14 -5 -159 -143 -322 -307 l-298 -297 -297 297 c-322 320 -321 320 -410 303 -49 -9 -109 -69 -118 -118 -17 -89 -17 -88 303 -410 l297 -297 -195 -198 c-383 -387 -408 -414 -415 -456 -22 -115 84 -215 198 -186 37 10 77 47 339 313 l297 302 303 -302 c263 -261 309 -303 346 -313 60 -16 111 1 155 49 39 44 53 91 43 149 -6 32 -45 75 -314 340 l-307 302 297 293 c163 160 302 302 308 315 19 39 14 118 -10 157 -38 62 -130 91 -200 64z" />
                                    </g>
                                </svg>
                                <?php endif; ?>
                                <span><?php echo wp_kses($pthre_features_repeater['pthre_features'] , $allowed_tags); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

        <div class="price_content_right text-center">
        <?php if(!empty($settings['pthre_button_text'])): ?>
        <a href="<?php echo esc_url($settings['pthre_button_link']['url']); ?>" <?php echo esc_attr($target_three); ?>
            <?php echo esc_attr($nofollow_three); ?>
            class="theme_btn one"><?php echo esc_attr($settings['pthre_button_text']); ?></a>
        <?php endif; ?>           
        <?php if(!empty($settings['pthre_plan_period'])): ?>
            <p><?php echo wp_kses($settings['pthre_plan_period'] , $allowed_tags); ?></p>
        <?php endif; ?>
        </div>

    </div>

   
</div>


<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 