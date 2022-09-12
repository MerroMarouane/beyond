<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Testimonial_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-testimonial-v1';
    }

    public function get_title()
    {
        return __('Testimonial V1' , 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    

    protected function register_controls()
    {

         

        $this->start_controls_section(
            'textimonial_box_content',
            [
                'label' => __('Testimonial Title  / Video', 'monst-addons')
            ]
        );

   
 
        $this->add_control(
            'testimonial_styles',
            [
              'label' => __('Testimonial Styles', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::SELECT,
              'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                
                ],
              'default' => __('style_one' , 'monst-addons'),
              ]
            );
     
      
        $this->add_control(
            'image_enable',
           [
              'label' => __('Image Enable', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'monst-addons'),
               'label_off' => __('No', 'monst-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'image',
            [
                'label' => __('Image', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'image_enable' => 'yes',
                ],
            ]
        );
        
     $this->add_control(
		'name',
		[
		'label'       => esc_html__( 'Name', 'monst-addons' ),
		'type'        => \Elementor\Controls_Manager::TEXT,
        'default' =>  esc_html__( 'Jacob Leonardo' , 'monst-addons'),
    ]);
    $this->add_control(
		'designation',
		[
		'label'       => esc_html__( 'Designation', 'monst-addons' ),
		'type'        => \Elementor\Controls_Manager::TEXT,
        'default' =>  esc_html__( 'Senior Manager of Excel Solution' , 'monst-addons'),
    ]);
    $this->add_control(
		'comment',
		[
		'label'       => esc_html__( 'Comment', 'monst-addons' ),
		'type'        => \Elementor\Controls_Manager::TEXTAREA,
        'default' =>  esc_html__( 'While running an early stage startup everything feels
        hard, that’s why it’s been so nice to have our accounting
        feel easy. We recommed Qetus.' , 'monst-addons'),
    ]);

   
    $this->add_control(
        'rating_one',
        [
            'label' => __( 'Rating', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' =>  esc_html__( 'two' , 'monst-addons'),
            'options' => [
                'one' => __('1', 'monst-addons'),
                'two' => __('2', 'monst-addons'),
                'three' => __('3', 'monst-addons'),
                'four' => __('4', 'monst-addons'),
                'five' => __('5', 'monst-addons'),
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
    $this->start_controls_section('testimonial_css',
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
            'selector' => '{{WRAPPER}} .testimonial_outer.one .authour_details .details h2 ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one .authour_details .details h2 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Designation Typography', 'monst-addons' ),
            'name' => 'design_typo',
            'selector' => '{{WRAPPER}} .testimonial_outer.one .authour_details .details span ',
        ]
    );
    $this->add_control(
        'designation_color',
         [
            'label' => __('Designation Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one .authour_details .details span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .testimonial_outer.one .comment ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one .comment ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
 
    $this->add_control(
        'rating_color',
        [
            'label' => esc_html__( 'Rating Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one .rating ul li span ' => 'color: {{VALUE}}!important;',
            ],
        ]
    );

    $this->add_control(
        'testimonial_box_color',
        [
            'label' => esc_html__( 'Testimonial Box Bg Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one  ' => 'background: {{VALUE}}!important;',
            ],
        ]
    );
    $this->add_control(
        'testimonial_box_bor_color',
        [
            'label' => esc_html__( 'Testimonial Box Border Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_outer.one  ' => 'border-color: {{VALUE}}!important;',
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
<div class="testimonial_outer one  wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
        <div class="authour_details <?php if($settings['image_enable'] == 'yes'): ?> image_yes <?php endif; ?>">
            <?php if($settings['image_enable'] == 'yes'): ?>
            <div class="image">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="image" />
            </div>
            <?php endif; ?>
            <div class="details">
            <?php if(!empty($settings['name'])): ?>
                <h2><?php echo esc_attr($settings['name']); ?></h2>
                <?php endif; ?>
                <?php if(!empty($settings['designation'])): ?>
                <span><?php echo esc_attr($settings['designation']); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($settings['comment'])): ?>
        <div class="comment">
            <?php echo wp_kses($settings['comment'] , $allowed_tags); ?>
        </div>
        <?php endif; ?>
        <div class="rating">
            <ul>
                <?php if($settings['rating_one'] == 'one'): ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span
                        class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span
                        class="fa fa-star empty"></span></li>
                <?php elseif($settings['rating_one'] == 'two'): ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span
                        class="fa fa-star empty"></span></li>
                <?php elseif($settings['rating_one'] == 'three'): ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span
                        class="fa fa-star empty"></span></li>
                <?php elseif($settings['rating_one'] == 'four'): ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star empty"></span></li>
                <?php elseif($settings['rating_one'] == 'five'): ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span></li>
                <?php else: ?>
                <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span
                        class="fa fa-star fill"></span></li>
                <?php endif; ?>
            </ul>
        </div>
</div>

<?php
    }
}


                