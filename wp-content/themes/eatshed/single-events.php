<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partials/banner-event'); ?>

	<section class="event-intro u-spacing-bottom">
		<div class="container">
			<div class="columns is-multiline">
				<div class="column is-10 is-offset-1">
					<p><?php the_content(false, false); ?></p>
					<?php if(get_field('event_booking_link')): ?>
						<a class="btn btn--primary" href="<?php the_field('event_booking_link'); ?>">Book Now</a>
					<?php endif; ?>
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
		</div>
	</section>
<?php endwhile; ?>
<?php include 'partials/signup-block.php'; ?>

<?php get_footer(); ?>