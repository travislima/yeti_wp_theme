<footer>
	<p>This is the BIG Footer</p>

	<!-- Display Footer Menu -->
<?php wp_nav_menu(array( 'theme_location'=>'secondary' )); ?>

</footer>
<!-- Show the wp_enqueue function where to insert the yeti.js script -->
<?php wp_footer(); ?>


</body>
</html>