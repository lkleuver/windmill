<!DOCTYPE html>
<html <?php language_attributes( $doctype ) ?>>
<head>

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Blueprint CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/print.css" type="text/css" media="print"> 
	<!--[if lt IE 8]>
	  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/ie.css" type="text/css" media="screen, projection">
	<![endif]-->
	
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<!-- Feed autodiscovery -->
	<link rel="alternate" type="application/rss+xml" title="<?php htmlentities(bloginfo('name')); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php htmlentities(bloginfo('name')); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="page" class="container">

	<div id="header" role="banner" class="span-24 last">
		<div id="headerimg">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div><!-- id="headerimg" -->
	</div><!-- id="header" -->
	
	<div id="nav" role="navigation" class="span-24 last">
			<?php wp_page_menu('depth=2&show_home=1&sort_column=menu_order,post_title'); ?>
	</div><!-- id="nav" -->
