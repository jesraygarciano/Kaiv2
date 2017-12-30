<?php
	
	// Register Nav Walker class_alias
	require_once('wp-bootstrap-navwalker.php');

	//  Theme Support
	function kai_theme_setup(){
		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	}

	add_action('after_setup_theme','kai_theme_setup');