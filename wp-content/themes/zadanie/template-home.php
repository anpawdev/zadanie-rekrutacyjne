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
						elseif (get_row_layout() == 'about_page_home') :
							get_template_part('resources/templates/sections/about');
						elseif (get_row_layout() == 'gallery_page_home') :
							get_template_part('resources/templates/sections/gallery');
						elseif (get_row_layout() == 'baner_page_home') :
							get_template_part('resources/templates/sections/baner');
		      	endif;
		    endwhile;
		endwhile;
	get_footer();
?>
