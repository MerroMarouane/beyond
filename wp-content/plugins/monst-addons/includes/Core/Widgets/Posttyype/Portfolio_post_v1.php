<?php

namespace  Monstaddons\Core\Widgets\Posttyype;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Portfolio_post_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'monst-portfolio-post-v1';
    }

    public function get_title()
    {
        return __('Portfolio Post  V1', 'monst-addons');
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
        $this->start_controls_section('portfolio_settings',
        [ 
            'label' => __('Portfolio Content', 'monst-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );


        $this->add_control(
            'portfolio_style',
            [
                'label' => __('Portfolio style', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'monst-addons' ),
                   
                ],
                'default' => 'style_one',
            ]
        );
  
        $this->add_control(
            'portfolio_column',
            [
                'label' => __('Blog Column', 'monst-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'monst-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'monst-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'monst-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'monst-addons' ),
                ],
                'default' => 'col-xl-4 col-lg-4 col-md-6 col-sm-6',
                'condition' => [
                    'portfolio_style' => ['style_one' , 'style_three']
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
                'default' => 15,
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
			'options' => monst_get_portfolio_categories(),
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
            'selector' => '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in h2 a ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in h2 a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
     
     
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'monst-addons' ),
            'name' => 'desc_typo',
            'selector' => '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in p ',
        ]
    );
    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'tag_color',
         [
            'label' => __('Tag Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in .ca_t a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'tag_bg_color',
         [
            'label' => __('Tag Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in .ca_t a ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'protfolio_content_bg_color',
         [
            'label' => __('Portfolio Content Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one .content_box .content_box_in ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'protfolio_bg_color',
         [
            'label' => __('Portfolio Bg Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'protfolio_bord_color',
         [
            'label' => __('Portfolio Border Color', 'monst-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .card_post_portfolio.one ' => 'border-color: {{VALUE}}!important;',
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
<section class="portfolio_post position-relative">
    <div
        class="row loop-grid">
        <?php    $query_args = array(
                        'post_type' => 'portfolio',
                        'ignore_sticky_posts' => true,
                        'orderby' => 'date',
                        'posts_per_page' => $settings['post_count'],
                        'orderby'        => $settings['query_orderby'],
                        'order'          =>  $settings['query_order'],
                    );
                    if($settings['query_category'] ) $query_args['portfolio_category'] = $settings['query_category'];
                     
                        $portfolio_query = new \WP_Query( $query_args );
                    ?>
        <?php if($portfolio_query->have_posts()):
                            while($portfolio_query->have_posts()) : $portfolio_query->the_post();
                            global $post;
                            $myexcerpt = wp_trim_words(get_the_excerpt(), $settings['text_limit']);  
                            $mycontent = wp_trim_words(get_the_content(), $settings['text_limit']); 
                           
                            $val = get_post_meta(get_the_ID() , 'opt-text' , true);
                            $portfolio_column = $settings['portfolio_column'];
                    // while loop start ?>
        <?php // Portfolio style ?>
        <?php if($settings['portfolio_style'] == 'style_one'): ?>
        <?php // Portfolio style ?>

         <article <?php post_class($portfolio_column); ?>>
            <div class="card_post_portfolio one clearfix <?php if(has_post_thumbnail()): ?>has_images<?php else: ?>no_images<?php endif; ?>"
                id="post-<?php esc_attr(the_ID()); ?>">
                <?php if(has_post_thumbnail()): ?>
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <figure class="image">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                </a>
                <?php endif; ?>
                <div class="content_box">
                <div class="content_box_in">
                    <?php the_title( '<h2 class="title"><a href="' .  esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>' ); ?>
                    <?php if(!empty($myexcerpt)):?>
                    <p><?php echo esc_html($myexcerpt); ?></p>
                    <?php elseif(!empty($mycontent)):?>
                    <p><?php  echo esc_html($mycontent); ?></p>
                    <?php endif; ?>
                    <?php if(function_exists('monst_category')): ?>
                        <div class="ca_t"><?php \Monstaddons\Core\Functions::monst_get_post_category(); ?></div>
                    <?php endif; ?>
                </div>  </div>
            </div>
        </article>


        <?php // blog style ?>
        <?php elseif($settings['portfolio_style'] == 'style_two'): ?>
        <?php // blog style ?>

        <?php // blog style ?>
        <?php elseif($settings['portfolio_style'] == 'style_three'): ?>
        <?php // blog style ?>

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
          'total' => $portfolio_query->max_num_pages,
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

         