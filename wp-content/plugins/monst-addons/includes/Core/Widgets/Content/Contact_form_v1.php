<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Contact_form_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-contact-form-v1';
    }

    public function get_title()
    {
        return __('Contact Form V1' , 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    

    protected function register_controls() {
		$this->start_controls_section(
			'contact_form',
			[
				'label' => esc_html__( 'Contact Form', 'monst-addons' ),
			]
        );

        
        $this->add_control(
            'contact_form_url',
            [
                'label'   => esc_html__( 'Choose Contact Form', 'monst-addons' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' =>  monst_contact_form_7_query('wpcf7_contact_form'),
            ]
        );
        $this->add_responsive_control(
            'enable_check_box_inline',
            [
              'label' => __( 'Checkbox & Radio Inline Enable', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::SWITCHER,
              'label_on' => __( 'Show', 'monst-addons' ),
              'label_off' => __( 'Hide', 'monst-addons' ),
              'return_value' => 'yes',
              'default' => 'no',
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

        $this->start_controls_section('contact_form_css',
        [ 
            'label' => __('Custom Css', 'monst-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
    
     
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Label Typography', 'monst-addons' ),
                'name' => 'label_typo',
                'selector' => '{{WRAPPER}} label ',
            ]
        );
        $this->add_control(
            'label_color',
             [
                'label' => __('Label Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} label ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
    
        
        $this->add_control(
            'input_margin',
            [
                'label' => esc_html__( 'Input , Textarea , Select  Margin', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea  ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        
         
        $this->add_control(
            'input_padding',
            [
                'label' => esc_html__( 'Input ,  Select  padding', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );

        $this->add_control(
            'textarea_padding',
            [
                'label' => esc_html__( 'Textarea   Select  padding', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} textarea  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
          
          
          
        $this->add_control(
            'input_border_radius',
            [
                'label' => esc_html__( 'Input , Textarea , Select Border Radius', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
    
        $this->add_control(
            'input_border',
            [
                'label' => esc_html__( 'Input , Textarea , Select Border Width', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea  ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'input_border_style',
            [
            'label' => __('Input , Textarea , Select Border Style', 'monst-addons'),
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
                '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea  ' => 'border-style: {{VALUE}}!important;',
            ],
            ]
        );
    
        $this->add_control(
            'input_border_color',
             [
                'label' => __('Input , Textarea , Select Border Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea ' => 'border-color: {{VALUE}}!important;',
                ],
             ]
        );

        $this->add_control(
            'input_color',
             [
                'label' => __('Input , Textarea , Select  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input::placeholder , {{WRAPPER}} select , {{WRAPPER}} textarea::placeholder ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );
        
        
    
        $this->add_control(
            'input_bg',
             [
                'label' => __('Input , Textarea , Select  Bg  Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input , {{WRAPPER}} select , {{WRAPPER}} textarea ' => 'background-color: {{VALUE}}!important;',
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
            'input_height',
            [
                'label' => esc_html__( 'Input , Select  Height', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'step' => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} {{WRAPPER}} input , {{WRAPPER}} select ' => 'height: {{VALUE}}px!important;',
                ],
            ]
        );
    
        $this->add_control(
            'text_area_height',
            [
                'label' => esc_html__( 'Textarea Height', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'step' => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} textarea ' => 'height: {{VALUE}}px!important;',
                ],
            ]
        );
    
        $this->add_control(
            'hr_two',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
                
            ]
        );
        $this->add_control(
            'input_sub_border_color',
             [
                'label' => __('Submit Button Border Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"] ' => 'border-color: {{VALUE}}!important; border-style:solid!important; border-width:1px!important',
                ],
             ]
        );
        $this->add_control(
            'input_sub_bg',
             [
                'label' => __('Submit Button Bg Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"] ' => 'background: {{VALUE}}!important;',
                ],
             ]
        );
       
        $this->add_control(
            'input_sub_color',
             [
                'label' => __('Submit Button Color', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"] ' => 'color: {{VALUE}}!important;',
                ],
             ]
        );

        $this->add_control(
            'submit_btn_width',
            [
                'label' => esc_html__( 'Button Width', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '140px',
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"] ' => 'min-width: {{VALUE}}!important; width:unset!important;',
                ],
            ]
        );

        $this->add_responsive_control(
			'button_align',
			[
				'label' => esc_html__( 'Button Alignment', 'monst-addons' ),
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
                    '{{WRAPPER}} input[type="submit"] ' => 'margin: {{VALUE}}!important;',
                ],
			]
		);
    
    
        $this->end_controls_section();
    
 
	}
    protected function render() {
		$settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
  
		?>


 
<section class="contact_form_box_all <?php if($settings['enable_check_box_inline'] == 'yes'): ?>enable_check_box_inline<?php endif; ?> wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
   <div class="contact_form_shortcode">
        <?php if(!empty($settings['contact_form_url'])): ?>
            <?php echo do_shortcode('[contact-form-7 id="' . $settings['contact_form_url'] . '"]'); ?>
        <?php else: ?>
            <p><?php echo esc_html('There is no contact form please create it' , 'monst-addons'); ?></p>
        <?php endif; ?>
   </div>
</section>


 

           
		<?php 
	}
}

 



