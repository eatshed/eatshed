<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>
<header class="header">
	<div class="container is-fluid">
		<div class="columns">
			<div class="column is-4">
				<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Shed Logo" /></a>
			</div>
			<div class="column is-8 is-flex header__column">
				<div class="header__social">
					<a href="#na" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-youtube.svg" alt="Youtube" /></a>
					<a href="#na" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-insta.svg" alt="Instagram" /></a>
					<a href="#na" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.svg" alt="Facebook" /></a>
				</div>
				<nav class="nav"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
			</div>
		</div>
	</div>
</header><!-- /page-masthead -->
<?php get_template_part( 'partials/message-block'); ?>
