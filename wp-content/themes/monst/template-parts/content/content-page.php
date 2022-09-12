<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Monst WordPress theme
 */
$clerfix = 'clearfix';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($clerfix); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
		<div class="clearfix"></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'monst' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php // monst_edit_post_link(); ?>
</article><!-- #post-## -->