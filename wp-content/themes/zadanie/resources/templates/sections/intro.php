<?php

/**
 * @package 
 */
?>
<section class="hero bg-beige">
  <div class="container-fluid position-relative box-fluid">
    <div class="container">
      <div class="row d-md-flex d-block">

        <div id="carousel" class="carousel carousel-fade position-static slide" data-ride="carousel">
          <?php if (have_rows('slider')) : ?>
            <div class="carousel-inner position-static">
              <?php while (have_rows('slider')) : the_row();
                $image = get_sub_field('slider_image');
              ?>
                <!-- slider item -->
                <div class="carousel-item position-static <?php if (get_row_index() === 1) : ?> active<?php endif; ?>">
                  <div class="col-md-6 position-md-absolute right-box h-100">
                    <div class="image">
                      <?php
                      $size = 'full';
                      if ($image) {
                        echo wp_get_attachment_image($image, $size, "", ["class" => "hero__image"]);
                      }; ?>
                    </div>
                    <a class="carousel-control carousel-control-prev bg-white opacity-100" href="#carousel" role="button" data-slide="prev">
                      <span class="carousel-control-icon carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control carousel-control-next bg-white" href="#carousel" role="button" data-slide="next">
                      <span class="carousel-control-icon carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                  </div>

                  <div class="hero__text col-md-6">
                    <h1><?php the_sub_field('slider_heading'); ?></h1>
                    <p><?php the_sub_field('slider_content'); ?></p>
                    <div class="d-flex flex-wrap">
                      <?php if (have_rows('slider_buttons')) : ?>
                        <?php while (have_rows('slider_buttons')) : the_row();
                        ?>
                          <?php
                          $link = get_sub_field('button_cta');
                          if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                            <a class="btn d-inline-block  mb-lg-0 mb-3  <?php if (get_row_index() === 1) : ?> btn-primary text-white mr-4<?php else : ?> btn-outline btn-border <?php endif; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- end slider item -->
              <?php endwhile; ?>
            </div>

          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</section>