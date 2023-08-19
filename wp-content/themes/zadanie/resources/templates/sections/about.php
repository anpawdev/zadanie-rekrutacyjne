<?php

/**
 * @package 
 */
?>
<section class="about bg-green mb-11">
  <div class="container-fluid position-relative box-fluid">
    <div class="container">
      <div class="row d-md-flex d-block">

        <div class="col-md-6 position-md-absolute left-box h-100">
          <div class="image">
            <?php
            $image = get_sub_field('about_image');
            $size = 'full';

            if ($image) {
              echo wp_get_attachment_image($image, $size, "", ["class" => "about__image"]);
            }; ?>
          </div>
        </div>

        <div class="about__content col-md-6 offset-md-6 text-white">
          <span class="title mt-2"><?php the_sub_field('about_heading'); ?></span>
            <?php the_sub_field('about_title'); ?>
            <p><?php the_sub_field('about_content'); ?></p>
            <?php
              $link = get_sub_field('about_button_cta');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="btn btn-outline--border d-inline-block text-white btn-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>