jQuery(function(){
	jQuery.noConflict();
	
	jQuery('ul.superfish').superfish({ 
		delay:       200,                            // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'fast',                          // faster animation speed 
		autoArrows:  true,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	var $searchform = jQuery('div#header div#search-form');
	var $searchinput = jQuery('div#header div#search-form input#searchinput');
	var $searchvalue = $searchinput.val();
	
	$searchform.css("right","60px");
	
	jQuery("div#header div#search-icon a img#search").click(function(){
		if (jQuery("div#header div#search-form:hidden").length == 1)	
			$searchform.animate({"right": "30", "opacity": "toggle"}, "slow")
		else
			$searchform.animate({"right": "60", "opacity": "toggle"}, "slow");
		return false;
	});
	
	if (!((jQuery("div.entry").length) == 0)) jQuery("div.entry:last").addClass("last");
		
	$searchinput.focus(function(){
		if (jQuery(this).val() == $searchvalue) jQuery(this).val("");
	}).blur(function(){
		if (jQuery(this).val() == "") jQuery(this).val($searchvalue);
	});
	
	jQuery("div.gallery-postimage a").hover(function(){
		jQuery(this).children("span.overlay").fadeIn("slow");
	}, function() {
		jQuery(this).children("span.overlay").fadeOut("slow");
	});
	
	if (!((jQuery("div.footer-widget").length) == 0)) {
		jQuery("div.footer-widget").each(function (index, domEle) {
			// domEle == this
			if ((index+1)%3 == 0) jQuery(domEle).addClass("last").after("<div class='clear'></div>");
		});
	};
	
});