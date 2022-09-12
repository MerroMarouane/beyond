<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Contact_box_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-contact-box-v1';
    }

    public function get_title()
    {
        return __('Contact Box V1', 'monst-addons');
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
        $this->start_controls_section('contact_settings',
        [ 
            'label' => __('Contact  Settings', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'contact_box_style',
            [
            'label' => __('Contact Box Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section('contact_content',
        [ 
            'label' => __('Contact Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'condition' => [
                'contact_box_style' => 'style_one'
            ],
        ]
        );
       
       
        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXT,
             'default' => __('Address', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),   
             
          ]
        );
        $this->add_responsive_control(
            'icon_enable',
            [
              'label' => __( 'Icon Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
            ]
        );
        
        $this->add_responsive_control(
            'address',
            [
               'label' => __('Address', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('5171 W Campbell Ave undefined Kent, Utah 53127 United States', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),   
            ]
        ); 
        $this->add_responsive_control(
            'phone',
            [
               'label' => __('Phone', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('(+91)-540-025-124553', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),   
               
            ]
        ); 
        $this->add_responsive_control(
            'email',
            [
               'label' => __('Mail', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('sale@Nest.com', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),   
               
            ]
        ); 
        $this->add_responsive_control(
            'timing',
            [
               'label' => __('Timing', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('10:00 - 18:00, Mon - Sat', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),   
             
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


    $this->start_controls_section('contact_content_v2',
    [ 
        'label' => __('Contact Content', 'monst-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'contact_box_style' => 'style_two'
        ],
    ]
    );

    $this->add_control(
        'contact_type',
        [
        'label' => __('Contact Type', 'monst-addons'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'address' => __( 'Address', 'monst-addons' ),
            'mail' => __( 'Mail', 'monst-addons' ),
            'phone' => __( 'Phone', 'monst-addons' ),
            'timing' => __( 'Timing', 'monst-addons' ),
        ],
        'default' => __('address' , 'monst-addons'),
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
        'label' => __( 'Icon Image', 'monst-addons' ),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => MONST_ADDONS_URL . '/assets/image/map-marker.svg',
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
      'add_title',
      [
         'label' => __('Title', 'monst-addons'),
         'type' => \Elementor\Controls_Manager::TEXT,
         'default' => __('Locate Us', 'monst-addons'),
         'placeholder' => __('Type your text here', 'monst-addons'),   
         'condition' => [
            'contact_type' => 'address'
        ],
      ]
    );
    
    $this->add_responsive_control(
        'add_address',
        [
           'label' => __('Address', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('5171 W Campbell Ave undefined Kent, Utah 53127 United States', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'address'
        ],
        ]
    ); 

    $this->add_responsive_control(
        'add_address_two',
        [
           'label' => __('Address', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('5171 W Campbell Ave undefined Kent, Utah 53127 United States', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'address'
            ],
        ]
    ); 
 
    $this->add_responsive_control(
      'pho_title',
      [
         'label' => __('Title', 'monst-addons'),
         'type' => \Elementor\Controls_Manager::TEXT,
         'default' => __('Call Us', 'monst-addons'),
         'placeholder' => __('Type your text here', 'monst-addons'),   
         'condition' => [
            'contact_type' => 'phone'
        ],
      ]
    );


    $this->add_responsive_control(
        'pho_phone',
        [
           'label' => __('Phone', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('(+91)-540-025-124553', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'phone'
        ],
        ]
    ); 
    $this->add_responsive_control(
        'pho_phone_two',
        [
           'label' => __('Phone', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('(+91)-540-025-124553', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'phone'
        ],
        ]
    ); 


   
   
    $this->add_responsive_control(
      'mal_title',
      [
         'label' => __('Title', 'monst-addons'),
         'type' => \Elementor\Controls_Manager::TEXT,
         'default' => __('Mail Us', 'monst-addons'),
         'placeholder' => __('Type your text here', 'monst-addons'),   
         'condition' => [
            'contact_type' => 'mail'
        ],
      ]
    );
 
    $this->add_responsive_control(
        'mal_email',
        [
           'label' => __('Mail', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('sale@Nest.com', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'mail'
        ],
        ]
    ); 
    $this->add_responsive_control(
        'mal_email_two',
        [
           'label' => __('Mail', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('sale@Nest.com', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'mail'
        ],
        ]
    ); 
 
    
   
    $this->add_responsive_control(
      'tim_title',
      [
         'label' => __('Title', 'monst-addons'),
         'type' => \Elementor\Controls_Manager::TEXT,
         'default' => __('Timing', 'monst-addons'),
         'placeholder' => __('Type your text here', 'monst-addons'),   
         'condition' => [
            'contact_type' => 'timing'
        ],
      ]
    );


    $this->add_responsive_control(
        'tim_timing',
        [
           'label' => __('Timing', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('10:00 - 18:00, Mon - Sat', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'timing'
        ],
        ]
    ); 
    $this->add_responsive_control(
        'tim_timing_two',
        [
           'label' => __('Timing', 'monst-addons'),
           'type' => \Elementor\Controls_Manager::TEXTAREA,
           'default' => __('10:00 - 18:00, Mon - Sat', 'monst-addons'),
           'placeholder' => __('Type your text here', 'monst-addons'),   
           'condition' => [
            'contact_type' => 'timing'
        ],
        ]
    ); 

    $this->add_control(
        'ty_wow_animation',
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

    $this->start_controls_section('contact_box_one_css',
    [ 
        'label' => __('Title Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .contact_box.one .title h2 , {{WRAPPER}} .contact_box.two .contact-infor h2 ',
        
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .contact_box.one .title h2 , {{WRAPPER}} .contact_box.two .contact-infor h2 ' => 'color: {{VALUE}}!important;',
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
                '{{WRAPPER}} .contact_box.one .title h2 , {{WRAPPER}} .contact_box.two .contact-infor h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Other Content Typography', 'monst-addons' ),
            'name' => 'other_typo',
            'selector' => '{{WRAPPER}} .contact_box.one .contact-infor a , {{WRAPPER}} .contact_box.one .contact-infor span ,  {{WRAPPER}}
            .contact_box.two .contact-infor span , {{WRAPPER}} .contact_box.two .contact-infor a ',
          
        ]
    );
    $this->add_control(
        'other_color',
         [
            'label' => __('Other Content Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .contact_box.one .contact-infor a , {{WRAPPER}} .contact_box.one .contact-infor span ,  {{WRAPPER}}
                .contact_box.two .contact-infor span , {{WRAPPER}} .contact_box.two .contact-infor a ' => 'color: {{VALUE}}!important;',
            ],
            
         ]
    );
    $this->add_control(
        'other_margin',
        [
            'label' => esc_html__( 'Other Content Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .contact_box.one .contact-infor a , {{WRAPPER}} .contact_box.one .contact-infor span ,  {{WRAPPER}}
                .contact_box.two .contact-infor span , {{WRAPPER}} .contact_box.two .contact-infor a ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
<?php if($settings['contact_box_style'] == 'style_one'): ?>
<div class="contact_box one wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
    <div class="title">
        <h2><?php echo wp_kses($settings['title'] , $allowed_tags); ?></h2>
    </div>
    <div class="contact-infor">
        <?php if($settings['icon_enable'] == 'yes'): ?>
        <i class="fa fa-map-marker"></i>
        <?php endif; ?>
        <?php if(!empty($settings['address'])): ?>
        <span><?php echo wp_kses($settings['address'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>

    <div class="contact-infor">
        <?php if($settings['icon_enable'] == 'yes'): ?>
        <i class="fa fa-phone"></i>
        <?php endif; ?>
        <?php if(!empty($settings['phone'])): ?>
        <a href="tel:<?php echo esc_attr($settings['phone']); ?>"><?php echo esc_attr($settings['phone']); ?></a>
        <?php endif; ?>
    </div>

    <div class="contact-infor">
        <?php if($settings['icon_enable'] == 'yes'): ?>
        <i class="fa fa-envelope"></i>
        <?php endif; ?>
        <?php if(!empty($settings['email'])): ?>
        <a href="mailto:<?php echo esc_attr($settings['email']); ?>"><?php echo esc_attr($settings['email']); ?></a>
        <?php endif; ?>
    </div>

    <div class="contact-infor">
        <?php if($settings['icon_enable'] == 'yes'): ?>
        <i class="fa fa-clock"></i>
        <?php endif; ?>
        <?php if(!empty($settings['timing'])): ?>
        <span><?php echo wp_kses($settings['timing'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>
</div>
<?php elseif($settings['contact_box_style'] == 'style_two'): ?>
<div class="contact_box two wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['ty_wow_animation']); ?>">
    <?php if($settings['contact_type'] == 'address'): // address ?>
    <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
    <div class="image">
        <?php if(!empty($settings['image_font'])): // icon image ?>
        <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
    </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
    <div class="image">
        <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
    </div>
    <?php endif; // icon style ?>
    <div class="contact-infor">
        <?php if(!empty($settings['add_title'])): ?>
        <div class="title">
            <h2><?php echo wp_kses($settings['add_title'] , $allowed_tags); ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['add_address'])): ?>
        <span><?php echo wp_kses($settings['add_address'] , $allowed_tags); ?></span>
        <?php endif; ?>
        <?php if(!empty($settings['add_address_two'])): ?>
        <span><?php echo wp_kses($settings['add_address_two'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>

    <?php elseif($settings['contact_type'] == 'phone'): // phone ?>
        <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
    <div class="image">
        <?php if(!empty($settings['image_font'])): // icon image ?>
        <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
    </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
    <div class="image">
        <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
    </div>
    <?php endif; // icon style ?>
    <div class="contact-infor">
        <?php if(!empty($settings['pho_title'])): ?>
        <div class="title">
            <h2><?php echo wp_kses($settings['pho_title'] , $allowed_tags); ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['pho_phone'])): ?>
        <a
            href="tel:<?php echo esc_attr($settings['pho_phone']); ?>"><?php echo wp_kses($settings['pho_phone'] , $allowed_tags); ?></a>
        <?php endif; ?>
        <?php if(!empty($settings['pho_phone_two'])): ?>
        <a
            href="tel:<?php echo esc_attr($settings['pho_phone_two']); ?>"><?php echo wp_kses($settings['pho_phone_two'] , $allowed_tags); ?></a>
        <?php endif; ?>
    </div>


    <?php elseif($settings['contact_type'] == 'mail'): // mail ?>
        <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
    <div class="image">
        <?php if(!empty($settings['image_font'])): // icon image ?>
        <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
    </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
    <div class="image">
        <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
    </div>
    <?php endif; // icon style ?>
    <div class="contact-infor">
        <?php if(!empty($settings['mal_title'])): ?>
        <div class="title">
            <h2><?php echo wp_kses($settings['mal_title'] , $allowed_tags); ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['mal_email'])): ?>
        <a
            href="mailto:<?php echo esc_attr($settings['mal_email']); ?>"><?php echo wp_kses($settings['mal_email'] , $allowed_tags); ?></a>
        <?php endif; ?>
        <?php if(!empty($settings['mal_email_two'])): ?>
        <a
            href="mailto:<?php echo esc_attr($settings['mal_email_two']); ?>"><?php echo wp_kses($settings['mal_email_two'] , $allowed_tags); ?></a>
        <?php endif; ?>
    </div>



    <?php elseif($settings['contact_type'] == 'timing'): // mail ?>
        <?php if($settings['icon_style'] == 'type_image'): // icon style ?>
    <div class="image">
        <?php if(!empty($settings['image_font'])): // icon image ?>
        <img src="<?php echo esc_attr($settings['image_font']['url']); ?>" alt="icon" />
        <?php endif; // icon image ?>
    </div>
    <?php elseif($settings['icon_style'] == 'type_icon'): // icon style ?>
    <div class="image">
        <i class="fa fab fas <?php echo esc_attr($settings['icon_fonts']); ?>"></i>
    </div>
    <?php endif; // icon style ?>
    <div class="contact-infor">
        <?php if(!empty($settings['tim_title'])): ?>
        <div class="title">
            <h2><?php echo wp_kses($settings['tim_title'] , $allowed_tags); ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['tim_timing'])): ?>
        <span><?php echo wp_kses($settings['tim_timing'] , $allowed_tags); ?></span>
        <?php endif; ?>
        <?php if(!empty($settings['tim_timing_two'])): ?>
        <span><?php echo wp_kses($settings['tim_timing_two'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>

    <?php endif; // phone ?>


</div>
<?php endif; ?>



<?php
    }
}
 