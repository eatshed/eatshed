<?php
// Template Name: Events
the_post();
get_header(); 
?>

	<h1><?php the_title(); ?></h1> (BANNER)
	

    <h2>Upcoming Shed events</h2>

    <?php
        $the_query = new WP_Query(array( 'order_by'=>'date', 'order'=>'desc' , 'post_type'=>'events'));
        while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
        <a class="COMPONENT-NAME" href="<?php the_permalink(); ?>" rel="bookmark">
            <h3><?php the_title(); ?></h3>
            <?php the_field('events_description'); ?>
            <img src="<?php the_field('events_image'); ?>" alt="" />
        </a>
    <?php
        endwhile;
    ?>

<?php get_footer(); ?>