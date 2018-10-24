<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php include 'partials/carousel.php'; ?>
<?php endwhile; ?>

<?php get_footer(); ?>