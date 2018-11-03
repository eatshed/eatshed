<section class="banner banner--event">
    <div class="banner__container container">
        <h1 class="banner__title">- <?php the_title(); ?> -</h1>
        <?php if(get_field('event_booking_link')): ?>
            <a class="btn btn--primary" href="<?php the_field('event_booking_link'); ?>">Book Now</a>
        <?php endif; ?>
    </div>
</section>