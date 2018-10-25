<?php if( have_rows('carousel') ): ?>
    <?php while ( have_rows('items') ) : the_row(); 
        $overlay = get_sub_field('carousel_image_overlay');
    ?>
        <?php if( have_rows('carousel_background') ): ?>
            <?php while ( have_rows('carousel_background') ) : the_row(); 
            $background = get_sub_field('carousel_background_image');
            $backgroundcolour = get_sub_field('carousel_background_colour');  
        ?>
            <div style="background-image: url(<?php echo $background; ?>); background-color: <?php echo $backgroundcolour; ?>">
                <img src="<?php echo $overlay; ?>" alt="" />
            
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('carousel_link') ): ?>
            <?php while ( have_rows('carousel_link') ) : the_row(); 
                $carousel_url = get_sub_field('carousel_url');
                $link = get_sub_field('carousel_title');
            ?>
                <a href="<?php echo $carousel_url; ?>"><?php echo $link; ?></a>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>