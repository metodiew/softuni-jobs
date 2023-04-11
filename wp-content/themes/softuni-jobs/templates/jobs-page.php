<?php
/**
 * Template Name: Jobs Page From the Theme
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<h2>Latest posts</h2>
	<ul class="jobs-listing">
		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

            <?php the_content(); ?>

			<?php //get_template_part( 'partials/content', 'home' ); ?>

		<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php get_footer(); ?>