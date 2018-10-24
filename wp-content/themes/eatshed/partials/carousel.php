<?php if( have_rows('carousel') ): ?>
    <?php while ( have_rows('carousel') ) : the_row(); ?>
        <?php if( have_rows('carousel_background') ): ?>
            <?php while ( have_rows('carousel_background') ) : the_row(); ?>
        <div style="background-image: url(<?php the_sub_field('carousel_background_image');?>); background-color: <?php the_sub_field('carousel_background_colour');?>;">
            <?php endwhile; ?>
        <?php endif; ?>
            <img src="<?php the_sub_field('carousel_image_overlay');?>" alt="" />
        </div>
        <?php if( have_rows('carousel_link') ): ?>
            <?php while ( have_rows('carousel_link') ) : the_row(); ?>
                <a href="<?php the_sub_field('carousel_url');?>"><?php the_sub_field('carousel_title');?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>