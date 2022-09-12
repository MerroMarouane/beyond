<?php

/**
 * *
 * The Comment template file .
 * @package Monst WordPress Theme
 * *
* */
/*
 * ifthe current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if( post_password_required() ) {
	return;
}
?>
<div class="sec_comments padding-t-8 padding-b-3" id="comments">
    <div class="container_no">
        <div class="justify-content-center">
 
                <?php // You can start editing here -- including this comment! ?>
                <?php if(have_comments() ) : ?>
                <div class="comment_box">
                    <div class="title_commnt">
                        <h2> <?php echo comments_popup_link( 
                            esc_html__( '0 Comments', 'monst' ), 
                            esc_html__( '1 Comment', 'monst' ), 
                            esc_html__( '% Comments', 'monst' ),
                            esc_html__( 'Comments are Closed', 'monst' )
                        ); ?></h2>
                    </div>
                    <?php if(get_comment_pages_count() > 1 && get_option( 'page_comments' )) : // Are there comments to navigate through? ?>
                    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                        <h2 class="screen-reader-text">
                            <?php esc_html_e( 'Comment navigation', 'monst' ); ?>
                        </h2>
                        <div class="nav-links">

                            <div class="nav-previous">
                                <?php previous_comments_link( esc_html__( 'Older Comments', 'monst' ) ); ?>
                            </div>
                            <div class="nav-next">
                                <?php next_comments_link( esc_html__( 'Newer Comments', 'monst' ) ); ?>
                            </div>

                        </div>
                        <!-- .nav-links -->
                    </nav>
                    <!-- #comment-nav-above -->
                    <?php endif; // Check for comment navigation. ?>
                    <div class="comment_inner body_commnt">
                        <ol class="comment-list">
                            <?php 
                            wp_list_comments( array(
				                'style'       => 'ol',
				                'short_ping'  => true,
				                'avatar_size' => 65,
				                'callback'    => 'monst_comment'
			                )); 
                            ?>
                        </ol>
                        <!-- .comment-list -->
                    </div>
                    <?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                        <h2 class="screen-reader-text">
                            <?php esc_html_e( 'Comment navigation', 'monst' ); ?>
                        </h2>
                        <div class="nav-links">
                            <div class="nav-previous">
                                <?php previous_comments_link(esc_html__( 'Older Comments', 'monst')); ?>
                            </div>
                            <div class="nav-next">
                                <?php next_comments_link( esc_html__( 'Newer Comments', 'monst')); ?>
                            </div>
                        </div>
                        <!-- .nav-links -->
                    </nav>
                    <!-- #comment-nav-below -->
                    <?php endif; // Check for comment navigation. ?>
                    <?php endif; // Check for have_comments(). ?>
                    <?php
	                    // ifcomments are closed and there are comments, let's leave a little note, shall we?
	                    if( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		            ?>
                    <p class="no-comments">
                        <?php esc_html_e( 'Comments are closed.', 'monst' ); ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php 
	$monst_commenter = wp_get_current_commenter();
	$monst_comment_fields =  array(
		'author' => '<div class="col-md-6 name-field"> <input type="text"  name="author" id="name" value="' . esc_attr($monst_commenter['comment_author']) . '" placeholder="' . esc_attr__('Name *', 'monst') . '" > </div>',
		'email'	=> '<div class="col-md-6 email-field"> <input type="email"  name="email" id="email" value="' . esc_attr($monst_commenter['comment_author_email']) . '" placeholder="' . esc_attr__('Email *', 'monst') . '" > </div>',
		'url'	=> '<div class="col-md-12 "><input type="url"  name="url" value="' . esc_attr($monst_commenter['comment_author_url']) . '" placeholder="' . esc_attr__('Website (Optional)', 'monst') . '"> </div>',
	);
	$monst_comments_args = array(
		'fields'                => apply_filters('comment_form_default_fields', $monst_comment_fields),
		'class_form'            => 'reply-form row no-gutters',
		'class_submit'          => 'theme-btn btn-style-one',
		'title_reply_before'    => '<h2 class="blog-details__content-title">',
		'title_reply'           => esc_html__('Leave a Comment', 'monst'),
		'title_reply_after'     => '</h2>',
		'comment_notes_before'  => '',
		'comment_field'         => '<div class="col-md-12 "><textarea name="comment" id="comment" class="message" placeholder="' . esc_attr__('Comment', 'monst') . '"></textarea></div>',
		'comment_notes_after'   => '',
	);
	comment_form($monst_comments_args);
                ?>
            </div>
   
    </div>
</div>