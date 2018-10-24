<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>

<div class="container">

<header role="banner">
	<nav><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
</header><!-- /page-masthead -->