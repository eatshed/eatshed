<?php
// Template Name: Events
the_post();
get_header(); 
?>

<?php get_template_part( 'partials/message-block'); ?>
<?php get_template_part( 'partials/banner'); ?>
<section class="event-intro u-spacing-bottom">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <p>(WILL UPDATE WHEN WE DO EVENT POSTS) Established 2018, Shed is the healthy living lifestyle brand, centered around 100% plant-based foods.
    We create affordable, super-tasty plant-based food that goes big on nutrition and even bigger on flavour. And we’re on a mission to inspire and to nourish the growing number of people embracing a plant-based lifestyle.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="event-info u-spacing-bottom">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <h2 class="u-text-orange event-info__title has-text-centered">Event Inofrmation</h2>
            </div>
            <div class="column is-5 is-offset-1">
                <ul class="event-info__list">
                    <li class="event-info__item">
                        <h5 class="u-text-orange">HOST:</h5>
                        <p>SHED & INDUSTRIAL DESIGN CO</p>
                    </li>
                    <li class="event-info__item">
                        <h5 class="u-text-orange">DATE:</h5>
                        <p>01/01/18 - 02/01/18</p>
                    </li>
                    <li class="event-info__item">
                        <h5 class="u-text-orange">Time:</h5>
                        <p>09.00 - 17.00</p>
                    </li>
                </ul>
            </div>
            <div class="column is-5">
                <ul class="event-info__list">
                    <li class="event-info__item">
                        <h5 class="u-text-orange">PRICE:</h5>
                        <p>FREE or £</p>
                    </li>
                    <li class="event-info__item">
                        <h5 class="u-text-orange">LOCATION:</h5>
                        <p>CUTLREY WORKS, SHEFFIELD</p>
                        <a href="/venues">Get Directions</a>
                    </li>
                </ul>
            </div>
</section>

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