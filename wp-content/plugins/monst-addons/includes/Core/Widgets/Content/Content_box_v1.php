<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Content_box_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-content-box-v1';
    }

    public function get_title()
    {
        return __('Content Box V1', 'monst-addons');
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
        $this->start_controls_section('content_box_v1_settings',
        [ 
            'label' => __('Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'content_box_style',
            [
            'label' => __('Content Box Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
               
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );
 
        $this->add_responsive_control(
            'image',
            [
            'label' => __( 'Image', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => MONST_ADDONS_URL . '/assets/image/online-shopping.png',
            ],
            ] 
        );
       
        $this->add_responsive_control(
            'highlight_text',
            [
              'label' => __('Highlight Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Various Analysis Options', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
        $this->add_responsive_control(
            'title',
            [
               'label' => __('Title', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Techno Provides Realtime Best Data Solutions.', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );
      
        $this->add_responsive_control(
            'link',
            [
                'label' => __('Link', 'monst-addons'),
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

    $this->start_controls_section('content_box_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_control(
        'img_height',
        [
            'label' => __( 'Image Height', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 10000,
            'step' => 1,
            'default' => 320,
            'selectors' => [
                '{{WRAPPER}} .content_boxed.one .image ' => 'height: {{VALUE}}px',
            ],
        ]
    );

    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content h2 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content p',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .newsletter .newsletter-inner .newsletter-content p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'background',
            'label' => esc_html__( 'Background', 'monst-addons' ),
            'types' => [ 'classic', 'gradient', 'video' ],
            'selector' => '{{WRAPPER}} .newsletter .newsletter-inner',
        ]
    );
    $this->add_control(
        'border_radius',
        [
            'label' => esc_html__( 'Border Radius', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .newsletter .newsletter-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
  

    $this->end_controls_section();

    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
        $target = $settings['link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
     ?>

<?php // style ?>
<?php if($settings['content_box_style'] == 'style_one'):  ?>
<?php // style ?>

<div class="content_boxed one wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
   
  <div class="content_box">
    <?php if(!empty($settings['highlight_text'])): ?>
            <p><?php echo wp_kses($settings['highlight_text'] , $allowed_tags); ?></p>
        <?php endif; ?>
    <?php if(!empty($settings['title'])): ?>
        <h3 class="font-heading">  
            <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>> 
                <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
            </a>
        </h3>
    <?php endif; ?>
      
    </div>
    <?php if(!empty($settings['image'])): //  image ?>
    <div class="image">
        <img src="<?php echo esc_attr($settings['image']['url']); ?>" alt="icon" />
    </div>
    <?php endif; // icon image ?>
</div>

 

<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 