<?php 
namespace Monstaddons\Core;
class Functions{
	  /**
      * Instantiate the object.
      *
      * @since 1.0.0
      *
      * @return void
      */
      public function __construct() {
		add_shortcode('monst-header', [$this, 'monst_render_header']);
		add_shortcode('monst-sticky-header', [$this, 'monst_render_header_sticky']);
		add_shortcode('monst-footer', [$this, 'monst_render_footer']);
		add_shortcode('monst-mega-menu', [$this, 'monst_render_megamenu']);
		add_action('monst_get_preloader', [$this, 'monst_preloader']);
		add_action('monst_portfolio_category', [$this, 'monst_get_portfolio_category']);
	}

/*
** ============================== 
**   monstheader
** ==============================
*/ 
	
public function monst_render_header($atts, $content = '') {
	$query_args = array(
		'p' => $atts['id'],
		'post_type' => 'header',
	);
	$post_query = new \WP_Query($query_args); ?>

	<?php if ($post_query->have_posts()) : ?>
		<!-- the loop -->
		<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html__('Sorry, no posts matched your criteria.', 'monst-addon'); ?></p>
	<?php endif;
}
/*
** ============================== 
**   monstheader sticky
** ==============================
*/ 
	
public function monst_render_header_sticky($atts, $content = '') {
	$query_args = array(
		'p' => $atts['id'],
		'post_type' => 'sticky_header',
	);
	$post_query = new \WP_Query($query_args); ?>

	<?php if ($post_query->have_posts()) : ?>
		<!-- the loop -->
		<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html__('Sorry, no posts matched your criteria.', 'monst-addon'); ?></p>
	<?php endif;
}
/*
** ============================== 
**   monstfooter
** ==============================
*/ 
public function monst_render_footer($atts, $content = '') {
	$query_args = array(
		'p' => $atts['id'],
		'post_type' => 'footer',
	);
	$post_query = new \WP_Query($query_args); ?>

	<?php if ($post_query->have_posts()) : ?>
		<!-- the loop -->
		<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html__('Sorry, no posts matched your criteria.', 'monst-addon'); ?></p>
	<?php endif;
  }


  /*
** ============================== 
**   monst megamenu
** ==============================
*/ 
public function monst_render_megamenu($atts, $content = '') {
	$query_args = array(
		'p' => $atts['id'],
		'post_type' => 'mega_menu',
	);
	$post_query = new \WP_Query($query_args); ?>

	<?php if ($post_query->have_posts()) : ?>
		<!-- the loop -->
		<?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html__('Sorry, no posts matched your criteria.', 'monst-addon'); ?></p>
	<?php endif;
}

  /*--------------------------corona_preloader-----------------*/

  public static  function monst_preloader()
{
    global $monst_theme_mod;
    $preloaderimage = MONST_ADDONS_URL . '/assets/image/preloader.svg';
    ?>
	 <div class="preloader-active">
                <div class="logo jump text-center">
				<?php if(!empty($monst_theme_mod['preloader_image']['url'])): ?>
                    <img src="<?php echo esc_url($monst_theme_mod['preloader_image']['url']); ?>" alt="perloader" class="img-fluid" />
				<?php else: ?>
					<img src="<?php echo esc_url($preloaderimage); ?>" alt="perloader" class="img-fluid" />
				<?php endif; ?>
				<?php if(!empty($monst_theme_mod['perloader_text'])): ?>
                    <h1> <?php echo esc_html($monst_theme_mod['perloader_text']); ?>  </h1>
					<?php endif; ?>
                </div>

        </div>
   
 
<!-- End. Loader -->
<?php 
}
public static  function monst_get_post_category()
{
$args = array(
	'taxonomy' => 'portfolio_category',
	'orderby' => 'name',
	'order'   => 'ASC'
);

$cats = get_categories($args);

foreach($cats as $cat) {
?>
<a href="<?php echo get_category_link( $cat->term_id ) ?>">
<?php echo $cat->name; ?>
</a>
<?php
}

}

}