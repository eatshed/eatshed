<?php
    get_template_part( 'partials/header-blog' );
    the_post();
?>

<div class="container blog-logo">
	<div class="columns is-mobile">
		<div class="column is-half is-offset-one-quarter">
			<a class="logo" href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri() ?>/images/logo-blog.svg" alt="Shed Logo" /></a>
		</div>
	</div>
</div>

<?php get_template_part('partials/image-carousel'); ?>

<section class="blog-list u-spacing-bottom">
    <div class="container">
        <div class="columns is-multiline">
            <?php get_template_part( 'partials/loop', 'post' ); ?>
        </div>
    </div>
</section>

   
<?php get_footer(); ?>