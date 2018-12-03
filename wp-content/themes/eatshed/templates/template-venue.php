<?php
// Template Name: Venue Single
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner-page'); ?>
<?php get_template_part('partials/link-block-venue'); ?>
<?php get_template_part('partials/opening-times'); ?>
<?php get_template_part('partials/map'); ?>
<?php get_footer(); ?>