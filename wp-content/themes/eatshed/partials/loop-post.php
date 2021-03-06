<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array (
    'showposts' => 18,
    'paged' => $paged
);
query_posts( $args );
?>

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
<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Prev', '' ),
    'next_text' => __( 'Next', '' ),
) ); ?>