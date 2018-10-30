<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>
<header role="banner">
	<div class="container">
	    <a class="logo" href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri() ?>/images/logo-blog.svg" alt="Shed Logo" /></a>
		<nav><?php wp_nav_menu( array('theme_location' => 'categories') ); ?></nav>
	</div>
</header><!-- /page-masthead -->
