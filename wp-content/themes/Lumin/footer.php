<?php $projects_cat = get_catid(get_option('lumin_projects_cat')); ?>

			<div class="clear"></div>
		</div> <!-- end main-area/container -->
	</div> <!-- end main-area -->
	<div id="main-area-wrap"></div> <!-- end main-area wrap-->
	
	<div id="footer-widget-area">
		<div class="container">

<?php if (is_front_page() && (get_option('lumin_blog_style') == 'false')) { ?>
			<div id="recent-projects">
				<h3><?php _e('recent projects','Lumin'); ?></h3>
				<?php $i=1;
				query_posts("showposts=".get_option('lumin_home_projectsnum')."&cat=$projects_cat");
				if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php $classtext = 'preview-thumb';
						  $titletext = get_the_title();
							
						  $thumbnail = get_thumbnail(123,123,$classtext,$titletext,$titletext);
						  $thumbnail2 = get_thumbnail(377,218,'',$titletext,$titletext); ?>
					
					<div class="project-item<?php if ($i%6==0) echo(" last"); ?>">
						<a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>">
							<?php print_thumbnail($thumbnail["thumb"], $thumbnail["use_timthumb"], $titletext , 123, 123, $classtext); ?>
						</a>
						<div class="project-popup">
							<?php print_thumbnail($thumbnail2["thumb"], $thumbnail2["use_timthumb"], $titletext , 377, 218, ''); ?>
							<span class="project-overlay"></span>
						</div> <!-- end project-popup -->
					</div> <!-- end project-item -->
				<?php $i++; endwhile; endif; wp_reset_query(); ?>
				
				<a class="readmore" href="<?php echo get_bloginfo('url'),"/?cat=",get_catid(get_option('lumin_projects_cat')); ?>"><span><?php _e('enter the gallery &raquo;','Lumin'); ?></span></a>
				
				<div class="clear"></div>
			</div> <!-- end recent-projects -->
<?php } else { ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
			<?php endif; ?>
			<div class="clear"></div>
<?php }; ?>
		</div> <!-- end footer-widget-area/container -->
	</div> <!-- end footer-widget-area-->
	
	<div id="footer">
		<div class="container">
			<p><?php _e('Powered by ','Lumin'); ?> <a href="http://www.wordpress.com">WordPress</a> | <?php _e('Designed by ','Lumin'); ?> <a href="http://www.elegantthemes.com">Elegant Themes</a></p>
		</div> <!-- end footer/container -->
	</div> <!-- end footer-->
	
	<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
	
<?php wp_footer(); ?>
</body>
</html>