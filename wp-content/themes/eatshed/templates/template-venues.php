<?php
// Template Name: Venues
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner'); ?>

<div class="content-block container">
    <div class="columns">
    <?php if( have_rows('venue') ): ?>
        <?php while ( have_rows('venue') ) : the_row(); ?>
        <div class="column is-half venue-link">
            <div class="venue-link__inner" style="background-image: url(<?php the_sub_field('venue_image') ?>);">
                <h2><?php the_sub_field('venue_title') ?></h2>
                <p><?php the_sub_field('venue_description') ?></p>
                <a class="btn btn--primary" href="<?php the_sub_field('venue_button_link') ?>"><?php the_sub_field('venue_button_title') ?></a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>