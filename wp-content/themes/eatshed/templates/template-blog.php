<?php
	// Doctype and <head>
    get_template_part( 'partials/header-blog' );
    the_post();
?>

    <section class="blog-list">
        <div class="container">
            <div class="columns is-multiline">
                <?php get_template_part( 'partials/loop', 'post' ); ?>
            </div>
        </div>
    </section>

   
<?php get_footer(); ?>