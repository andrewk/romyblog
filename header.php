<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46393465-1', 'romysaizunde.com');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

<header class="row" role="banner">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/img/header.jpg">
			</a></h1>
</header>

<nav role="navigation">
	<a href="<?php echo home_url(); ?>">home</a>
	<a href="<?php echo home_url(); ?>/shop">shop</a>
	<a href="<?php echo home_url(); ?>/paintings">paintings</a>
	<a href="<?php echo home_url(); ?>/writing">writing</a>
	<a href="<?php echo home_url(); ?>/about">about</a>
	<a href="<?php echo home_url(); ?>/newsletter">newsletter</a>
</nav>

<section class="container row" role="document">
