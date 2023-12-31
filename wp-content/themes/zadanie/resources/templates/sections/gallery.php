<?php

/**
 * @package 
 */
?>
<section class="gallery" id="projects">
  <div class="container">
    <div class="row">
      <div class="col-12 ml-md-7rem">
        <span class="title text-green"><?php the_sub_field('gallery_title'); ?></span>
        <?php the_sub_field('gallery_heading'); ?>
      </div>
    </div>
  </div>
  <div class="container-fluid px-md-0 position-relative">
    <div class="gallery__wrapper mt-lg-6 overflow-hidden postion-relative">
      <?php if (have_rows('gallery')) : ?>
        <?php $index = 0; ?>
        <?php while (have_rows('gallery')) : the_row(); ?>
          <div class="gallery__item">
            <?php
            $image = get_sub_field('gallery_image');
            $size = 'full';
            if ($image) {
              echo '<a aria-label="load-image" href="#" class="open-modal" data-index="' . $index . '">';
              echo wp_get_attachment_image($image, $size, "", ["class" => "img-fluid"]);
              echo '</a>';
            }
            $index++;
            ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <button class="btn btn-load-more bg-transparent mx-auto" aria-label="load-more"><?= __('Rozwiń'); ?>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
        <path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#111111" />
      </svg>
    </button>
    <?php get_template_part('resources/templates/partials/modal/modal'); ?>
  </div>
</section>