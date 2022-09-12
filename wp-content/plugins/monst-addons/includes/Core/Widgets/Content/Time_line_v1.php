<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Time_line_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-time-line-v1';
    }

    public function get_title()
    {
        return __('Time Line V1', 'monst-addons');
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
        $this->start_controls_section('timeline_v1_settings',
        [ 
            'label' => __('Timeline Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'time_line_style',
            [
            'label' => __('Timeline Styles', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'monst-addons' ),
                'style_two' => __( 'Style Two', 'monst-addons' ),
            ],
            'default' => __('style_one' , 'monst-addons'),
            ]
        );

        $repeater = new \Elementor\Repeater();
   
        $repeater->add_responsive_control(
            'date',
            [
              'label' => __('Authour Name', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __('Alice Bradley', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
            ]
        );
 

        $repeater->add_responsive_control(
            'content',
            [
              'label' => __('Content', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Maecenas nibh purus, pharetra ac felis sed, elementum molestie urna. Nunc at arcu non ipsum auctor lacinia quis quis mi.', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
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
            'time_line_repeater',
            [
                'label' => __('Timeline Repeater Content', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                       'date' =>  __('January 31, 2022', 'monst-addons'),
                       'content' =>  __('Indignation and dislike men who are beguiled every from it pleasure bound some advantage.'),
                    ],
                    [
                       'date' =>  __('August 31, 2021', 'monst-addons'),
                       'content' =>  __('Obligations of business it will frequently occur that repudiated blinded by desire procure him some great pleasure.', 'monst-addons'),
                    ],
                    [
                     
                       'date' =>  __('August 31, 2021', 'monst-addons'),
                       'content' =>  __('Holds in these matters to this principle selection secure other greater trouble undertakes.', 'monst-addons'),
                       
                    ],
                    [
                       'date' =>  __('August 31, 2021', 'monst-addons'),
                       'content' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'monst-addons'),
                    ],
 
                ],
                'title_field' => '{{{ date }}}',
	
            ]
        );
        

    $this->end_controls_section();

    $this->start_controls_section('timeline_css',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Year Typography', 'monst-addons' ),
            'name' => 'year_typo',
            'selector' => '{{WRAPPER}} .timeline li span.date span ',
        ]
    );
    $this->add_control(
        'year_bg_color',
         [
            'label' => __('Year Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .timeline li span.date span  ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'year_color',
         [
            'label' => __('Year Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .timeline li span.date span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
        
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Content Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .timeline li small ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Content Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .timeline li small  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'dot_bor_color',
         [
            'label' => __('Dot Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .timeline li span.date::before ' => 'border-color: {{VALUE}}!important; background: {{VALUE}}!important;', 
                '{{WRAPPER}} .timeline li small:before ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'dot_bg_color',
         [
            'label' => __('Dot Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .timeline li span.date::after ' => 'background: {{VALUE}}!important;',
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
<?php if($settings['time_line_style'] == 'style_one'):  ?>
<?php // style ?>

<ul class="timeline">
<?php foreach($settings['time_line_repeater'] as  $key => $time_line_repeater):?>
    <li>
        <?php if(!empty($time_line_repeater['date'])): ?>
            <span class="date"> <span><?php echo wp_kses($time_line_repeater['date'] , $allowed_tags);  ?></span></span>
        <?php endif; ?>
        <?php if(!empty($time_line_repeater['content'])): ?>
            <small class="text"> <?php echo wp_kses($time_line_repeater['content'] , $allowed_tags);  ?></small>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>
 
<?php // style ?>
<?php endif; ?>
<?php // style ?>


<?php
    }
}
 