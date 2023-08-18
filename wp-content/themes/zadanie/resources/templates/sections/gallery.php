<?php

/**
 * @package 
 */
?>
<section class="galleryr">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span><?php the_sub_field('gallery_title'); ?></span>
        <?php the_sub_field('gallery_heading'); ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <?php if (have_rows('gallery')) : ?>
        <?php while (have_rows('gallery')) : the_row(); ?>
          <?php
          $image = get_sub_field('gallery_image');

          $size = 'full';
          if ($image) {
            echo wp_get_attachment_image($image, $size, "", ["class" => "img-fluid"]);
          }; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>