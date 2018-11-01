<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php include 'partials/message-block.php'; ?>
<?php include 'partials/carousel.php'; ?>
<?php include 'partials/link-block.php'; ?>
<?php include 'partials/content-block.php'; ?>
<?php include 'partials/signup-block.php'; ?>
<?php include 'partials/instagram-block.php'; ?>

<?php endwhile; ?>

<?php get_footer(); ?>