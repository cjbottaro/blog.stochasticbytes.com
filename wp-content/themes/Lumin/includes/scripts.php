	<?php global $shortname;
	
	if (is_front_page()) echo('<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>');
	
	//on Homepage; Featured slider is activated
	if (is_front_page() && (get_option('lumin_featured')=='on')) { ?>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easing.1.3.js"></script>
	<?php }; ?>
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/init.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-1.2.6.pack.js"></script>
	<script type="text/javascript">
		jQuery("a[rel^='fancybox']").fancybox({
				'overlayOpacity'	:	0.7,
				'overlayColor'		:	'#000000',
				'zoomSpeedIn'		:	500,
				'zoomSpeedOut'		:	500
			});
	</script>

	<script type="text/javascript">
	//<![CDATA[
		<?php //on Homepage; Featured slider is activated
		if (is_front_page() && (get_option($shortname.'_featured')=='on')) { ?>
			jQuery('#s1').cycle({
				timeout: 0, 
				speed: 300,
				fx: '<?php echo(get_option($shortname.'_slider_effect')); ?>'
			});
							
			var $featured_area = jQuery('#featured-slider');
			var $featured_item = jQuery('#featured-slider div#slider-control div.featitem');
			var $slider_control = jQuery('#featured-slider div#slider-control');
			var $image_container = jQuery('div#s1 > div');
			
			var ordernum;
			var pause_scroll = false;
					
			$featured_item.fadeTo("fast", 0.5);
			$slider_control.children("div.featitem.active").fadeTo("fast", 1);
			$image_container.css("background-color","#000000");
			
			$image_container.hover(
				function () {
					jQuery(this).find("img").fadeTo("fast", 0.7);
				}, 
				function () {
					jQuery(this).find("img").fadeTo("fast", 1);
				}
			);

			<?php if (get_option($shortname.'_pause_hover') == 'on') { ?>				
				$featured_area.mouseover(function(){
					pause_scroll = true;
				}).mouseout(function(){
					pause_scroll = false;
				});
			<?php }; ?>		

			function gonext(this_element){
				$slider_control
				.children("div.featitem.active")
					.fadeTo("fast", 0.5)
					.removeClass('active');
				this_element.addClass('active');
				$slider_control.children("div.featitem.active").fadeTo("fast", 1);
				ordernum = this_element.find("span.order").html();
				jQuery('#s1').cycle(ordernum - 1);
			} 
			
			$featured_item.click(function() {
				clearInterval(interval);
				gonext(jQuery(this)); 
				return false;
			});
			
			var auto_number;
			var interval;
			
			$featured_item.bind('autonext', function autonext(){
				if (!(pause_scroll)) gonext(jQuery(this)); 
				return false;
			});

			<?php if (get_option($shortname.'_slider_auto') == 'on') { ?>
				interval = setInterval(function () {
					auto_number = $slider_control.find("div.featitem.active span.order").html();
					if (auto_number == $featured_item.length) auto_number = 0;
					$featured_item.eq(auto_number).trigger('autonext');
				}, <?php echo(get_option($shortname.'_slider_autospeed')); ?>);
			<?php }; ?>

		<?php }; ?>

		<?php //on Home, Projects category/subcategory page
		if (is_front_page() || is_category($projects_cat) || in_subcat($projects_cat,$cat)) { ?>
			<?php if (is_front_page()) { ?>
				jQuery("div#from-blog").tabs({ fx: { opacity: 'toggle' } });
			<?php }; ?>	

			var $project_item = <?php if (is_front_page()) { ?>jQuery('div.project-item');<?php } else { ?>jQuery('div.thumb-gallery');<?php } ?>
			
			$project_item.mouseenter(function(e) {
				jQuery(this).children("img.preview-thumb").fadeTo("fast", 0.5);			
				move_thumb(jQuery(this),e);
				jQuery(this).css('z-index','15').children("div.project-popup").css({'top': y + 10,'left': x + 20,'display':'block'});
			}).mousemove(function(e) {
				move_thumb(jQuery(this),e);	
				jQuery(this).children("div.project-popup").css({'top': y + 10,'left': x + 20});
			}).mouseleave(function() {
				jQuery(this).css('z-index','1')
					.children("img.preview-thumb")
					.fadeTo("fast", 1)
					.end()
				.children("div.project-popup")
				.animate({"opacity": "hide"}, "fast");
			});
			
			function move_thumb(this_element,event_name){
				x = event_name.pageX - this_element.offset().left;
				y = event_name.pageY - this_element.offset().top;
			};
			
			jQuery(".js #featured-slider, .js div#recent-projects, .js div#from-blog div.content").show(); //prevents a flash of unstyled content
		<?php }; ?>	
	//]]>	
	</script>

	<?php if (get_option($shortname.'_disable_toptier') == 'on') { ?>
		<script type="text/javascript">
			<?php echo('jQuery("ul.nav > li > ul").prev("a").attr("href","#");'); ?>
		</script>
	<?php }; ?>