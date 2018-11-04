<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partials/banner-page'); ?>

<section class="article">
	<div class="container">		
		<div class="columns is-multiline">
            <div class="column is-8 is-offset-2">
				<article>
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
</section>


<?php endwhile; ?>

<?php get_template_part( 'partials/signup-block'); ?>
<?php get_footer(); ?>