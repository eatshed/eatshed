<section class="banner" style="background-image: url(<?php the_field('banner_image');?>)">
    <div class="banner__container container <?php the_field('banner_text_colour');?>">
        <h1 class="banner__title">- <?php the_title(); ?> -</h1>
        <p class="banner__subheading"><?php the_field('banner_content');?></p>
    </div>
</section>