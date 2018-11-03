<?php
// Template Name: Contact
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner'); ?>

<section>
    <div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    
    <?php echo do_shortcode("[contact-form-7 id='174' title='Contact form 1']"); ?>

    <div>
</section>

<?php get_template_part( 'partials/signup-block'); ?>
<?php get_footer(); ?>