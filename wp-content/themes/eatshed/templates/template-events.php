<?php
// Template Name: Events
the_post();
get_header(); 
?>

<?php include 'partials/message-block.php'; ?>
 <?php include 'partials/banner.php'; ?>  <!-- can I include these here? -->
<div class="container">
    <h2>Upcoming Shed events</h2>
    <div class="columns is-multiline">
        <?php
            $the_query = new WP_Query(array( 'order_by'=>'date', 'order'=>'desc' , 'post_type'=>'events'));
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <a class="spotlight column is-one-third" href="<?php the_permalink(); ?>" rel="bookmark">
                <div class="spotlight__img">
                    <img src="<?php the_field('events_image'); ?>" alt="" />
                </div>
                <div class="spotlight__text">
                    <h3 class="spotlight__title"><?php the_title(); ?></h3>
                    <?php the_field('events_description'); ?>
                </div>
            </a>
        <?php
            endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>