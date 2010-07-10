<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		
	//footer | gallery category
	add_image_size( 'footer', 123, 123, true );
	
	//footer hover | gallery category
	add_image_size( 'footer2', 377, 218, true );
	
	//page image size
	add_image_size( 'pageimage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//single post image size
	add_image_size( 'postimage', 595, 328, true );
	
	//single post image size 2
	add_image_size( 'postimage2', get_option($shortname.'_thumbnail_width_posts'), get_option($shortname.'_thumbnail_height_posts'), true );
	
	//category_usual.php
	add_image_size( 'catusual', get_option($shortname.'_thumbnail_width_usual'), get_option($shortname.'_thumbnail_height_usual'), true );
	
	//fromblog_post.php
	add_image_size( 'fromblog', 44, 44, true );
	
	//featured.php
	add_image_size( 'featured', 571, 348, true );
	
	//featured.php 2
	add_image_size( 'featured2', 80, 80, true );
	
};
/* --------------------------------------------- */

?>