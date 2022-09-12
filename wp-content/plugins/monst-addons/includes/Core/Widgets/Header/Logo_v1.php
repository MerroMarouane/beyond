<?php

namespace  Monstaddons\Core\Widgets\Header;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Logo_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-logo-v1';
    }

    public function get_title()
    {
        return __('Logo V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['100'];
    }

    protected function register_controls(){
       

        $this->start_controls_section('logo_content',
        [ 
            'label' => __('Logo Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );  
    

        $this->add_control(
            'logo_default',
        [
            'label' => __( 'Logo Default', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => MONST_ADDONS_URL . '/assets/image/monst-logo.svg',
            ],
        ] 
       );
   

       $this->add_control(
        'logo_width',
        [
            'label' => __( 'Logo Width', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( '170px', 'monst-addons' ),
            'placeholder' => __( 'Enter logo width here in (px , rem and em )', 'monst-addons' ),
            'selectors' => [
                '{{WRAPPER}} .logo_box img' => 'width: {{VALUE}}!important;',
            ],
        ]
        );
        $this->add_control(
            'margin_logo',
            [
                'label' => __( 'Margin', 'monst-monst' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .logo_box img ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'custom_link_enable',
            [
                'label' => __('Custom Link show / hide', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'monst-addons'),
                'label_off' => __('No', 'monst-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
    
    
        $this->add_control(
            'logo_link',
            [
                'label' => __( 'Link', 'monst-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'monst-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'custom_link_enable' => 'yes'
                ],
            ]
        );

        
    $this->end_controls_section();
} 
    protected function render()
    {
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
    $link = '';
    if($settings['custom_link_enable'] == 'yes'):
        $link = $settings['logo_link']['url'];
        $targe_logo = $settings['logo_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow_logo = $settings['logo_link']['nofollow'] ? ' rel="nofollow"' : '';
    else:
        $link = home_url();
    endif;
    ?>

<div class="logo_box">
                <a href="<?php echo esc_url($link); ?>"
                    <?php if($settings['custom_link_enable'] == 'yes'):  echo esc_attr($targe_logo); echo esc_attr($nofollow_logo);  endif; ?>
                    class="logo navbar_brand">
                    <img src="<?php echo esc_url($settings['logo_default']['url']); ?>"
                        alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default">
                </a>
            </div>
 
 


    <?php
    }
}