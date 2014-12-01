<?php

	add_action( 'after_setup_theme', 'opentabletech_setup' );
	function opentabletech_setup() {
		
		load_theme_textdomain( 'opentabletech', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		global $content_width;
		
		if ( ! isset( $content_width ) ) $content_width = 640;
		
		register_nav_menus(
			array( 'main-menu' => __( 'Main Menu', 'opentabletech' ) )
		);
	}
	
	add_action( 'wp_enqueue_scripts', 'opentabletech_load_scripts' );
	function opentabletech_load_scripts() {
		wp_enqueue_script( 'jquery' );
	}
			
	add_theme_support( 'post-thumbnails' ); 
	
		
?>