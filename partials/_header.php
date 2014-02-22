<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body>
	<header class="site-header  lc  clear">
		<h1 class="site-logo"><a href="http://www.aleo.dk"><?php bloginfo('name'); ?></a></h1>
		<h2 class="site-tagline  h4"><?php bloginfo('description'); ?></h2>
	</header>
	<nav class="nav-main  nav  lc  clear">
		<?php wp_nav_menu( array( 'container' => false ) ); ?>
	</nav>