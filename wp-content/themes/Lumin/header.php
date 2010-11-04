<?php global $lumin_catnum_posts, $lumin_grab_image, $lumin_blog_cat, $lumin_fromblog_recent, $lumin_fromblog_popular, $lumin_fromblog_random, $lumin_home_page_1, $lumin_home_page_2, $lumin_home_projectsnum, $lumin_projects_cat; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/jquery.fancybox-1.2.6.css" type="text/css" media="screen" />

<!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img#logo, p#slogan, .nav li ul, ul#top-navigation li ul a, div#search-icon, div#header div#search-form, div#featured-slider, span.feat-overlay,  div#from-blog ul.control li img, span.project-overlay, div#main-area div.page-block h3, p#slogan-phrase, div#main-area div.page-block div.separator, div#main-area a.readmore, div#main-area a.readmore span, div#from-blog div.content div.post p.meta a.comments-number, div#footer-widget-area a.readmore, div#footer-widget-area a.readmore span, div#from-blog img#subscribe, div.widget h3.title span, h1#post-title span, div.post p.date, div.post p.meta span.comments-number a, div.reply-container, a.comment-reply-link');</script>
<![endif]-->
<!--[if IE 7]>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie7style.css" />
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript">
  document.documentElement.className = 'js';
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php if (is_home()) echo('id="home"');?>>
  <div id="header">
    <div class="container">
      <div id="logo-highlight"></div>
      
      <!-- Logo -->
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" id="logo" /></a>
      
      <p id="slogan"><?php echo(get_option('lumin_tagline')); ?></p>
      
      <?php $menuClass = 'superfish nav';
      $menuID = 'top-navigation';
      $primaryNav = '';
      
      if (function_exists('wp_nav_menu')) {
        $primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) );
      };
      if ($primaryNav == '') { ?>
        <ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
          <li><a href="javascript:alert('Sorry, no home yet.')">Home</a></li>
          <li><a href="javascript:alert('Sorry, no about yet.')">About</a></li>
          <li class="current-cat"><a href="/">Blog</a></li>
          <li><a href="javascript:alert('Sorry, no projects yet.')">Projects</a></li>
        </ul> <!-- end ul.nav -->
      <?php }
      else echo($primaryNav); ?>
      
      <div id="search-icon">
        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" alt="search" id="search"/></a>
      </div> <!-- end search-icon -->
      
      <div id="search-form">
        <form method="get" id="searchform1" action="<?php bloginfo('url'); ?>/">
          <input type="text" value="<?php _e('search this site...','Lumin'); ?>" name="s" id="searchinput" />
        </form>
      </div> <!-- end searchform -->
    </div> <!-- end header/container -->
  </div> <!-- end header -->

  <div id="main-area">
    <div class="container">