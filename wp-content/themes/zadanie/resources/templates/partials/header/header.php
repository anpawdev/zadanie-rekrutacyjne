<?php

/**
 * 
 */
?>
<header class="header bg-white">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php the_field('logo', 'options'); ?>" alt="giarddesign">
			</a>
			<div class="d-flex align-items-center">
				<?php get_template_part('resources/templates/partials/nav/top'); ?>
				<button>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/icon-search.svg" alt="search">
				</button>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</header>
<?php get_template_part('searchform'); ?>