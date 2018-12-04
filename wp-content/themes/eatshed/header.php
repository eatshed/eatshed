<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>
<header class="header">
	<div class="header__wrap">
		<div class="container is-fluid">
			<div class="columns">
				<div class="column is-4 is-flex">
					<a href="<?php echo home_url(); ?>">
						<img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Shed Logo" />
						<img class="logo--mobile" src="<?php echo get_template_directory_uri() ?>/images/logo-large.svg" alt="Shed Logo" />
					</a>
					<div class="header__social--mobile">
						<a href="<?php the_field('youtube', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-youtube.svg" alt="Youtube" /></a>
						<a href="<?php the_field('instagram', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-insta.svg" alt="Instagram" /></a>
						<a href="<?php the_field('facebook', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.svg" alt="Facebook" /></a>
					</div>
				</div>
				<div class="column is-8 is-flex header__column">
					<div class="header__social">
						<a href="<?php the_field('youtube', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-youtube.svg" alt="Youtube" /></a>
						<a href="<?php the_field('instagram', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-insta.svg" alt="Instagram" /></a>
						<a href="<?php the_field('facebook', 'option'); ?>" class="header__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.svg" alt="Facebook" /></a>
					</div>
					<nav class="nav"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
					<div class="dropdown is-right more-menu">
						<ul class="menu">
							<li class="menu-item">
								<a href="#na" class="more-trigger">More +</a>
							</li>
						</ul>
						<div class="dropdown-menu" id="dropdown-menu3" role="menu">
							<div class="dropdown-content">
							<a href="#" class="dropdown-item">
							GET EBOOK!
							</a>
							<a href="#" class="dropdown-item">
								OUR STORY
							</a>
							<a href="#" class="dropdown-item">
							GET IN TOUCH
							</a>
							<a href="#" class="dropdown-item">
							CATERING
							</a>
							<a href="#" class="dropdown-item">
							DELIVERY
							</a>
							</div>
						</div>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'partials/message-block'); ?>
</header><!-- /page-masthead -->
