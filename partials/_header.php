<?php include (TEMPLATEPATH . '/ore/ore_template-head.php'); ?>

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
			<div class="site-tagline"><div class="tagline-wrap"><p><?php bloginfo('description'); ?></p></div></div>
		</header>
		<nav role="navigation" class="nav-main  nav">
			<input type="checkbox" id="toggle-nav" aria-hidden="true">
			<label for="toggle-nav" data-icon="menu" aria-hidden="true" onclick>&#9776;</label>
			<?php wp_nav_menu( array( 'container' => false ) ); ?>
		</nav>
	</div>