<?php

/**
 * Top nav menu content goes here. Customize it to your needs. How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav>
	<?php
	wp_nav_menu(array(
		'theme_location' => 'primary', 'container' => 'ul', 'menu_class' => 'nolist d-none d-md-flex mb-0'
	));
	?>
	<div class="d-md-none mt-2rem">
		<form method="get" id="search" action="<?php echo esc_url(home_url('/')); ?>" class="searchform">
			<input type="text" class="field border-top-0 border-left-0 border-right-0" name=" s" id="search" placeholder="<?php esc_attr_e('Szukaj', 'zadanie'); ?>" />
			<input type="submit" class="submit border-0 px-0" name="submit" id="searchsubmit" value="" />
		</form>
	</div>
</nav>