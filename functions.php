<?php

// Post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 80, 80, true ); // Thumbnail. Used in grids, galleries
add_image_size( 'small', 480, 480, true); // Thumbnail@2 and for small devices
add_image_size( 'medium', 960, 960, true ); // Medium, for small HDPI and regular
add_image_size( 'large', 1560, 1560, true ); // Large for Medium @2
add_image_size( 'xlarge', 2000, 2000, true ); // Xlarge for src link
add_image_size( 'full', 9999, 9999 ); // Full-size image for whatever!

function register_my_menus() {
	register_nav_menus(
		array( 'site-nav' => __( 'Site Navigation' ))
	);
}
add_action( 'init', 'register_my_menus' );

function load_scripts() {
	if (!is_admin()) {
		// !Note: Remember to set scripts to load in footer by last parameter set to true, unless you want it loaded in wp_head.

		// Deregister jquery
		wp_deregister_script('jquery');
		// Register jQuery + much more from JSDelivr. +Cache, +Single http request, +speed, -own bandwidth
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdn.jsdelivr.net/g/jquery@2.1,html5shiv@3.7,respond@1.4,retinajs@1.1", false, null, false);
		// Site specific JS
		wp_register_script('picturefill', get_template_directory_uri() . '/js/picturefill.js', false, null, false);
		wp_register_script('fotorama', get_template_directory_uri() . '/lib/fotorama/fotorama.js', false, null, false);
		// wp_register_script('galleria', get_template_directory_uri() . '/js/galleria/galleria-1.3.5.min.js', array( 'jquery' ), null, true);
		//wp_register_script('aleo', get_template_directory_uri() . '/js/aleo.js', array( 'jquery', 'picturefill' ), '1', true);

		wp_register_script('aleo', get_template_directory_uri() . '/js/aleo.js', array( 'jquery', 'picturefill' ), '1', false);

		// Load all

		wp_enqueue_script('jquery');
		wp_enqueue_script('fotorama');
		wp_enqueue_script('picturefill');

		// wp_enqueue_script('galleria');

		wp_enqueue_script('aleo');

		// Loaded with conditionals to prevent bloat.

		// Make site parameters available to JS scripts
		wp_localize_script('aleo', 'SiteParameters', array( 
		    'site_url' => get_site_url(),
		    'theme_directory' => get_template_directory_uri()
		)); 
		
	}
}
add_action('wp_enqueue_scripts', 'load_scripts');



?>