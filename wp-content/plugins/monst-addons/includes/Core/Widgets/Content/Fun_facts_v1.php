<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Fun_facts_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-fun-facts-v1';
    }

    public function get_title()
    {
        return __('Funfacts V1', 'monst-addons');
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
        $this->start_controls_section('funfacts_content_v1_settings',
        [ 
            'label' => __('Funfacts Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'funfacts_style',
            [
            'label' => __('Funfacts Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
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
            'funfacts_number',
            [
              'label' => __('Count', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __('545', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'funfacts_symbol',
            [
              'label' => __('Symbol', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __('+', 'monst-addons'),
              'placeholder' => __('Type your Symbols here', 'monst-addons'),
            ]
        );


        $this->add_responsive_control(
          'title',
          [
             'label' => __('Title', 'monst-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('Annual Partner', 'monst-addons'),
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

    $this->start_controls_section('custom_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Number Typography', 'monst-addons' ),
            'name' => 'number_typo',
            'selector' => '{{WRAPPER}} .fun_box_one .content_box span ',
        ]
    );
    $this->add_control(
        'number_color',
         [
            'label' => __('Number Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .fun_box_one .content_box span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Title Typography', 'monst-addons' ),
            'name' => 'tit_typo',
            'selector' => '{{WRAPPER}} .fun_box_one .content_box p',
        ]
    );
    $this->add_control(
        'tit_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .fun_box_one .content_box  p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'icon_bg_color',
         [
            'label' => __('Icon Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .fun_box_one .icon_bx  ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'icon_color',
         [
            'label' => __('Icon Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .fun_box_one .icon_bx i' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'border_radius',
        [
            'label' => esc_html__( 'Icon Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .fun_box_one .icon_bx ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
<?php if($settings['funfacts_style'] == 'style_one'):  ?>
<?php // style ?>


 
<div class="fun_box_one wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">

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
        <?php if(!empty($settings['funfacts_symbol'])): ?>    
            <span class="funfacts_symbol"><?php echo esc_attr($settings['funfacts_symbol']); ?></span>
        <?php endif; ?>
        <?php if(!empty($settings['funfacts_number'])): ?>
            <span class="count"> <?php echo esc_attr($settings['funfacts_number']); ?></span>
        <?php endif; ?>
        <?php if(!empty($settings['title'])): ?>
            <p class="title"><?php echo wp_kses($settings['title'] , $allowed_tags); ?> </p>
        <?php endif; ?>
    </div>
</div>

    



<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}

 