<?php
/**
 * calling post meta.
 *
 * @package monst
 */
/*------- category --------*/
if(!function_exists('monst_category')):
    function monst_category()
    {
        $categories = get_the_category();
          if( ! empty( $categories ) ) {
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="categories"> ' . esc_html( $categories[0]->name ) . '</a>';
         }
       
    }
endif;
if(!function_exists('monst_category_two')):
  function monst_category_two()
  {
      $categors = get_the_category();
        if( ! empty( $categors ) ) {
          echo '<div class="category"><a href="' . esc_url( get_category_link( $categors[0]->term_id ) ) . '" class="categors"> ' . esc_html( $categors[0]->name ) . '</a></div>';
       }
     
  }
endif;
/*---------get-comments-------*/
if(!function_exists('monst_comments')):
  function monst_comments(){
    ?><div class="comments"><i class="icon-text"></i>
  <?php echo comments_popup_link( 
              esc_html__( 'Post a Comment', 'monst' ), 
              esc_html__( '1 Comment', 'monst' ), 
              esc_html__( '% Comments', 'monst' ),
              esc_html__( 'Comments are Closed', 'monst' )
      ); ?>
</div> <?php 
/* translators: %s: post title */
}
endif;
/*------- get comment tminig---------------*/
if(!function_exists('monst_comment_timing')):
  function monst_comment_timing() { 
      $comment_date = get_comment_time('U');
      $dayscommnet = round((date('U') - get_comment_time('U')) / (60*60*24));
      $deltacomment = time() - $comment_date;
      if( $deltacomment < 60 ) {
          echo esc_html__('Less than a minute ago' , 'monst');
      }
      elseif($deltacomment > 60 && $deltacomment < 120){
          echo esc_html__('About a minute ago' , 'monst');
      }
      elseif($deltacomment > 120 && $deltacomment < (60*60)){
          echo strval(round(($deltacomment/60),0)), ' minutes ago';
      }
      elseif($deltacomment > (60*60) && $deltacomment < (120*60)){
          echo esc_html__('About an hour ago' , 'monst');
      }
      elseif($deltacomment > (120*60) && $deltacomment < (24*60*60)){
          echo strval(round(($deltacomment/3600),0)), ' hours ago';
      }
      else {
          echo  get_comment_date();
      }
}endif;

