<?php
// Template Name: Venues
the_post();
get_header(); 
?>
<?php get_template_part( 'partials/banner'); ?>
<?php get_template_part('partials/link-block'); ?>
<?php get_template_part('partials/opening-times'); ?>
<?php get_template_part('partials/map'); ?>

<div class="container">
    <div class="columns is-multiline">
        <?php
            $the_query = new WP_Query(array( 'order_by'=>'date', 'order'=>'desc' , 'post_type'=>'events'));
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <a class="spotlight column is-one-third" href="<?php the_permalink(); ?>" rel="bookmark">
                <div class="spotlight__img">
                    <img src="<?php the_field('event_image'); ?>" alt="" />
                </div>
                <div class="spotlight__text">
                    <h3 class="spotlight__title"><?php the_title(); ?></h3>
                    <?php the_field('event_description'); ?>
                </div>
            </a>
        <?php
            endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>