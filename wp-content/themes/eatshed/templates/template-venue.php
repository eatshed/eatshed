<?php
// Template Name: Venue Single
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner-page'); ?>
<div class="columns is-multiline">
    <div class="column is-8 is-offset-2 u-center">
        <?php the_content(); ?>
    </div>
</div>
<?php get_template_part('partials/link-block-venue'); ?>
<?php get_template_part('partials/opening-times'); ?>
<?php get_template_part('partials/map'); ?>
<?php get_footer(); ?>