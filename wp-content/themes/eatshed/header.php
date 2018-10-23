<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>

<div class="container">

<header role="banner">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	<h2><?php bloginfo('description'); ?></h2>
	<nav><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
</header><!-- /page-masthead -->