<?php
/**
* The Template for displaying all single Project Posts.
*
* @package Monst WordPress theme
*/
get_header(); ?>
	<div id="primary" class="content-area projects_singled">
        <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content' , 'portfolio' ); ?>
                <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>