<?php $classtext = 'preview-thumb';
	  $titletext = get_the_title();
							
	  $thumbnail = get_thumbnail(123,123,$classtext,$titletext,$titletext);
	  $thumbnail2 = get_thumbnail(377,218,'',$titletext,$titletext); ?>
						  
<div class="thumb-gallery<?php if ($i%4 == 0) echo(" last"); ?>">
	<a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Lumin'), get_the_title()) ?>">
		<?php print_thumbnail($thumbnail["thumb"], $thumbnail["use_timthumb"], $titletext, 123, 123, $classtext); ?>
	</a>
	<div class="project-popup">
		<?php print_thumbnail($thumbnail2["thumb"], $thumbnail2["use_timthumb"], $titletext , 377, 218, ''); ?>
		<span class="project-overlay"></span>
	</div> <!-- end project-popup -->
</div> <!-- end .thumb-gallery -->
<?php if ($i%4 == 0) echo("<div class='clear'></div>"); ?>