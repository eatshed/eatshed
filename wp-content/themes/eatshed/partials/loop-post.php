<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array (
    'showposts' => 10,
    'paged' => $paged
);
query_posts( $args );
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
    foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?>

        <a class="blog-list--item" href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="row">
            <div class="col-8 col-md-4 col-lg-3">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( '' );
                }
            ?>
            </div>
            <div class="col-12 col-md-8 col-lg-7">
                <div class="time-date"><?php the_time('d/m/Y') ?></div>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        </a>
        <?php the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'Prev', '' ),
            'next_text' => __( 'Next', '' ),
        ) ); ?>
    <?php endwhile; ?>
    