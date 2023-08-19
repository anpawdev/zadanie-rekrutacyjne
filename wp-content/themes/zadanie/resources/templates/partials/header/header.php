<?php

/**
 * 
 */
?>
<header class="header bg-white py-4">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php the_field('logo', 'options'); ?>" alt="giarddesign">
			</a>
			<div class="d-flex align-items-center">
				<?php get_template_part('resources/templates/partials/nav/top'); ?>
				<?php get_template_part('searchform'); ?>
				<button class="btn-search bg-transparent border-0 px-0 ">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/icon-search.svg" alt="search" class="d-md-block d-none">
				</button>
			</div>
			<div class="header__hamburger d-flex flex-column-reverse align-items-end position-relative overflow-hidden ml-auto d-md-none">
				<span class="line-menu bg-dark d-block mb-1 position-relative"></span>
				<span class="line-menu bg-dark d-block mb-1"></span>
				<span class="line-menu bg-dark d-block mb-1 position-relative"></span>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</header>