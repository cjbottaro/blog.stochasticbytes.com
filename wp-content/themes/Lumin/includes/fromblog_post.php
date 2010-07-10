<?php $width = 44;
	  $height = 44;
	  $classtext = 'thumb';
	  $titletext = get_the_title();
							
	  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	  $thumb = $thumbnail["thumb"]; ?>
	  
<div class="post">
	<?php if ($thumb <> '') { ?>
		<a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>">
			<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
		</a>
		<p class="date"><span><?php the_time('M d') ?></span></p>
	<?php } ?>
	<h4><a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>"><?php truncate_title(24); ?></a></h4>

	<?php if (get_option('lumin_postinfo_fromblog') <> '') { ?>	
		<p class="meta"><?php _e('Posted ','Lumin'); ?>
		<?php if (in_array('author', get_option('lumin_postinfo_fromblog'))) { _e(' by ','Lumin'); the_author_posts_link(); }; 
		if (in_array('comments', get_option('lumin_postinfo_fromblog'))) { echo(" | <span class='comments-number'>"); comments_popup_link('0', '1','%'); echo("</span>"); }; ?></p>
	<?php }; ?>
	
</div> <!-- end post -->