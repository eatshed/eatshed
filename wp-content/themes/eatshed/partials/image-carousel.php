<?php
    $args = array (
        'showposts' => 10,
        'paged' => $paged
    );
    query_posts( $args );
?>
<section class="image-carousel container u-spacing-bottom">
        <div class="image-carousel__container">
        <?php while ( have_posts() ) : the_post();
            $image = get_field('post_image');
            $featured = get_field('featured_post');
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
        ?>

        <?php if ( 'true' == $featured ): ?>
        <div class="image-carousel__item" style="background-image: url(<?php echo $thumb_url ?>);">
            <div class="image-carousel__content">
                <p class="image-carousel__category has-text-centered">
                <span class="spotlight__category">
                    <?php foreach((get_the_category()) as $category)
                        { echo $category->cat_name . '  '; }
                    ?>
                </span></p>
                <h2 class="image-carousel__title has-text-centered"><?php the_title(); ?></h2>
                <p class="image-carousel__author has-text-centered">By <?php the_author(); ?></p>
                <a class="has-text-centered" href="<?php the_permalink(); ?>" rel="bookmark">Read article</a>
            </div>
        </div>

    <?php endif; ?>
<?php endwhile; ?>
    </div>
</section>
<div class="carousel__nav">
    <img class="carousel__arrow carousel__arrow--next" src="<?php echo get_template_directory_uri() ?>/images/btn-prev.svg" alt="prev" />
    <img class="carousel__arrow carousel__arrow--prev" src="<?php echo get_template_directory_uri() ?>/images/btn-next.svg" alt="next" />
</div>
