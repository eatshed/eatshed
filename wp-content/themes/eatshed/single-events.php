<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<h1>- <?php the_title(); ?> -</h1> BANNER
	<?php the_content(); ?>
	
	<?php include 'partials/signup-block.php'; ?>
<?php endwhile; ?>

<?php get_footer(); ?>