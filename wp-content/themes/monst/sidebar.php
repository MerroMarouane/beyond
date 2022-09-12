<?php
/**
 * *
 * Sidebar.
 * @package Monst WordPress Theme
 * *
* */
/* Show the sidebar based on selected layout */
if( 'no-sidebar' == monst_get_layout() ) {
	return;
}
?>
<?php
 
 
$sidebar = 'sidebar-blog' ;
$side_class_inner = 'blog_siderbar side_bar';
if( is_page()) {
	$sidebar = 'page-sidebar';
	$side_class_inner = 'page_siderbar side_bar';
} 
elseif (is_post_type_archive('service')  || is_singular('service')) {
	$sidebar = 'service-sidebar';
	$side_class_inner = 'service_siderbar side_bar';
}
elseif (is_post_type_archive('product')  || is_singular('product')) {
	$sidebar = 'shop-sidebar';
	$side_class_inner = 'shop_siderbar side_bar';
} 
 
?>
<?php if(is_active_sidebar($sidebar)): ?>
<aside id="secondary" class="widget-area   all_side_bar  col-lg-4 col-md-12 col-sm-12">		
	<div class="<?php echo esc_attr($side_class_inner); ?>">
	<?php dynamic_sidebar( $sidebar ) ?>
	</div>
</aside>
<?php endif; ?>