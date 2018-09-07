<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yeti WP Theme</title>
	<!-- Show the wp_enqueue function where to insert the yeti.css stylesheet -->
	<?php wp_head(); ?>
</head>
<body>

	<!-- Display the menu -->
	<?php wp_nav_menu(array( 'theme_location'=>'primary' )); ?>
