<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>
<header class="header header--blog">
	<div class="container is-fluid is-flex u-flex-center">
		<a class="logo" href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri() ?>/images/nn-logo.svg" alt="NN Logo" /></a>
		<nav class="header__nav u-flex-center"><?php wp_nav_menu( array('theme_location' => 'categories') ); ?></nav>
		<a class="header__back" href="<?php echo home_url(); ?>">Back to eatshed.com</a>
	</div>
</header>

