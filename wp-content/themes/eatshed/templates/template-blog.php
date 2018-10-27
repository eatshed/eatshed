<?php
	// Doctype and <head>
    get_template_part( 'partials/head' );
    the_post();
?>
<header role="banner">
DIFFERENT HEADER
	<div class="container">
	    <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Shed Logo" /></a>
		<nav><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
	</div>
</header><!-- /page-masthead -->

    <section class="blog">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-6">
                    <h2><?php the_field('blog_title');?></h2>
                </div>
                <div class="col-12 offset-sm-0 col-md-5 col-lg-5 offset-lg-1">
                    Test
                </div>
            </div>
        </div>
    </section>
    <section class="blog-list">
        <div class="angle angle-top angle-down angle-blue"></div>
        <div class="wrapper">
                <?php get_template_part( 'partials/loop', 'post' ); ?>
        </div>
    </section>

   
<?php get_footer(); ?>