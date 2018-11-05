<section class="image-carousel container u-spacing-bottom">
    <div class="image-carousel__container">
    <?php if ( 'true' == the_field('featured_post') ): ?>
        <div class="image-carousel__item" style="background-image: url(https://source.unsplash.com/random/1200x600);">
            <div class="image-carousel__content">
                <p class="image-carousel__category has-text-centered">CATEGORY</p>
                <h2 class="image-carousel__title has-text-centered">THE BEST PLANT-BASED PROBIOTIC FOODS TO KEEP YOUR GUT HAPPY</h2>
                <p class="image-carousel__author has-text-centered">BY WRITERS NAME</p>
            </div>
        </div>
        <div class="image-carousel__item" style="background-image: url(https://source.unsplash.com/random/1200x600);">
            <div class="image-carousel__content">
                <p class="image-carousel__category has-text-centered">CATEGORY</p>
                <h2 class="image-carousel__title has-text-centered">THE BEST PLANT-BASED PROBIOTIC FOODS TO KEEP YOUR GUT HAPPY</h2>
                <p class="image-carousel__author has-text-centered">BY WRITERS NAME</p>
            </div>
        </div>
        <div class="image-carousel__item" style="background-image: url(https://source.unsplash.com/random/1200x600);">
            <div class="image-carousel__content">
                <p class="image-carousel__category has-text-centered">CATEGORY</p>
                <h2 class="image-carousel__title has-text-centered">THE BEST PLANT-BASED PROBIOTIC FOODS TO KEEP YOUR GUT HAPPY</h2>
                <p class="image-carousel__author has-text-centered">BY WRITERS NAME</p>
            </div>
        </div>
    <?php endif; ?>
    </div>
</section>
<div class="carousel__nav">
    <img class="carousel__arrow carousel__arrow--next" src="<?php echo get_template_directory_uri() ?>/images/btn-prev.svg" alt="prev" />
    <img class="carousel__arrow carousel__arrow--prev" src="<?php echo get_template_directory_uri() ?>/images/btn-next.svg" alt="next" />
</div>
