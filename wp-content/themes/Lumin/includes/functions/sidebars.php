<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="widget"><div class="content-top"></div>',
		'after_widget' => '</div> <!-- end .widget-content --><div class="content-bottom"></div></div> <!-- end .widget -->',
		'before_title' => '<h3 class="title"><span>',
		'after_title' => '</span></h3><div class="widget-content">',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name' => 'Footer',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div> <!-- end .widget-content --></div> <!-- end .footer-widget -->',
    'before_title' => '<h4>',
    'after_title' => '</h4><div class="widget-content">',
    ));
?>