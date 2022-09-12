<?php
/**
* The Template for displaying all single Project Posts.
*
* @package monst WordPress theme
*/
get_header(); ?>
	<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content' , 'team' ); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>