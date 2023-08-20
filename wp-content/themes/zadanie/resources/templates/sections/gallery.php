<?php

/**
 * @package 
 */
?>
<section class="gallery" id="projects">
  <div class="container">
    <div class="row">
      <div class="col-12 ml-7rem">
        <span class="title text-green"><?php the_sub_field('gallery_title'); ?></span>
        <?php the_sub_field('gallery_heading'); ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="gallery__wrapper">
      <?php if (have_rows('gallery')) : ?>
        <?php while (have_rows('gallery')) : the_row(); ?>
          <div class="gallery__item">
            <?php
            $image = get_sub_field('gallery_image');

            $size = 'full';
            if ($image) {
              echo wp_get_attachment_image($image, $size, "", ["class" => "img-fluid"]);
            }; ?>
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>