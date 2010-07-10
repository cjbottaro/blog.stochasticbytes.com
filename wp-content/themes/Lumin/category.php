<?php $projects_cat = get_catid(get_option('lumin_projects_cat')); 
$is_gallery = false; ?>
<?php get_header(); ?>
	<h1 id="post-title"><span><?php single_cat_title("") ?></span></h1>
	<div id="main">
		
		<?php if (is_category($projects_cat) || in_subcat($projects_cat,$cat)) { $post_number = get_option('lumin_gallery_catnum'); $is_gallery = true; } else { $post_number = get_option('lumin_catnum_posts'); } ;?>
		<?php global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged&cat=$cat"); ?>
		<div class="post<?php if ($is_gallery) echo " gallery"; else echo " index"; ?>">
			<?php $i = 0; 	
			if (have_posts()) : while (have_posts()) : the_post();
				$i++;?>
				<?php if ($is_gallery) include(TEMPLATEPATH . '/includes/category_gallery.php');
					  else include(TEMPLATEPATH . '/includes/category_usual.php'); ?>
			<?php endwhile; ?>
			<div class="clear"></div>
		</div> <!-- end .post -->
		
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { ?>
					<?php include(TEMPLATEPATH . '/includes/navigation.php'); ?>
				<?php } ?>
				
			<?php else : ?>
				<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
			<?php endif; wp_reset_query(); ?>
			
	</div> <!-- end #main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>	