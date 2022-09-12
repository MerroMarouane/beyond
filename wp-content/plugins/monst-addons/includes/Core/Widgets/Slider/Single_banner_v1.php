<?php

namespace  Monstaddons\Core\Widgets\Slider;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Single_banner_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-single-banner-v1';
    }

    public function get_title()
    {
        return __('Single Banner V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['101'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('signle_banner_v1_settings',
        [ 
            'label' => __('Newsteller Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'single_banner_style',
            [
            'label' => __('Banner Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $this->add_control(
            'layout_width',
            [
            'label' => __('Layout', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'container_fluid' => __( 'Full Width', 'monst-addons' ),
                'container' => __( 'Boxed', 'monst-addons' ),
            ],
            'default' => __('container' , 'monst-addons'),
            ]
        );


        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Committed to People Committed <span>to the Future</span>', 'monst-addons'),
             'placeholder' => __('Type your text here', 'monst-addons'),    
          ]
        );
        $this->add_responsive_control(
            'description',
            [
              'label' => __('Decription', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('We are <span><strong>Monst</strong></span>, a Creative', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );


        $this->add_responsive_control(
            'typewrite',
            [
              'label' => __('Type Write Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('"Web Agency", "Social Marketing"', 'monst-addons'),
              'placeholder' => __('"Web Agency", "Social Marketing"', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'description_two',
            [
              'label' => __('Decription', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Helping you maximize operations management with digitization', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
              'condition' => [
                'single_banner_style' => 'style_two'
               ],
            ]
        );
 
         
        $this->add_responsive_control(
            'button_one',
            [
                'label' => __('Button One Text', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Contact Us', 'monst-addons'),
                'placeholder' => __('Btn Label Here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'button_one_link',
            [
            'label' => __('Button One Link', 'monst-addons'),
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
            'button_two',
            [
                'label' => __('Button Two Text', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Contact Us', 'monst-addons'),
                'placeholder' => __('Btn Label Here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'button_two_link',
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
            'pattern_bg',
            [
              'label' => __( 'Pattern Background', 'monst-addons' ),
              'type' => \Elementor\Controls_Manager::MEDIA,
              'default' => [
                'url' => MONST_ADDONS_URL . '/assets/image/pattern.webp',
              ],
              'condition' => [
                'single_banner_style' => 'style_one'
               ],
             
            ] 
        );

        

        
    $this->end_controls_section();

    $this->start_controls_section('banner_csss',
    [ 
        'label' => __('Banner Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'banner_one_backgrounds',
            'label' => esc_html__( 'Banner Background', 'monst-addons' ),
            'types' => [ 'classic', 'gradient', 'video' ],
            'selector' => '{{WRAPPER}} .single_banner',
        ]
    );

    $this->add_control(
        'content_padding',
        [
            'label' => esc_html__( 'Banner Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner   ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
        'image_margin',
        [
            'label' => esc_html__( 'Image Margin', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner .image_box ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .single_banner .banner_box_in .content_box h2 ',
        ]
    );
    
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box h2 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_span_color',
         [
            'label' => __('Title Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box h2 span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'hr_twos',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}}  .single_banner .banner_box_in .content_box  p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box  p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'description_span_color',
         [
            'label' => __('Description Span Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box p span , {{WRAPPER}}  .single_banner .banner_box_in .content_box p span strong ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'hr_three',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Button One Typography', 'monst-addons' ),
            'name' => 'button_typo_one',
            'selector' => '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.one ',
        ]
    );

    $this->add_control(
        'button_one_color',
         [
            'label' => __('Button One Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.one ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'button_one_bg_color',
         [
            'label' => __('Button One Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.one ' => 'background-color: {{VALUE}}!important;',
 
            ],
         ]
    );
    
    $this->add_control(
        'button_one_bor_color',
         [
            'label' => __('Button One Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.one ' => 'border-color: {{VALUE}}!important;'
            ],
         ]
    );
    $this->add_control(
        'button_padding_one',
        [
            'label' => esc_html__( 'Button One Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'button_border_radius_one',
        [
            'label' => esc_html__( 'Button One Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );


    $this->add_control(
        'hr_four',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Button Two Typography', 'monst-addons' ),
            'name' => 'button_typo_two',
            'selector' => '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.default  ',
        ]
    );
    $this->add_control(
        'button_two_color',
         [
            'label' => __('Button Two Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.default ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'button_two_bg_color',
         [
            'label' => __('Button Two Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.default ' => 'background-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'button_two_bor_color',
         [
            'label' => __('Button Two Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .single_banner .banner_box_in .content_box .button_group li a.default ' => 'border-color: {{VALUE}}!important;'
            ],
         ]
    );
    
    $this->add_control(
        'button_padding_two',
        [
            'label' => esc_html__( 'Button Two Padding', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.default ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'button_border_radius_two',
        [
            'label' => esc_html__( 'Button Two Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .single_banner .banner_box_in .content_box .button_group li a.default ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );

$this->end_controls_section();

}
protected function render()
{
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 

$target = $settings['button_one_link']['is_external'] ? ' target="_blank"' : '';
$nofollow = $settings['button_one_link']['nofollow'] ? ' rel="nofollow"' : ''; 

$target_two = $settings['button_two_link']['is_external'] ? ' target="_blank"' : '';
$nofollow_two = $settings['button_two_link']['nofollow'] ? ' rel="nofollow"' : ''; 
?>
<?php if($settings['single_banner_style'] == 'style_one'): ?>
<section class="single_banner one">
<div class="<?php echo esc_attr($settings['layout_width']); ?>">
    <div class="banner_box_in">
      
            <div class="text-center">
                <div class="content_box">
                    <?php if(!empty($settings['title'])): ?>
                    <h2 class="wow animate__animated animate__fadeIn">
                        <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(!empty($settings['description']) || !empty($settings['typewrite'])): ?>
                    <p class="text-blueGray-400 leading-relaxed wow animate__animated animate__fadeIn">
                        <?php echo wp_kses($settings['description'] , $allowed_tags); ?>
                        <span class="typewrite d-inline" data-period="3000"
                            data-type='[<?php echo wp_kses($settings['typewrite'] , $allowed_tags); ?>]'></span>
                    </p>
                    <?php endif; ?>
                    <div>
                        <ul class="button_group">
                            <li>
                                <a class="theme_btn one  wow animate__animated animate__fadeInUp"
                                    href="<?php echo esc_url($settings['button_one_link']['url']) ?>"
                                    <?php echo esc_attr($target);  ?> <?php echo esc_attr($nofollow);  ?>>
                                    <?php echo wp_kses($settings['button_one'] , $allowed_tags); ?>
                                </a>
                            </li>
                            <li>
                                <a class="theme_btn default wow animate__animated animate__fadeInUp hover-up-2"
                                    data-wow-delay=".3s"
                                    href="<?php echo esc_url($settings['button_two_link']['url']) ?>"
                                    <?php echo esc_attr($target_two);  ?> <?php echo esc_attr($nofollow_two); ?>>
                                    <?php echo wp_kses($settings['button_two'] , $allowed_tags); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        
    </div>
    <div class="image_box mx-auto">
        <?php if(!empty($settings['pattern_bg']['url'])): ?><img
            src="<?php echo esc_url($settings['pattern_bg']['url']); ?>" class="pattern_img" alt="patttern image" />
        <?php endif; ?>
        <?php if(!empty($settings['image']['url'])): ?>
        <div class="relative">
            <img class="jump rounded wow animate__animated animate__fadeInUp"
                src="<?php echo esc_url($settings['image']['url']); ?>" alt="" />
        </div>
        <?php endif; ?>
    </div>      </div>
</section>
<?php elseif($settings['single_banner_style'] == 'style_two'): ?>
<section class="single_banner two">
    <div class="<?php echo esc_attr($settings['layout_width']); ?>">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="banner_box_in">
   
                    <div class="text-left">
                        <div class="content_box">
                            <?php if(!empty($settings['title'])): ?>
                            <h2 class="wow animate__animated animate__fadeIn">
                                <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
                            </h2>
                            <?php endif; ?>
                            <?php if(!empty($settings['description']) || !empty($settings['typewrite'])): ?>
                            <p class="wow animate__animated animate__fadeIn">
                                <?php echo wp_kses($settings['description'] , $allowed_tags); ?>
                                <span class="typewrite d-inline" data-period="3000"
                                    data-type='[<?php echo wp_kses($settings['typewrite'] , $allowed_tags); ?>]'></span>
                            </p>
                            <?php endif; ?>
                            <?php if(!empty($settings['description_two'])): ?>
                            <p class="wow desc_two animate__animated animate__fadeIn">
                                <?php echo wp_kses($settings['description_two'] , $allowed_tags); ?>
                            </p>
                            <?php endif; ?>
                            <div>
                                <ul class="button_group">
                                    <li>
                                        <a class="theme_btn one  wow animate__animated animate__fadeInUp"
                                            href="<?php echo esc_url($settings['button_one_link']['url']) ?>"
                                            <?php echo esc_attr($target);  ?> <?php echo esc_attr($nofollow);  ?>>
                                            <?php echo wp_kses($settings['button_one'] , $allowed_tags); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="theme_btn default wow animate__animated animate__fadeInUp hover-up-2"
                                            data-wow-delay=".3s"
                                            href="<?php echo esc_url($settings['button_two_link']['url']) ?>"
                                            <?php echo esc_attr($target_two);  ?>
                                            <?php echo esc_attr($nofollow_two); ?>>
                                            <?php echo wp_kses($settings['button_two'] , $allowed_tags); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
           
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="image_box mx-auto">
                 
                <?php if(!empty($settings['image']['url'])): ?>
                <div class="relative">
                    <img class="wow animate__animated animate__fadeInUp"
                        src="<?php echo esc_url($settings['image']['url']); ?>" alt="" />
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>

</section>
<?php endif; ?>

<?php
    }
}

 