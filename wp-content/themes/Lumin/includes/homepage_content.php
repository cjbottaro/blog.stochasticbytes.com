<h3><?php the_title(); ?></h3>
<?php if (!is_front_page()) { ?>
	<div class="separator"></div>
	<?php global $more;   
	      $more = 0; 
};
	the_content(""); ?>
<?php if (!is_front_page()) { ?>
	<a class="readmore" href="<?php the_permalink(); ?>"><span><?php _e('read more','Lumin'); ?></span></a>
<?php }; ?>