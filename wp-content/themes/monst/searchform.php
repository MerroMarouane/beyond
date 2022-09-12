<?php

/**
 * *
 * Search Form.
 * @package Monst WordPress Theme
 * *
* */
?>
<div class="simple_search">
	<div class="form-group">
		<form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
			<input type="search" class="search" placeholder="<?php echo esc_attr__( 'Search...', 'monst' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr__( 'Search', 'monst' ); ?>" />
			<button type="submit" class="sch_btn"> <i class="fa fa-search"></i></button>
		</form>
	</div>
</div>