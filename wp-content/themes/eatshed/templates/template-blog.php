<?php
	// Doctype and <head>
    get_template_part( 'partials/header-blog' );
    the_post();
?>

    <section class="blog-list">
        <div class="angle angle-top angle-down angle-blue"></div>
        <div class="wrapper">
                <?php get_template_part( 'partials/loop', 'post' ); ?>
        </div>
    </section>

   
<?php get_footer(); ?>