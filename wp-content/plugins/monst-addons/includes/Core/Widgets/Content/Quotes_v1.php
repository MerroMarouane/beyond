<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Quotes_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-quotes-v1';
    }

    public function get_title()
    {
        return __('Quotes V1', 'monst-addons');
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
        $this->start_controls_section('quotes_v1_settings',
        [ 
            'label' => __('Quotes Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'quotes_style',
            [
            'label' => __('Quotes Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );


  

        $this->add_responsive_control(
            'icon_image',
            [
            'label' => __( 'Icon Image', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => MONST_ADDONS_URL . '/assets/image/quote.svg',
            ],
            'condition' => [
                'quotes_style' => 'style_two'
            ], 
            ] 
        );
      
      
        $this->add_responsive_control(
            'content',
            [
              'label' => __('Content', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Maecenas nibh purus, pharetra ac felis sed, elementum molestie urna. Nunc at arcu non ipsum auctor lacinia quis quis mi.', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'authour_name',
            [
              'label' => __('Authour Name', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __('Alice Bradley', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );

        $this->add_responsive_control(
            'about_authour',
            [
              'label' => __('About Authour', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __(' CEO, Co Founders', 'monst-addons'),
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

    $this->start_controls_section('icon_box_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Content Typography', 'monst-addons' ),
            'name' => 'content_typo',
            'selector' => '{{WRAPPER}} .block_qoute blockquote p ',
        ]
    );
    $this->add_control(
        'content_color',
         [
            'label' => __('Content Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_qoute blockquote p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Authour Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .block_qoute .authour_name h6 ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Authour Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_qoute .authour_name h6 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Designation Typography', 'monst-addons' ),
            'name' => 'designation_typo',
            'selector' => '{{WRAPPER}} .block_qoute .authour_name span ',
        ]
    );
    $this->add_control(
        'designation_color',
         [
            'label' => __('Designation Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_qoute .authour_name span  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'border_color',
         [
            'label' => __('Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_qoute.one blockquote ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'quotes_style' => 'style_one'
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
<?php if($settings['quotes_style'] == 'style_one'):  ?>
<?php // style ?>
<div class="block_qoute one">
<blockquote>
    <?php if(!empty($settings['content'])): ?>
    <p>
   <?php echo wp_kses($settings['content'] , $allowed_tags); ?>
    </p>
    <?php endif; ?>
</blockquote>
<div class="authour_name">
        <?php if(!empty($settings['authour_name'])): ?>
        <h6>    <?php echo wp_kses($settings['authour_name'] , $allowed_tags); ?></h6>
        <?php endif; ?>
        <?php if(!empty($settings['about_authour'])): ?>
        <span>  <?php echo wp_kses($settings['about_authour'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>
</div>
<?php // style ?>
<?php elseif($settings['quotes_style'] == 'style_two'):  ?>
<?php // style ?>
<div class="block_qoute two">
<blockquote>
    <?php if(!empty($settings['icon_image'])): // icon image ?>
    <img src="<?php echo esc_attr($settings['icon_image']['url']); ?>" alt="icon" />
    <?php endif; // icon image ?>
 
    <?php if(!empty($settings['content'])): ?>
    <p>
   <?php echo wp_kses($settings['content'] , $allowed_tags); ?>
    </p>
    <?php endif; ?>
</blockquote>
    <div class="authour_name">
        <?php if(!empty($settings['authour_name'])): ?>
        <h6>    <?php echo wp_kses($settings['authour_name'] , $allowed_tags); ?></h6>
        <?php endif; ?>
        <?php if(!empty($settings['about_authour'])): ?>
        <span>  <?php echo wp_kses($settings['about_authour'] , $allowed_tags); ?></span>
        <?php endif; ?>
    </div>

</div>
<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 