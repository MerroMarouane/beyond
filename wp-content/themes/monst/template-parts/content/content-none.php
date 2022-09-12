<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.WordPress.org/Template_Hierarchy
 *
 * @package Monst
 */
?>
<section class="no-results not-found">
	<div class="header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'monst' ); ?></h1>
	</div><!-- .page-header -->
	<div class="content">
		<?php if(is_home() && current_user_can('publish_posts')) : ?>
			<p><?php echo esc_html__( 'Ready to publish your first post?', 'monst'); ?> <a href="<?php echo esc_url(admin_url( 'post-new.php' )); ?>"><?php echo esc_html__('Get started here','monst'); ?></a></p>
		<?php elseif(is_search()) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'monst'); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'monst'); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->