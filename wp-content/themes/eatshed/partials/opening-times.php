<section class="opening-times">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <h2 class="u-text-orange opening-times__title">Opening Times</h2>
            </div>
            <div class="column is-4 is-offset-1">
                <?php if( have_rows('venue_opening') ): ?>
                    <?php while ( have_rows('venue_opening') ) : the_row(); ?>
                    <ul class="opening-times__list">
                
                    <li class="opening-times__item">MONDAY: <?php the_sub_field('venue_opening_monday') ?></li>
                    <li class="opening-times__item">TUSDAY: <?php the_sub_field('venue_opening_tuesday') ?></li>
                    <li class="opening-times__item">WEDNESDAY: <?php the_sub_field('venue_opening_wednesday') ?></li>
                    <li class="opening-times__item">THURSDAY: <?php the_sub_field('venue_opening_thursday') ?></li>
                    <li class="opening-times__item">FRIDAY: <?php the_sub_field('venue_opening_friday') ?></li>
                    <li class="opening-times__item">SATURDAY: <?php the_sub_field('venue_opening_saturday') ?></li>
                    <li class="opening-times__item">SUNDAY: <?php the_sub_field('venue_opening_sunday') ?></li>
                </ul>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="column is-5 is-offset-1">
                <h3>Today we are serving until:</h3>
                <span class="opening-times__servingTime u-text-green">
                <?php if( have_rows('venue_serving') ): ?>
                <?php while ( have_rows('venue_serving') ) : the_row(); ?>
                <?php
                    $today = date("l");
                    switch ($today) {
                        case "Monday":
                            echo the_sub_field('venue_serving_monday');
                            break;
                        case "Tuesday":
                            echo the_sub_field('venue_serving_tuesday');
                            break;
                        case "Wednesday":
                            echo the_sub_field('venue_serving_wednesday');
                            break;
                        case "Thursday":
                            echo the_sub_field('venue_serving_thursday');
                            break;
                        case "Friday":
                            echo the_sub_field('venue_serving_friday');
                            break;
                        case "Saturday":
                            echo the_sub_field('venue_serving_saturday');
                            break;
                        default:
                            echo the_sub_field('venue_serving_sunday');
                    }
                ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </span>
            </div>
        </div>
    </div>
</section>