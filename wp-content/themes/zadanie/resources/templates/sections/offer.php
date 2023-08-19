<?php

/**
 * @package 
 */
?>
<section class="offer pt-lg-10 pb-12 pt-5">
  <div class="container">
    <div class="row d-md-flex d-block">
      <div class="offset-md-1 col-md-7">
        <span class="title text-green"><?php the_sub_field('section_title'); ?></span>
        <?php the_sub_field('section_heading'); ?>
        <p><?php the_sub_field('section_description'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 offer__wrapper mt-lg-7 mt-5">
        <?php if (have_rows('box_repeater')) : ?>
          <?php while (have_rows('box_repeater')) : the_row(); ?>
            <div class="offer__box bg-white d-flex flex-column justify-content-between">
              <figure>
                <img src="<?php the_sub_field('box_icon'); ?>" alt="icon" />
              </figure>

                <h4><?php the_sub_field('box_title'); ?></h4>
                <p><?php the_sub_field('box_description'); ?></p>

                <?php
                $link = get_sub_field('link_cta');
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <a class="position-relative align-self-start" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/arrow-green.svg" alt="arrow" class="ml-2 arrow-animate">
                  </a>
                <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>