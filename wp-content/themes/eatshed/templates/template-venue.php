<?php
// Template Name: Venue Single
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner'); ?>
<?php get_template_part('partials/link-block'); ?>
<?php get_template_part('partials/opening-times'); ?>
<?php get_template_part('partials/map'); ?>
<?php get_footer(); ?>