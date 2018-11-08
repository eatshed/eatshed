<?php
    $args = array (
        'showposts' => 10,
        'paged' => $paged
    );
    query_posts( $args );
?>
<?php while ( have_posts() ) : the_post();
    $image = get_field('post_image');
    $featured = get_field('featured_post');
?>
    <?php if ( 'true' == $featured ): ?>
    <div>
        <?php if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <?php the_time('d/m/Y') ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        By <?php the_author_posts_link(); ?>
    </div>
    <?php endif; ?>
<?php endwhile; ?>
    