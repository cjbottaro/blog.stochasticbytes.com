<?php if (is_archive()) $post_number = get_option('lumin_archivenum_posts');
if (is_search()) $post_number = get_option('lumin_searchnum_posts');
if (is_tag()) $post_number = get_option('lumin_tagnum_posts'); ?>
<?php get_header(); ?>
	<h1 id="post-title"><span><?php if ( is_tag() ) { ?>
	    <?php _e('Posts Tagged &quot;','Lumin'); ?><?php single_tag_title(); ?>&quot;
	<?php } elseif (is_day()) { ?>
		<?php _e('Posts made in','Lumin'); ?> <?php the_time('F jS, Y'); ?>
	<?php } elseif (is_month()) { ?>
		<?php _e('Posts made in','Lumin'); ?> <?php the_time('F, Y'); ?>
	<?php } elseif (is_year()) { ?>
		<?php _e('Posts made in','Lumin'); ?> <?php the_time('Y'); ?>
	<?php } elseif (is_search()) { ?>
		<?php _e('Search results for:','Lumin'); ?> <em><?php the_search_query() ?></em>
	<?php } elseif (is_author()) { ?>
		<?php global $wp_query;
			  $curauth = $wp_query->get_queried_object(); ?>
		<?php _e('Posts by','Lumin'); ?> <?php echo $curauth->nickname; ?>
	<?php } ?></span></h1>
	
	<div id="main">
		
		<?php global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged"); ?>
		<div class="post index">
			<?php $i = 0; 	
			if (have_posts()) : while (have_posts()) : the_post();
				$i++;?>
				<?php include(TEMPLATEPATH . '/includes/category_usual.php'); ?>
			<?php endwhile; ?>
			<div class="clear"></div>
		</div> <!-- end .post -->
		
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { ?>
					<?php include(TEMPLATEPATH . '/includes/navigation.php'); ?>
				<?php } ?>
				
			<?php else : ?>
				<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
				</div> <!-- end .post.index-->
			<?php endif; wp_reset_query(); ?>
			
	</div> <!-- end #main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>	