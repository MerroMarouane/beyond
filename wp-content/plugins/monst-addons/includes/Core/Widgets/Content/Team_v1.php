<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Team_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-team-v1';
    }

    public function get_title()
    {
        return __('Team Card V1 ' , 'monst-addons');
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
            'team_content',
            [
                'label' => __('Team Content', 'monst-addons')
            ]
        );

        $this->add_control(
            'team_styles',
            [
                'label' => __('Team Styles', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one' => __( 'Style One', 'monst-addons' ),
                    'style_two' => __( 'Style Two', 'monst-addons' ),
                    'style_three' => __( 'Style Three', 'monst-addons' ),
			   	],
                'default' => __('style_one' , 'monst-addons'),
            ]
        );

      $this->add_control(
          'member_image',
          [
              'label' => __('Member Image', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::MEDIA,
              'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
               ],
          ]
      );
      
     
  

    $this->add_control(
        'member_name',
        [
          'label'       => esc_html__( 'Member name', 'monst-addons' ),
          'type'        => \Elementor\Controls_Manager::TEXT,
          'default' =>  esc_html__( 'Amelia Margaret' , 'monst-addons'),
        ]
    );
    $this->add_control(
        'member_designation',
        [
        'label'       => esc_html__( 'Member Designation', 'monst-addons' ),
        'type'        => \Elementor\Controls_Manager::TEXT,
        'default' =>  esc_html__( 'Director' , 'monst-addons'),
        ]
    );
    $this->add_control(
        'comment',
        [
        'label'       => esc_html__( 'comment', 'monst-addons' ),
        'type'        => \Elementor\Controls_Manager::TEXT,
        'default' =>  esc_html__( 'Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin magna in hendrerit pulvinar. Vestibulum non quam velit.' , 'monst-addons'),
        'condition' => [
            'team_styles' => 'style_three',
        ],
        ]
    );

     
    $this->add_control(
        'button_link',
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


    $this->add_responsive_control(
        'social_media_enable',
        [
          'label' => __( 'Media Enable', 'monst-addons' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => __( 'Show', 'monst-addons' ),
          'label_off' => __( 'Hide', 'monst-addons' ),
          'return_value' => 'yes',
          'default' => 'no',
        ]
    );
    $repeater = new \Elementor\Repeater();
    $repeater->add_control(
        'media_text',
        [
          'label'       => esc_html__( 'Media name', 'monst-addons' ),
          'type'        => \Elementor\Controls_Manager::TEXT,
          'default' =>  esc_html__( 'fa fa-facebook' , 'monst-addons'),
        ]
    );
    $repeater->add_control(
        'media_link',
        [
        'label'       => esc_html__( 'Media Link', 'monst-addons' ),
        'type'        => \Elementor\Controls_Manager::TEXT,
        'default' =>  esc_html__( '#' , 'monst-addons'),
        ]
    );

    $this->add_control(
        'social_media_repeater',
        [
            'label' => __('Social media Repeater', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                  'media_text' => __('fab fa-facebook', 'monst-addons'),
                  'media_link' =>  __('#', 'monst-addons'),
          
                ],
                [
                  'media_text' => __('fab fa-twitter', 'monst-addons'),
                  'media_link' =>  __('#', 'monst-addons'),
         
                 ],
                 [
                  'media_text' => __('fab fa-skype', 'monst-addons'),
                  'media_link' =>  __('#', 'monst-addons'),
                 ],
                 [
                    'media_text' => __('fab fa-instagram', 'monst-addons'),
                    'media_link' =>  __('#', 'monst-addons'),
                   ]
                
            ],
            'title_field' => '{{{ media_text }}}',
            'condition' => [
                'social_media_enable' => 'yes',
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

    
    $this->start_controls_section('team_css',
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
            'selector' => '{{WRAPPER}} .team_box .team-card .content h4 a , {{WRAPPER}} .team_box .team-card.three .authour_details .details h2 ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card .content h4 a  , {{WRAPPER}} .team_box .team-card.three .authour_details .details h2 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_hover_color',
         [
            'label' => __('Title Hover Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card .content h4 a:hover  , {{WRAPPER}} .team_box .team-card.three .authour_details .details h2:hover a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Designation Typography', 'monst-addons' ),
            'name' => 'designation_typo',
            'selector' => '{{WRAPPER}} .team_box .team-card .content  span  , {{WRAPPER}} .team_box .team-card.three .authour_details .details span ',
        ]
    );
    $this->add_control(
        'designation_color',
         [
            'label' => __('Designation Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .team_box .team-card .content  span , {{WRAPPER}} .team_box .team-card.three .authour_details .details span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'background_color',
         [
            'label' => __('Team Box Background Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .team_box .team-card ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [
                'team_styles' => ['style_two' , 'style_three'],
            ],
         ]
    );
    $this->add_control(
        'border_color',
         [
            'label' => __('Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .team_box .team-card ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'team_styles' => ['style_two' , 'style_three'],
            ],
         ]
    );
    $this->add_control(
        '_hoborder_color',
         [
            'label' => __('Hover Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .team_box .team-card:hover ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'team_styles' => ['style_two' , 'style_three'],
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_boxhshadow_color',
            'label' => esc_html__( 'Team Box Shadow', 'monst-addons' ),
            'selector' => '{{WRAPPER}}  .team_box .team-card   ',
            'condition' => [
                'team_styles' => ['style_two' , 'style_three'],
            ],
        ]
    );

    
    $this->add_control(
        'hr_one',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
            'condition' => [
                'social_media_enable' => 'yes',
            ],
        ]
    );
 

    $this->add_control(
        'so_med_color',
         [
            'label' => __('Media Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .social-network a:hover ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'social_media_enable' => 'yes',
            ],
         ]
    );
    
    $this->add_control(
        'so_med_hover_color',
         [
            'label' => __('Media Hover Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .social-network a:hover ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'social_media_enable' => 'yes',
            ],
         ]
    );
    
  

    $this->end_controls_section();
      
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $allowed_tags = wp_kses_allowed_html('post');
        $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : ''; 
?>



        <div class="team_box   wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
        <?php if($settings['team_styles'] == 'style_one'):?>
            <?php // team one end   ?>

            <div class="team-card one">
                <?php if(!empty($settings['member_image']['url'])): ?>  
                    <div class="image">
                         <img src="<?php echo esc_attr($settings['member_image']['url']); ?>" alt="team image" />
                    </div>
                <?php endif; ?>
                <div class="content text-center">
                    <?php if(!empty($settings['member_name'])): ?>
                    <h4>
                        <a href="<?php echo esc_url($settings['button_link']['url']);?>"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                            <?php echo esc_attr($settings['member_name']); ?>
                        </a>
                    </h4>
                    <?php endif; ?>
                    <?php if(!empty($settings['member_designation'])): ?>
                        <span><?php echo esc_attr($settings['member_designation']); ?></span>
                    <?php endif; ?>
                    <?php if($settings['social_media_enable'] == 'yes'): ?>
                    <div class="social-network">
                        <?php foreach($settings['social_media_repeater'] as $social_media_repeater):   ?>
                            <a href="<?php echo esc_url($social_media_repeater['media_link']); ?>"> <i class="<?php echo esc_attr($social_media_repeater['media_text']); ?>"> </i> </a>
                        <?php endforeach; ?>                     
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
            <?php elseif($settings['team_styles'] == 'style_two'):?>

                <div class="team-card two">
                <?php if(!empty($settings['member_image']['url'])): ?>  
                    <div class="image">
                         <img src="<?php echo esc_attr($settings['member_image']['url']); ?>" alt="team image" />
                    </div>
                <?php endif; ?>
                <div class="content">
                <?php if(!empty($settings['member_name'])): ?>
                    <h4>
                        <a href="<?php echo esc_url($settings['button_link']['url']);?>"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                            <?php echo esc_attr($settings['member_name']); ?>
                        </a>
                    </h4>
                    <?php endif; ?>
                    <?php if(!empty($settings['member_designation'])): ?>
                        <span><?php echo esc_attr($settings['member_designation']); ?></span>
                    <?php endif; ?>
                    <?php if($settings['social_media_enable'] == 'yes'): ?>
                    <div class="social-network">
                        <?php foreach($settings['social_media_repeater'] as $social_media_repeater):   ?>
                            <a href="<?php echo esc_url($social_media_repeater['media_link']); ?>"> <i class="<?php echo esc_attr($social_media_repeater['media_text']); ?>"> </i> </a>
                        <?php endforeach; ?>                     
                    </div>
                    <?php endif; ?> 
                    </div>
                </div>
                
                <?php elseif($settings['team_styles'] == 'style_three'):?>

                <div class="team-card three ">
        <div class="authour_details">
        <?php if(!empty($settings['member_image']['url'])): ?>  
            <div class="image">
                <img src="<?php echo esc_url($settings['member_image']['url']); ?>" alt="image" />
            </div>
            <?php endif; ?>
            <div class="details">
            <?php if(!empty($settings['member_name'])): ?>
                <h2><a href="<?php echo esc_url($settings['button_link']['url']);?>"  <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                            <?php echo esc_attr($settings['member_name']); ?>
                        </a></h2>
                <?php endif; ?>
                <?php if(!empty($settings['member_designation'])): ?>
                <span><?php echo esc_attr($settings['member_designation']); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($settings['comment'])): ?>
        <div class="comment">
            <?php echo wp_kses($settings['comment'] , $allowed_tags); ?>
        </div>
        <?php endif; ?>
        <?php if($settings['social_media_enable'] == 'yes'): ?>
                    <div class="social-network">
                        <?php foreach($settings['social_media_repeater'] as $social_media_repeater):   ?>
                            <a href="<?php echo esc_url($social_media_repeater['media_link']); ?>"> <i class="<?php echo esc_attr($social_media_repeater['media_text']); ?>"> </i> </a>
                        <?php endforeach; ?>                     
                    </div>
                    <?php endif; ?> 
</div>
             
      
        <?php endif; ?> 
        </div>

<?php
    }
}

 