<?php get_template_part( 'partials/header-blog' ); ?>

<?php if ( have_posts() ): ?>

<h1><?php echo single_cat_title( '', false ); ?></h1>
<div class="category__description">
	<?php echo category_description(); ?>
</div>


<section class="blog-list">
    <div class="container">
        <div class="columns is-multiline">
				
		<?php while ( have_posts() ) : the_post(); ?>
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

<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>

<?php get_footer(); ?>