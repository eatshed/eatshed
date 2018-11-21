<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>

<header class="header header--blog">
	<div class="container is-fluid">
		<div class="columns is-mobile is-multiline">
			<div class="column is-half-mobile is-2-tablet is-1-desktop is-flex">
				<a class="logo--blog" href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri() ?>/images/nn-logo.svg" alt="NN Logo" /></a>
			</div>
			<div class="column header__burgerWrap is-offset-4-mobile is-2-mobile">
				<a class="header__burger" href="#"><span></span></a>
			</div>
			<div class="column is-12-mobile header__column header__nav--blog">
				<div class="is-flex header__navWrap">
					<nav class="header__nav u-flex-center"><?php wp_nav_menu( array('theme_location' => 'categories') ); ?></nav>
					<a class="header__back" href="<?php echo home_url(); ?>">Back to eatshed.com</a>
				</div>
			</div>
		</div>
	</div>
</header><!-- /page-masthead -->
