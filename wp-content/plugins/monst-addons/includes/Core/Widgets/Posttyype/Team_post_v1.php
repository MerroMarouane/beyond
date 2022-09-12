<?php

namespace  Monstaddons\Core\Widgets\Posttyype;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Team_post_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-team-post-v1';
    }

    public function get_title()
    {
        return __('Team Post  V1', 'monst-addons');
    }

    public function get_icon()
    {
        return 'icon-monst-svg';
    }

    public function get_categories()
    {
        return ['103'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('team_settings',
        [ 
            'label' => __('Team Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );


        $this->add_control(
            'team_style',
            [
                'label' => __('Team style', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'monst-addons' ),
                ],
                'default' => 'style_one',
            ]
        );
  
        $this->add_control(
            'team_column',
            [
                'label' => __('Team Column', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'monst-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'monst-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'monst-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'monst-addons' ),
                ],
                'default' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
                'condition' => [
                    'team_style' => ['style_one' , 'style_three']
                ], 
            ]
        );

        $this->add_control(
            'post_count',
            [
                'label' => __('Blog Count', 'monst-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'default' => 10,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
            ]
        );
        $this->add_control(
            'text_limit',
            [
                'label'   => esc_html__( 'Text Limit', 'monst-addons' ),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'default' => 3,
                'min'     => 1,
                'max'     => 100,
                'step'    => 1,
            ]
        );
       
        $this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'monst-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'monst-addons' ),
					'title'      => esc_html__( 'Title', 'monst-addons' ),
					'menu_order' => esc_html__( 'Menu Order', 'monst-addons' ),
					'rand'       => esc_html__( 'Random', 'monst-addons' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'monst-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESc' => esc_html__( 'DESC', 'monst-addons' ),
					'ASC'  => esc_html__( 'ASC', 'monst-addons' ),
				),
			]
        );
      
        $this->add_control(
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT,
			'label' => esc_html__('Category', 'monst-addons'),
			'options' => monst_get_team_categories(),
			]
        );

        
        $this->add_control(
            'pagination_enable',
           [
              'label' => __('Pagination Enable', 'monst-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'monst-addons'),
               'label_off' => __('No', 'monst-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
    
        $this->add_responsive_control(
            'pagination_alignment',
            [
                'label' => __('Pagination alignments', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'left' => [
                    'title' => __( 'Pagination Left', 'monst-addons' ),
                    'icon' => 'fa fa-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Pagination Center', 'monst-addons' ),
                    'icon' => 'fa fa-align-center',
                  ],
                  'right' => [
                    'title' => __( 'Pagination Right', 'monst-addons' ),
                    'icon' => 'fa fa-align-right',
                  ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .pagination ' => 'text-align: {{VALUE}}!important;',
                ],
                'condition' => [
                    'pagination_enable' => 'yes'
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
            'label' => esc_html__( 'Title Typography', 'monst-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .team_box .team-card.one .content h4 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card.one .content h4 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
     
     
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Designation Typography', 'monst-addons' ),
            'name' => 'designation_typo',
            'selector' => '{{WRAPPER}} .team_box .team-card.one .content span ',
        ]
    );
    $this->add_control(
        'designation_color',
         [
            'label' => __('Designation Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card.one .content span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
   
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .team_box .team-card.one .content p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card.one .content p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
   
    $this->add_control(
        'team_social_media_icon_color',
         [
            'label' => __('Social Media Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card.one .content .social-network a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'team_social_media_icon_color_hove',
         [
            'label' => __('Social Media Hover Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team_box .team-card.one .content .social-network a:hover ' => 'color: {{VALUE}}!important;',
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
<section class="team_post position-relative">
    <div
        class="row loop-grid">
        <?php    $query_args = array(
                        'post_type' => 'team',
                        'ignore_sticky_posts' => true,
                        'orderby' => 'date',
                        'posts_per_page' => $settings['post_count'],
                        'orderby'        => $settings['query_orderby'],
                        'order'          =>  $settings['query_order'],
                    );
                    if($settings['query_category'] ) $query_args['team_category'] = $settings['query_category'];
                     
                        $team_query = new \WP_Query( $query_args );
                    ?>
        <?php if($team_query->have_posts()):
                            while($team_query->have_posts()) : $team_query->the_post();
                            global $post;
                            $myexcerpt = wp_trim_words(get_the_excerpt(), $settings['text_limit']);  
                            $mycontent = wp_trim_words(get_the_content(), $settings['text_limit']); 
                           
                            $tm_member_designation = get_post_meta(get_the_ID() , 'tm_member_designation' , true);
                            // social media
                            $tm_social_media_text = get_post_meta(get_the_ID() , 'tm_social_media_text', true);
                            $tm_social_media_link = get_post_meta(get_the_ID() , 'tm_social_media_link', true);
                            $tm_social_media_text_two = get_post_meta(get_the_ID() , 'tm_social_media_text_two', true);
                            $tm_social_media_link_two = get_post_meta(get_the_ID() , 'tm_social_media_link_two', true);
                            $tm_social_media_text_three = get_post_meta(get_the_ID() , 'tm_social_media_text_three', true);
                            $tm_social_media_link_three = get_post_meta(get_the_ID() , 'tm_social_media_link_three', true);
                            $tm_social_media_text_four = get_post_meta(get_the_ID() , 'tm_social_media_text_four', true);
                            $tm_social_media_link_four = get_post_meta(get_the_ID() , 'tm_social_media_link_four', true);
                            $tm_social_media_text_five = get_post_meta(get_the_ID() , 'tm_social_media_text_five', true);
                            $tm_social_media_link_five = get_post_meta(get_the_ID() , 'tm_social_media_link_five', true);
                            // social media end
                            $team_column = $settings['team_column'];
                    // while loop start ?>
        <?php // blog style ?>
        <?php if($settings['team_style'] == 'style_one'): ?>
        <?php // blog style ?>

         <article <?php post_class($team_column); ?>>
         <div class="team_box">
         <div class="team-card one">
                <?php if(has_post_thumbnail()): ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>"> 
                     <figure class="image">
                    <?php the_post_thumbnail(); ?>
                    </figure>   
                  </a>
                <?php endif; ?>
                <div class="content text-center">
                    
                    <?php the_title( '<h4 class="title"><a href="' .  esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>' ); ?>
                
                    <?php if(!empty($tm_member_designation)): ?>
                        <span><?php echo esc_attr($tm_member_designation); ?></span>
                    <?php endif; ?>
           
                    <?php if(!empty($myexcerpt)):?>
                    <p><?php echo esc_html($myexcerpt); ?></p>
                    <?php elseif(!empty($mycontent)):?>
                    <p><?php  echo esc_html($mycontent); ?></p>
                    <?php endif; ?>
                    <?php if(get_post_meta(get_the_ID() , 'tm_member_media_enable' , true)): ?>
                    <div class="social-network">  
                        <ul>
        <?php if(!empty($tm_social_media_text)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link); ?>"><i class="<?php echo esc_attr($tm_social_media_text); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_two)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_two); ?>"><i class="<?php echo esc_attr($tm_social_media_text_two); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_three)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_three); ?>"><i class="<?php echo esc_attr($tm_social_media_text_three); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_four)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_four); ?>"><i class="<?php echo esc_attr($tm_social_media_text_four); ?>"></i></a></li>
          <?php endif; ?>
          <?php if(!empty($tm_social_media_text_five)): ?>
          <li><a href="<?php echo esc_attr($tm_social_media_link_five); ?>"><i class="<?php echo esc_attr($tm_social_media_text_five); ?>"></i></a></li>
          <?php endif; ?>
        </ul>                  
                    </div>
                    <?php endif; ?> 
                </div>
            </div>        </div>
        </article>



        <?php // blog style ?>
        <?php endif; ?>
        <?php // blog style ?>

        <?php endwhile; // while loop end ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; // Post Endif after loop end  ?>
    </div>
    <!--End tab-content-->
    <?php if($settings['pagination_enable'] == true):?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination_blog">

                <?php
     $pagination = 999999999;
     echo paginate_links( array(
          'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $team_query->max_num_pages,
          'prev_text' => '<i class="fa fa-angle-left"></i>',
          'next_text' => '<i class="fa fa-angle-right"></i>',
          'type'=>'list', 
          'add_args' => false
     ) );
?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<?php
    }
}

         