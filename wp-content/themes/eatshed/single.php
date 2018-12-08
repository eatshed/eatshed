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
		<?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( '' );
                }
            ?>
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

<section class="blog-list">
    <div class="container">
		<h2>From the blog</h2>
        <div class="columns is-multiline">
			<?php
				$the_query = new WP_Query(array('posts_per_page' => 3, 'order_by'=>'date', 'order'=>'desc' , 'post_type'=>'post'));
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<a class="blog-list__item spotlight column is-one-third" href="<?php the_permalink(); ?>" rel="bookmark">
				<div class="spotlight__container">
					<div class="spotlight__img">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( '' );
						}
					?>
					</div>
					<div class="spotlight__text">
						<span class="spotlight__category">
							<?php foreach((get_the_category()) as $category)
								{ echo $category->cat_name . '  '; }
							?>
						</span>
						<h3 class="spotlight__title"><?php the_title(); ?></h3>
						<span class="spotlight__author">By <?php the_author(); ?> </span>

					</div>
				</div>
			</a>
			<?php endwhile; ?>
        </div>
    </div>
</section>


<?php endwhile; ?>

<?php get_footer(); ?>