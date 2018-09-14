<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Yeti WP Theme</title>

		<!-- Show the wp_enqueue function where to insert the yeti.css stylesheet -->
		<?php wp_head(); ?>

</head>

	<?php 
		if( is_front_page() ):
			$yeti_classes = array( 'yeti-class', 'my_class' );
		else:	
			$yeti_classes = array( 'no-yeti-class' );
		endif;	
	?>	

<body <?php body_class(); ?>>


	<!-- Display the custom logo -->

	<img alt="" width="100px" height="100px" src="<?php the_custom_logo(); ?>

	<!-- Display the menu -->
	<?php wp_nav_menu(array( 'theme_location'=>'primary' )); ?>


	<img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">

