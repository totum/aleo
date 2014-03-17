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
	<div class="site-header  lc">
		<header role="banner" class="site-banner">
			<?php
			// Only use h1 for logo on homepage, else span - for SEO.
			if ( is_front_page() ) { ?>
				<h1 class="site-logo"><a href="http://www.aleo.dk"><?php bloginfo('name'); ?></a></h1>
			<?php } else { ?>
				<span class="site-logo"><a href="http://www.aleo.dk"><?php bloginfo('name'); ?></a></span>
			<?php }
			?>
			<span class="site-tagline"><?php bloginfo('description'); ?></span>
		</header>
		<nav role="navigation" class="nav-main  nav">
			<input type="checkbox" id="toggle-nav" aria-hidden="true">
			<label for="toggle-nav" data-icon="menu" aria-hidden="true">Menu</label>
			<?php wp_nav_menu( array( 'container' => false ) ); ?>
		</nav>
	</div>