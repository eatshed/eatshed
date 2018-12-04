<section class="map">
    <div class="container">
        <div class="columns is-multiline">
            <?php if(get_field('venue_location')): ?>
            <div class="column is-10 is-offset-1">
                <h2 class="u-text-orange map__title has-text-centered">Location</h2>
                <p class="map__location has-text-centered"><?php the_field('venue_location'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="column is-10 is-offset-1 map__map">
                <?php the_field('venue_map'); ?>
            </div>
            <div class="column is-10 is-offset-1 u-flex-center">
                <a class="btn btn--primary" href="https://www.google.com/maps?ll=53.392945,-1.478097&z=17&t=m&hl=en-GB&gl=GB&mapclient=embed&daddr=Cutlery+Works+B6074+Sheffield+S3+8AT@53.3929445,-1.4780968">Get directions</a>
            </div>
        </div>
    </div>
</section>