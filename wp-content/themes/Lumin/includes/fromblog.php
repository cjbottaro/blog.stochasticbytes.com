<div id="from-blog">
	<ul class="control">
		<li class="recent"><a href="#recent-tabbed"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recent.png" alt=""/><?php _e('Recent','Lumin'); ?></a></li>
		<li class="popular"><a href="#popular-tabbed"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/popular.png" alt=""/><?php _e('Popular','Lumin'); ?></a></li>
		<li class="comments last"><a href="#random-tabbed"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/random.png" alt=""/><?php _e('Random','Lumin'); ?></a></li>
	</ul>
	
	<div class="content">
		<h3><?php _e('From the Blog','Lumin'); ?></h3>
		<a href="<?php echo get_category_feed_link(get_catid($lumin_blog_cat), ''); ?>
"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe.png" id="subscribe" alt="Subscribe"/></a>
		
		<div id="recent-tabbed">
			<?php query_posts("showposts=$lumin_fromblog_recent&cat=".get_catid($lumin_blog_cat));
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/fromblog_post.php'); ?>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div> <!-- end recent-tabbed -->
		
		<div id="popular-tabbed">
			<?php global $wpdb;
			$result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $lumin_fromblog_popular");
			foreach ($result as $post) {
				setup_postdata($post);
				$postid = $post->ID;
				$title = $post->post_title;
				$commentcount = $post->comment_count;
				if ($commentcount != 0) { ?>
					<?php query_posts("p=$postid"); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php include(TEMPLATEPATH . '/includes/fromblog_post.php'); ?>
					<?php endwhile; endif; wp_reset_query(); ?>
				<?php };
			}; ?>
		</div> <!-- end popular-tabbed -->
		
		<div id="random-tabbed">
			<?php query_posts("showposts=$lumin_fromblog_random&caller_get_posts=1&orderby=rand&cat=".get_catid($lumin_blog_cat));
			if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/fromblog_post.php'); ?>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div> <!-- end recent-tabbed -->
		
		<div id="content-bottom"></div>
	</div> <!-- end content -->
</div> <!-- end from-blog -->