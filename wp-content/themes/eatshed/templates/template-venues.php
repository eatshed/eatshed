<?php
// Template Name: Venues
the_post();
get_header(); 
?>

<?php get_template_part( 'partials/message-block'); ?>
<?php get_template_part( 'partials/banner'); ?>
<?php get_template_part('partials/link-block.php'); ?>
<?php get_template_part('partials/opening-times.php'); ?>

<!-- Opening times component -->
<section class="opening-times">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <h2 class="u-text-orange opening-times__title">Opening Times</h2>
            </div>
            <div class="column is-4 is-offset-1">
                <ul class="opening-times__list">
                    <li class="opening-times__item">MONDAY: closed</li>
                    <li class="opening-times__item">TUSDAY: closed</li>
                    <li class="opening-times__item">WEDNESDAY: 09.00 - 21.00</li>
                    <li class="opening-times__item">THURSDAY: 09.00 - 21.00</li>
                    <li class="opening-times__item">FRIDAY: 09.00 - 23.00</li>
                    <li class="opening-times__item">SATURDAY: 09.00 - 23.00</li>
                    <li class="opening-times__item">SUNDAY: 09.00 - 21.00</li>
                </ul>
            </div>
            <div class="column is-5 is-offset-1">
                <h3>Today we are serving until:</h3>
                <span class="opening-times__servingTime u-text-green">11PM</span>
            </div>
        </div>
    </div>
</section>

<!-- Google maps plugin -->
<section class="map">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <h2 class="u-text-orange map__title has-text-centered">Location</h2>
                <p class="u-text-green map__location has-text-centered">Cutlery Works (Upstairs), 73-101 Neepsend Lane, Sheffield, S3 8AT</h2>
            </div>
            <div class="column is-10 is-offset-1 map__map">
                Map widget
            </div>
            <div class="column is-10 is-offset-1 map__map u-flex-center">
                <a class="btn btn--primary" href="">More venues</a>
            </div>
        </div>
    </div>
</section>

<div class="container">
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