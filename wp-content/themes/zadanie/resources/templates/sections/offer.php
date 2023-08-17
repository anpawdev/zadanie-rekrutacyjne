<?php

/**
 * @package 
 */
?>
<section class="offer">
  <div class="container">
    <div class="row d-md-flex d-block">
      <div class="offset-md-1 col-md-7">
        <span><?php the_sub_field('section_title'); ?></span>
        <?php the_sub_field('section_heading'); ?>
        <p><?php the_sub_field('section_description'); ?></p>
      </div>
    </div>
    <div class="row">
      <?php if (have_rows('box_repeater')) : ?>
        <?php while (have_rows('box_repeater')) : the_row(); ?>
          <div class="col-md-3 col-12 bg-white">
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
              <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>