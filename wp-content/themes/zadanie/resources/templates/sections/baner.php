<?php

/**
 * @package 
 */
?>
<section class="baner my-6rem">
  <div class="container">
    <div class="row d-md-flex d-block">
      <div class="col-md-10 col-12 mx-auto">
        <div class="pt-lg-11 pt-6 pb-lg-10 pb-5 bg-green">
          <div class="offset-1 d-flex flex-wrap text-white px-lg-4 px-2">
            <div class="mt-lg-4">
              <?php the_sub_field('baner_title'); ?>
            </div>
            <div class="ml-xxl-6 col-xxl-3 px-0 px-xxl-2rem">
              <p><?php the_sub_field('baner_text'); ?></p>
              <?php
              $link = get_sub_field('baner_cta');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="btn btn-outline btn-white mt-2 d-inline-block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>