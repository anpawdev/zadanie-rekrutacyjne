<?php

/**
 * @package 
 */
?>
<section class="baner my-6rem">
  <div class="container">
    <div class="row d-md-flex d-block">
      <div class="col-md-10 col-12 mx-auto bg-green py-11">
        <div class="offset-1 d-flex text-white">
          <?php the_sub_field('baner_title'); ?>
          <div>
            <p><?php the_sub_field('baner_text'); ?></p>
            <?php
            $link = get_sub_field('baner_cta');
            if ($link) :
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="btn btn-outline btn-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>