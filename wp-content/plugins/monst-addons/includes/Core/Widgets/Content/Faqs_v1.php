<?php


namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Faqs_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-faqs-v1';
    }

    public function get_title()
    {
        return __('Faqs V1', 'monst-addons');
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

        $this->start_controls_section('faq_settings',
        [ 
            'label' => __('Faq Settings', 'monst-addons')
        ]
        );
         
        $repeater = new \Elementor\Repeater();
 
      
   
        $repeater->add_control(
            'faqsheading_text',
            [
                'label' => __('Faqs Heading', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('How do I make a yearly payment? ', 'monst-addons'),
                'placeholder' => __('How do I make a yearly payment?', 'monst-addons'),
            ]
        );

        $repeater->add_control(
            'faq_type_short_des',
           [
              'label' => __('Short Description Enable', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'monst-addons'),
               'label_off' => __('No', 'monst-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );

        $repeater->add_control(
            'short_description',
            [
                'label' => __('Faqs Short Description', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'monst-addons'),
                'placeholder' => __('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'monst-addons'),
                'condition' => [
                    'faq_type_short_des' => 'yes',
                ],
            ]
        );
      
        $repeater->add_control(
            'faqsdescription',
            [
                'label' => __('Faqs Description', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
                'placeholder' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
            ]
        );

        $repeater->add_control(
          'hrfourre',
          [
              'type' => \Elementor\Controls_Manager::DIVIDER, 
             
          ]
      );
 
        $repeater->add_control(
          'faqs_active_tb',
         [
            'label' => __('Faq Active / Deactive', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::SWITCHER,
             'label_on' => __('Yes', 'monst-addons'),
             'label_off' => __('No', 'monst-addons'),
             'return_value' => 'yes',
             'default' => 'no',
         ]
      );
     
    
    $repeater->add_control(
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
    
        
        $this->add_control(
            'faqs_v1_repeater',
            [
                'label' => __('Faqs Box Content', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_icons' =>  __('icon-play', 'monst-addons'),
                       'faqsheading_text' =>  __('How do I make a yearly payment?', 'monst-addons'),
                       'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.'),
                       'faqs_active_tb' => 'yes',
                      ],
                    [
                        'faq_icons' =>  __('icon-play', 'monst-addons'),
                       'faqsheading_text' =>  __('How this technology works?', 'monst-addons'),
                       'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
                       'faqs_active_tb' => 'no',
                      ],
                     [
                        'faq_icons' =>  __('icon-play', 'monst-addons'),
                       'faqsheading_text' =>  __('What is the comunity benefit?', 'monst-addons'),
                       'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
                       'faqs_active_tb' => 'no',
                      ],
                     [
                        'faq_icons' =>  __('icon-play', 'monst-addons'),
                       'faqsheading_text' =>  __('What is the comunity benefit?', 'monst-addons'),
                       'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
                       'faqs_active_tb' => 'no',
                      ],
                     
                    

                ],
                'title_field' => '{{{ faqsheading_text }}}',
	
            ]
        );

   
        $this->end_controls_section();

        $this->start_controls_section('custom_css',
        [ 
            'label' => __('Custom Css', 'monst-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );

        $this->add_control(
            'icon_color',
             [
                'label' => __('Icon  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header .minus_plus ' => 'border-color: {{VALUE}}!important;',
                    '{{WRAPPER}} .faq_section dl dt.faq_header .minus_plus:before , {{WRAPPER}} .faq_section dl dt.faq_header .minus_plus:after ' => 'background: {{VALUE}}!important;',
                ],
             ]
        );
       
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Faq Title Typography', 'monst-addons' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .faq_section dl dt.faq_header ',
            ]
        );
        $this->add_control(
            'title_color',
             [
                'label' => __('Faq Title Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Faq Short Description Typography', 'monst-addons' ),
                'name' => 'desc_short_typo',
                'selector' => '{{WRAPPER}} .faq_section dl dt.faq_header p ',
            ]
        );
        $this->add_control(
            'description_short_color',
             [
                'label' => __('Faq Short Description Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header p ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        
      
        $this->add_control(
            'heading_bg_color',
             [
                'label' => __('Top Content Bg Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header ' => 'background: {{VALUE}}!important;',
                ],
             ]
        ); 

     
 
      $this->add_control(
            'heading_border_style',
            [
            'label' => __('Top Content Border Style', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'none' => __( '', 'monst-addons' ),
                'solid' => __( 'Solid', 'monst-addons' ),
                'dotted' => __( 'Dotted', 'monst-addons' ),
                'dashed' => __( 'Dashed', 'monst-addons' ),
                'double' => __( 'Double', 'monst-addons' ),
            ],
            'default' => __('' , 'monst-addons'),
            'selectors' => [
                '{{WRAPPER}} .faq_section dl dt.faq_header' => 'border-style: {{VALUE}}!important;',
            ],
            ]
        );
        $this->add_control(
            'heading_border_color',
             [
                'label' => __('Top Content Border Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header ' => 'border-color: {{VALUE}}!important;',
                ],
             ]
        );

        $this->add_control(
            'heading_border_width',
            [
                'label' => esc_html__( 'Border Width', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
  
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                    '{{WRAPPER}} .faq_section dl dt.faq_header ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );

        $this->add_control(
			'top_padding',
			[
				'label' => esc_html__( 'Top Content Padding', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .faq_section dl dt.faq_header ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
            'active_icon_color',
             [
                'label' => __('Icon  Active  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_section dl dt.faq_header.active .minus_plus ' => 'border-color: {{VALUE}}!important;',
                    '{{WRAPPER}} .faq_section dl dt.faq_header.active .minus_plus::before ' => 'background: {{VALUE}}!important;',
                ],
             ]
        );

        $this->add_control(
            'active_title_color',
             [
                'label' => __('Faq Active Title Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2 ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        $this->add_control(
            'active_description_color',
             [
                'label' => __('Faq Active Description Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2 ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        $this->add_control(
            'active_top_bg_color',
             [
                'label' => __('Faq Active Background Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2 ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        $this->add_control(
            'active_top_border_color',
             [
                'label' => __('Faq Active Boder Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2 ' => 'color: {{VALUE}}!important;',
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
                'label' => esc_html__( 'Faq Content Typography', 'monst-addons' ),
                'name' => 'faq_content_typo',
                'selector' => '{{WRAPPER}} .faq_section dl dd.accordion-content p ',
            ]
        );

        $this->add_control(
            'faq_content_color',
             [
                'label' => __('Faq Content Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .faq_section dl dd.accordion-content p ' => 'color: {{VALUE}}!important;',
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

<section class="faq_section">
    <div class="block_faq">
        <div class="accordion">
            <dl>
                <?php foreach($settings['faqs_v1_repeater'] as  $key => $faqs_block):?>
                <dt
                    class="faq_header <?php if($faqs_block['faqs_active_tb'] == 'yes'): echo  esc_attr('active'); endif;?>">
                    <?php echo wp_kses($faqs_block['faqsheading_text'] , $allowed_tags);?> <span
                        class="minus_plus"></span>
                        <?php if($faqs_block['faq_type_short_des'] == 'yes'): ?>
                        <p>
                        <?php echo wp_kses($faqs_block['short_description'] , $allowed_tags);?>
                    </p>
                    <?php endif; ?>
                </dt>
                <dd class="accordion-content" <?php if($faqs_block['faqs_active_tb'] == 'yes'):?> style="display:block;"
                    <?php endif;?>>
                    <p>
                        <?php echo wp_kses($faqs_block['faqsdescription'] , $allowed_tags);?>
                    </p>
                </dd>
                <?php endforeach;?>
            </dl>
        </div>
    </div>
</section>


<?php
    }
}