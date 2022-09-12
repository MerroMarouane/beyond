<?php

/**
 * *
 * The Search template file .
 * @package Monst WordPress Theme
 * *
* */
get_header(); ?>
<div id="primary" class="content-area blog_masonry    <?php monst_column_for_blog(); ?>">
<main id="main" class="site-main" role="main">
		<?php if(have_posts()) : ?>
			<?php /* Start the Loop */ ?>
			<?php while( have_posts()) : the_post(); ?>
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * ifyou want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('template-parts/content/content', 'search');
				?>
			<?php endwhile; ?>
			<?php monst_numeric_posts_nav(); ?>
		<?php else : ?>
			<?php get_template_part('template-parts/content/content', 'none'); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>