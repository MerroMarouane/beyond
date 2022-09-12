<?php
/**
 * Custom functions for displaying comments
 *
 * @package monst
 */
/**
 * Comment callback function
 *
 * @param object $comment
 * @param array  $args
 * @param int    $depth
 */
function monst_comment($comment, $args, $depth) {
    if( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">
    <?php 
    if( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comments-outer  clearfix">
        <div class="inner-coment item_commnt one clearfix"><?php
    } ?>
    <div class="media">
        <?php 
            if( $args['avatar_size'] != 0 ) {
                ?>
                <div class="image">
                    <?php echo get_avatar($comment, $args['avatar_size']);   ?>
                </div>
                <?php
            } 
            ?>
        <div class="comment-text">
        <div class="txt">
           
             <h3 class="name"> <?php comment_author(); ?> <span class="date"><?php monst_comment_timing();?></span></h3>
            
           
             <?php 
             if( $comment->comment_approved == '0' ) { ?>
                 	<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'monst' ); ?><br/></em><?php 
             } ?>
            <p class="content"><?php echo wp_kses_post(get_comment_text()); ?></p>
        <div class="reply">
            <p><i class="icon-share-1"></i>
          <?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
                </p>
<p><?php edit_comment_link(esc_html__( 'Edit', 'monst' ), '  ', '' ); ?></p>
   
       </div></div>  </div><?php 
    if( 'div' != $args['style'] ) : ?>
        </div></div> </div><?php 
    endif;
}
 