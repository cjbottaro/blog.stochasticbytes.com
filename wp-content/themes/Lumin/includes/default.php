<div id="main" class="home">
<?php if (!is_page()) { ?>
	<?php if (get_option('lumin_blog_style') == 'on') include(TEMPLATEPATH . '/includes/blogstyle_home.php'); else { ?>
		<div class="page-block first">
			<?php query_posts('page_id=' . get_pageId(html_entity_decode($lumin_home_page_1)) ); while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/homepage_content.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end page-block -->

		<div class="page-block">
			<?php query_posts('page_id=' . get_pageId(html_entity_decode($lumin_home_page_2)) ); while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/homepage_content.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end page-block -->
	<?php }; ?>
<?php } else { ?>
		<div class="page-block fullwidth">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/homepage_content.php'); ?>
			<?php endwhile; endif; ?>
		</div> <!-- end page-block -->
<?php } ?>
</div> <!-- end #main -->
<?php if (get_option('lumin_blog_style') == 'false') include(TEMPLATEPATH . '/includes/fromblog.php'); else get_sidebar(); ?>