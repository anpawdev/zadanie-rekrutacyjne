<?php

/**
 * 
 */
?>
<footer class="footer text-white">
	<div class="container">
		<div class="row">
			<div class="footer-main col-12">
				<div class="d-flex align-items-center justify-content-between">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php the_field('logo_white', 'options'); ?>" alt="giarddesign">
					</a>
					<div class="d-flex align-items-center">
						<p class="mb-0"><?php the_field('footer_text', 'options'); ?></p>
						<?php
						$link = get_field('footer_cta', 'options');
						if ($link) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a class="btn d-inline-block btn-primary text-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-between">
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
									<a class="text-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div>
						<a class="text-white" href="tel:<?php echo filter_var(get_field('phone_number', 'options'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('phone_number', 'options'); ?></a>
						<a class="text-white" href="mailto:<?php antispambot(the_field('email', 'options'), 1); ?>"><?php antispambot(the_field('email', 'options'), 1); ?></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom col-12">
				<div class="d-flex align-items-center justify-content-between">
					<p><?php the_field('copyright', 'options'); ?></p>
					<div>
						<span>made by</span>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/icon-full-light.svg" alt="icon">
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</footer>