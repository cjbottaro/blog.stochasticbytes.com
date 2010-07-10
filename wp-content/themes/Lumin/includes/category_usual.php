<?php $width = get_option('lumin_thumbnail_width_usual');
	  $height = get_option('lumin_thumbnail_height_usual');
	  $classtext = 'thumbnail-post alignleft category';
	  $titletext = get_the_title();
							
	  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	  $thumb = $thumbnail["thumb"]; ?>

<div class="entry">
	<h2 class="cat-title"><a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>"><?php the_title(); ?></a></h2>

	<?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
	
	<?php if($thumb <> '') { ?>
		<a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>">
			<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
		</a>
	<?php }; ?> 
	
	<?php if (get_option('lumin_blog_style') == 'on') the_content(""); else { ?>
		<p><?php truncate_post(400); ?></p>
	<?php }; ?>	
	<a class="readmore" href="<?php the_permalink(); ?>"><span><?php _e('read more','Lumin'); ?></span></a>
	<div class="clear"></div>
</div> <!-- end .entry -->