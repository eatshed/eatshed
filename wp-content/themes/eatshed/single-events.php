<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partials/banner-event'); ?>

	<section class="event-intro u-spacing-bottom">
		<div class="container">
			<div class="columns is-multiline">
				<div class="column is-10 is-offset-1">
					<p><?php the_content(false, false); ?></p>
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
						<?php if(get_field('event_host')): ?>
						<li class="event-info__item">
							<h5 class="u-text-orange">HOST:</h5>
							<p> <?php the_field('event_host'); ?></p>
						</li>
						<?php endif; ?>

						<?php if(get_field('event_date')): ?>
						<li class="event-info__item">
							<h5 class="u-text-orange">DATE:</h5>
							<p><?php the_field('event_date'); ?></p>
						</li>
						<?php endif; ?>

						<?php if(get_field('event_time')): ?> 
						<li class="event-info__item">
							<h5 class="u-text-orange">Time:</h5>
							<p><?php the_field('event_time'); ?></p>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="column is-5">
					<ul class="event-info__list">
						<?php if(get_field('event_price')): ?>
						<li class="event-info__item">
							<h5 class="u-text-orange">PRICE:</h5>
							<p><?php the_field('event_price'); ?></p>
						</li>
						<?php endif; ?>

						<?php if(get_field('event_location')): ?> 
						<li class="event-info__item">
							<h5 class="u-text-orange">LOCATION:</h5>
							<p><?php the_field('event_location'); ?></p>
							<a href="<?php the_field('event_directions_link'); ?>">Get Directions</a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<?php if(get_field('event_booking_link')): ?>
				<a class="btn btn--primary" href="<?php the_field('event_booking_link'); ?>">Book Now</a>
			<?php endif; ?>
		</div>
	</section>

	<div class="container">
    <h2 class="u-text-orange">Upcoming Shed events</h2>
    <div class="columns is-multiline">
        <?php
            $the_query = new WP_Query(array('posts_per_page' => 3, 'order_by'=>'date', 'order'=>'desc' , 'post_type'=>'events'));
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <a class="spotlight column is-one-third" href="<?php the_permalink(); ?>" rel="bookmark">
                <div class="spotlight__img">
                    <img src="<?php the_field('event_image'); ?>" alt="" />
                </div>
                <div class="spotlight__text">
                    <h3 class="spotlight__title"><?php the_title(); ?></h3>
                    <span class="btn btn--secondary"><?php the_field('event_date'); ?></span>
                </div>
            </a>
        <?php
            endwhile;
        ?>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>