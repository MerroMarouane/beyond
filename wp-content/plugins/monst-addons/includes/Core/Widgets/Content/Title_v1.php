<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Title_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-title-v1';
    }

    public function get_title()
    {
        return __('Title V1', 'monst-addons');
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
        $this->start_controls_section('title_v1_settings',
        [ 
            'label' => __('Title Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'title_style',
            [
            'label' => __('Title Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'sm_title',
            [
               'label' => __('Sub Title', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Our performance', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
        );
         
        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Your Partner for e-commerce grocery solution', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        $this->add_responsive_control(
            'description',
            [
              'label' => __('Description', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Pitatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
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

    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
    ?>
    <?php // style ?>
    <?php if($settings['title_style'] == 'style_one'):  ?>
    <?php // style ?>
        <div class="section_title type_one">
            <?php if(!empty($settings['sm_title'])): ?>
                <h4 class="text-brand"> <?php echo wp_kses($settings['sm_title'] , $allowed_tags);  ?></h4>
            <?php endif; ?>
            <?php if(!empty($settings['title'])): ?>
                <div class="title_whole">
                    <h1 class="title"> <?php echo wp_kses($settings['title'] , $allowed_tags);  ?>  </h1>
                    
                </div>
            <?php endif; ?>
            <?php if(!empty($settings['description'])): ?>
                <p> <?php echo wp_kses($settings['description'] , $allowed_tags);  ?></p>
            <?php endif; ?>
        </div>
    <?php // style ?>
    <?php endif; ?>
    <?php // style ?>


    <?php
    }
}

 

