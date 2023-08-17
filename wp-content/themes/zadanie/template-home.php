<?php
/**
 * Template Name: Homepage
 *
 * 
 */
	get_header();
		while ( have_posts() ) : the_post();
		    while(have_rows('page_home_content')) : the_row();
		      	if(get_row_layout() == 'intro_page_home'):
		        	get_template_part('resources/templates/sections/intro');
						elseif (get_row_layout() == 'offer_page_home') :
							get_template_part('resources/templates/sections/offer');
		      	endif;
		    endwhile;
		endwhile;
	get_footer();
?>
