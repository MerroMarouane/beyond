<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * @package monst WordPress Theme
 * @version 1.0.0
 * *
* */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
if(!function_exists('wp_body_open')) {
        function wp_body_open() {
                do_action( 'wp_body_open' );
    }
} global $monst_theme_mod;
?>
<div id="page" class="page_wapper hfeed site">
	<div id="wrapper_full" class="content_all_warpper">
	<?php  if(!empty($monst_theme_mod['color_scheme_option']) == true): monst_color_switcher(); endif;?>
	<?php  if(!empty($monst_theme_mod['side_menu_enable']) == true):  monst_menu_display_arear();  endif;?>
		<?php //preloader ?>
		<?php if(!empty($monst_theme_mod['preloader_show']) == true): do_action('monst_get_preloader'); endif;?>
		<?php // header?>
		<?php if(monst_isMobile()){
			   get_template_part('template-parts/headers/mobile/mobile', 'layout');
		}else{
			get_template_part('template-parts/headers/default', 'header');
		} ?>
	   <?php // header end?>
	   <?php // sticky header?>
	
	   <?php if(!monst_isMobile()){ if(!empty($monst_theme_mod['header_sticky_enables']) == true): get_template_part('template-parts/headers/sticky', 'header'); endif; }?>
	   <?php // sticky header end?>
			<?php //page header ?>
			<?php  do_action('monst_after_header_no_blog'); ?>
			<?php if(is_singular('post')){ do_action('monst_after_header_blog'); } ?>
			<?php do_action('monst_after_header_no_redux'); ?>
			<?php //content ?>
			<div id="content"
				class="site-content <?php echo get_post_meta(get_the_ID() , 'blog_single_page_header' , true); ?>">
				<?php $container = 'auto-container auto_container';
	                if( is_page_template( 'template-homepage.php' ) || is_page_template( 'template-empty.php' ) || is_page_template( 'template-fullwidth.php' ) ):
						$container = 'no-container';
					endif;
		        ?>
				<div class="<?php echo esc_attr($container); ?>">
					<?php	$layout_row = monst_get_layout();
					$row = 'row';
					if( is_page_template( 'template-homepage.php' ) || is_page_template( 'template-empty.php' ) || is_page_template( 'template-fullwidth.php' ) || $layout_row == 'no-sidebar'):
						$row = 'no-row';
					else:
						$row = 'row default_row';
					endif;
					?>
				<div class="<?php echo esc_attr( $row ) ?>">