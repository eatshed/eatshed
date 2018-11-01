<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>
<header class="header header--blog">
	<div class="container is-fluid is-flex">
		<nav class=""><?php wp_nav_menu( array('theme_location' => 'categories') ); ?></nav>
		<a class="header__back" href="<?php echo home_url(); ?>">Back to eatshed.com</a>
	</div>
</header>

<div class="container blog-logo">
	<div class="columns is-mobile">
		<div class="column is-half is-offset-one-quarter">
			<a class="logo" href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri() ?>/images/logo-blog.svg" alt="Shed Logo" /></a>
		</div>
	</div>
</div>
