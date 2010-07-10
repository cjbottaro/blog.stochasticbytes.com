<?php function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <div id="comment-<?php comment_ID(); ?>" class="comment-body">
		<?php echo get_avatar($comment,$size='73'); ?>
		<div class="comment-wrap">
			<div class="comment-author vcard">
				<?php printf('<span class="fn">%s</span>', get_comment_author_link()) ?><br/>
				<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s','Lumin'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)','Lumin'),'  ','') ?></div>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="moderation"><?php _e('Your comment is awaiting moderation.','Lumin') ?></em>
				<br />
			<?php endif; ?>
			
		    <div class="comment-content"><?php comment_text() ?></div> <!-- end comment-content-->
		    <div class="reply-container"><?php comment_reply_link(array_merge( $args, array('reply_text' => __('reply','Lumin'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
		</div> <!-- end comment-wrap-->  
	</div> <!-- end comment-body-->
	
<?php } ?>
<?php function list_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
?>
	<li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?> 
<?php } ?>
<?php //modify the comment counts to only reflect the number of comments minus pings
if( phpversion() >= '4.4' ) add_filter('get_comments_number', 'comment_count', 0);

function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$get_comments = get_comments('post_id=' . $id);
			$comments_by_type = &separate_comments($get_comments);
			return count($comments_by_type['comment']);	
		} else {
            return $count;
        }
}
?>