<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'resources/templates/content/content', 'content' ); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts.</p>
	<?php endif; ?>
<?php get_footer(); ?>
