<?php

/**
 * @package 
 */
?>
<section class="hero bg-beige">
  <div class="container-fluid position-relative box-fluid">
    <div class="container">
      <div class="row d-md-flex d-block">

        <div id="carousel" class="carousel slide" data-ride="carousel">
          <?php if (have_rows('slider')) : ?>
            <div class="carousel-inner">
              <?php while (have_rows('slider')) : the_row();
                $image = get_sub_field('slider_image');
              ?>
                <!-- slider item -->
                <div class="carousel-item <?php if (get_row_index() === 1) : ?> active<?php endif; ?>">
                  <div class="col-md-6 position-md-absolute right-box h-100">
                    <div class="image">
                      <?php
                      $size = 'full';
                      if ($image) {
                        echo wp_get_attachment_image($image, $size, "", ["class" => "img-fluid"]);
                      }; ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <h1><?php the_sub_field('slider_heading'); ?></h1>
                    <p><?php the_sub_field('slider_content'); ?></p>
                    <div class="d-flex">
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
                              <a class="btn d-inline-block <?php if(get_row_index() === 1):?> btn-primary text-white mr-4 <?php else:?> btn-outline <?php endif;?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
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
          <!-- buttons -->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>