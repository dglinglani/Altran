<?php

	add_theme_support( 'custom-logo', array(
		'height'      => 43,
		'width'       => 187,
	) );

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Altran' ),
	) );

	
?>