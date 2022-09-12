<?php

namespace  Monstaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Blog_card_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-blog-card-v1';
    }

    public function get_title()
    {
        return __('Blog Card V1', 'monst-addons');
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
        $this->start_controls_section('blog_v1_settings',
        [ 
            'label' => __('Blog Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'blog_style',
            [
                'label' => __('Blog style', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'monst-addons' ),
                    'style_two'   => esc_html__( 'Style Two', 'monst-addons' ),
                ],
                'default' => 'style_one',
            ]
        );

        
        $this->add_control(
            'image_position',
            [
                'label' => __('Image Position', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'img_pos_left'   => esc_html__( 'left', 'monst-addons' ),
                    'img_pos_right'   => esc_html__( 'right', 'monst-addons' ),
                ],
                'default' => 'img_pos_left',
                'condition' => [
                    'blog_style' => ['style_two']
                ], 
            ]
        );
      
        $this->add_control(
			'image',
			[
				'label' => __( 'Blog Image', 'monst-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
        );
        $this->add_responsive_control(
            'category',
            [
               'label' => __('Category', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Uncategorized', 'monst-addons'),
               'placeholder' => __('Type your text here', 'monst-addons'),    
            ]
          );
          $this->add_responsive_control(
            'cat_link',
            [
                'label' => __('Category Link', 'monst-addons'),
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
            'date',
            [
               'label' => __('Date', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('November 1, 2022', 'monst-addons'),
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
              'descriptions',
              [
                'label' => __('Description', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum, dolor sit amet consectetur', 'monst-addons'),
                'placeholder' => __('Type your text here', 'monst-addons'),
              ]
          );
          $this->add_responsive_control(
            'button_text',
            [
              'label' => __('Button Text', 'monst-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Read More', 'monst-addons'),
              'placeholder' => __('Type your text here', 'monst-addons'),
              'condition' => [
                'blog_style' => ['style_two']
            ], 
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

    $this->start_controls_section('blogcss',
    [ 
        'label' => __('Custom Css', 'monst-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Category Typography', 'monst-addons' ),
            'name' => 'cat_typo',
            'selector' => '{{WRAPPER}} .card_blog .content_box .meta_box li a ',
        ]
    );
    $this->add_control(
        'cat_color',
         [
            'label' => __('Category Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog .content_box .meta_box li a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'cat_bg_color',
         [
            'label' => __('Category Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog .content_box .meta_box li a ' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Date Typography', 'monst-addons' ),
            'name' => 'date_typo',
            'selector' => '{{WRAPPER}} .card_blog .content_box .meta_box li.date  ',
        ]
    );
    $this->add_control(
        'date_color',
         [
            'label' => __('Date Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog .content_box .meta_box li.date ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );


  
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .card_blog.two .content_box h2 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog.two .content_box h2 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'title_hover_color',
         [
            'label' => __('Title Hover Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog.two .content_box h2 a:hover ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .card_blog.two .content_box p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog.two .content_box p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Readmore Typography', 'monst-addons' ),
            'name' => 'button_typo',
            'selector' => '{{WRAPPER}} .card_blog.two .content_box .rd_more ',
            'condition' => [
                'blog_style' => ['style_two']
            ], 
        ]
    );

    $this->add_control(
        'button_color',
        [
            'label' => esc_html__( 'Readmore Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog.two .content_box .rd_more' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'blog_style' => ['style_two']
            ], 
        ]
    );
 
    $this->add_control(
        'button_hover_color',
        [
            'label' => esc_html__( 'Readmore Hover Color', 'monst-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_blog.two .content_box .rd_more::hover ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'blog_style' => ['style_two']
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
        $target_cat = $settings['cat_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow_cat = $settings['cat_link']['nofollow'] ? ' rel="nofollow"' : '';
  
    ?>
<?php if($settings['blog_style'] == 'style_one'): ?>
     <div class="card_blog  default_style clearfix <?php if(!empty($settings['image']['url'])): ?>has_images<?php else: ?>no_images<?php endif; ?> wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
                <?php if(!empty($settings['image']['url'])): ?>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <figure class="image">
                    <img class="active img-fluid" src="<?php echo esc_url($settings['image']['url']); ?>" alt="img" >  
                    </figure>
                </a>
                <?php endif; ?>
                <div class="content_box">
                <ul class="meta_box">
                        <?php if(!empty($settings['category'])): ?>
                            <li> <a href="<?php echo esc_url($settings['cat_link']['url']); ?>" <?php echo esc_attr($target_cat); ?> <?php echo esc_attr($nofollow_cat); ?>><?php echo wp_kses($settings['category'] , $allowed_tags); ?></a></li>
                        <?php endif; ?>
                        <?php if(!empty($settings['date'])): ?>
                        <li class="date"> <?php echo wp_kses($settings['date'] , $allowed_tags); ?></li>
                        <?php endif; ?>
                    </ul>
                    <?php if(!empty($settings['title'])): ?>
                        <h2 class="title">
                    <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                    <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
                    </a>
                </h2>
                    <?php endif; ?>
                    <?php if(!empty($settings['descriptions'])): ?>
                        <p><?php echo wp_kses($settings['descriptions'] , $allowed_tags); ?></p>
                    
                    <?php endif; ?>
                </div>
            </div>
            <?php elseif($settings['blog_style'] == 'style_two'): ?>
    <div class="card_blog  two clearfix <?php echo esc_attr($settings['image_position']); ?> <?php if(!empty($settings['image']['url'])): ?>has_images<?php else: ?>no_images<?php endif; ?> wow animate__animated animate__fadeInUp"
    data-wow-delay="<?php echo esc_attr($settings['wow_animation']); ?>">
              <?php if(!empty($settings['image']['url'])): ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="image_out_side">
                    <figure class="image">
                    <img class="active img-fluid" src="<?php echo esc_url($settings['image']['url']); ?>" alt="img" >  
                    </figure>
                </a>
                <?php endif; ?>
                <div class="content_box">
                    <ul class="meta_box">
                        <?php if(!empty($settings['category'])): ?>
                            <li> <a href="<?php echo esc_url($settings['cat_link']['url']); ?>" <?php echo esc_attr($target_cat); ?> <?php echo esc_attr($nofollow_cat); ?>><?php echo wp_kses($settings['category'] , $allowed_tags); ?></a></li>
                        <?php endif; ?>
                        <?php if(!empty($settings['date'])): ?>
                        <li  class="date"> <?php echo wp_kses($settings['date'] , $allowed_tags); ?></li>
                        <?php endif; ?>
                    </ul>
                    <?php if(!empty($settings['title'])): ?>
                    <h2 class="title">
                    <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                    <?php echo wp_kses($settings['title'] , $allowed_tags); ?>
                    </a>
                </h2>
                    <?php endif; ?>
                    <?php if(!empty($settings['descriptions'])): ?>
                        <p><?php echo wp_kses($settings['descriptions'] , $allowed_tags); ?></p>
                    
                    <?php endif; ?>
                    <?php if(!empty($settings['button_text'])): ?>
                    <a href="<?php echo esc_url($settings['link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="rd_more"><?php echo wp_kses($settings['button_text'] , $allowed_tags); ?><i class="icon-right-arrow-1"></i></a>
                    <?php endif; ?>
 
                </div>
            </div>
            <?php endif; ?>
    <?php
    }
}

 