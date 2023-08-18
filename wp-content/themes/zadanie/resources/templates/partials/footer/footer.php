<?php

/**
 * 
 */
?>
<footer class="footer text-white pt-7 pb-6">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="footer__main d-flex flex-wrap align-items-center justify-content-between pb-6">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php the_field('logo_white', 'options'); ?>" alt="giarddesign">
					</a>
					<div class="footer__cta d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between mt-md-0 mt-4">
						<p class="mb-0 mr-4 mt-md-0 mt-3"><?php the_field('footer_text', 'options'); ?></p>
						<?php
						$link = get_field('footer_cta', 'options');
						if ($link) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a class="btn btn-primary text-white mt-md-0 mt-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="d-flex flex-wrap align-items-center justify-content-between pt-6rem ">
					<div>
						<?php if (have_rows('links', 'options')) : ?>
							<?php while (have_rows('links', 'options')) : the_row(); ?>
								<?php
								$link = get_sub_field('link', 'options');
								if ($link) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
								?>
									<a class="footer__links text-white d-inline-block mb-lg-3 mt-lg-0 mt-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="mt-lg-0 mt-3 mb-lg-3">
						<a class="footer__links text-white" href="tel:<?php echo filter_var(get_field('phone_number', 'options'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('phone_number', 'options'); ?></a>
						<a class="text-white" href="mailto:<?php antispambot(the_field('email', 'options'), 1); ?>"><?php antispambot(the_field('email', 'options'), 1); ?></a>
					</div>
				</div>
			</div>
			<div class="footer__bottom col-md-10 mx-auto pt-md-9 pt-7">
				<div class="d-flex flex-wrap align-items-center justify-content-between">
					<p><?php the_field('copyright', 'options'); ?></p>
					<div class="mb-3">
						<span><?= __('made by'); ?></span>
						<a class="ml-3" href="https://adrespect.pl/" target="_blank" rel="noopener noreferrer nofollow">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/logo-full-light.svg" alt="icon">
						</a>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</footer>