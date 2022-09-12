<?php
/**
 * Template Name:  Empty Page (For to build Header ,   Footer , Megamenu)
 * Template Post Type: post, page , header , footer , mega_menu , sticky_header
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.WordPress.org/Template_Hierarchy
 * @package monst WordPress Theme
 * @version 1.0.0
 * *
* */
get_header(); ?>
<div class="full_width_box">
<?php
if(have_posts()) :
	while(have_posts()) : the_post();
		the_content();
	endwhile;
endif;
?>
</div>
<?php get_footer(); ?>