<?php
	// Doctype and <head>
	get_template_part( 'partials/header-blog' );
?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="article">
	<div class="container article__header u-spacing-bottom">
		<div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
				<p class="u-text-green has-text-centered"><?php the_category( ', ' ); ?></p>
				<h1 class="article__title u-text-brown has-text-centered"><?php the_title(); ?></h1>
				<p class="u-text-brown has-text-centered"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></p>
			</div>
		</div>
	</div>
	<div class="container u-spacing-bottom">
		<div class="article__banner">
			<img src="https://source.unsplash.com/random/1200x600"/>
		</div>
	</div>
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

<?php get_footer(); ?>