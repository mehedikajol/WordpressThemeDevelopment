<div class="banner-carousel banner-carousel-2 mb-0">
  <?php
    $args = array(
      'post_type' => 'sliders',
      'posts_per_page' => 3,
    );
    $query = new WP_Query($args);
    while($query -> have_posts()){
      $query -> the_post();
      $slider_subtitle = get_field('slider_subtitle');
      $slider_description = get_field('slider_description');
      $slider_image = get_field('slider_image');
      $slider_button_text = get_field('slider_button_text');
      $slider_button_link = get_field('slider_button_link');
    ?>
      <div class="banner-carousel-item" style="background-image:url(<?php echo $slider_image['url']; ?>">
        <div class="container">

            <div class="box-slider-content">
              <div class="box-slider-text">
                  <h2 class="box-slide-title"><?php echo $slider_subtitle; ?></h2>
                  <h3 class="box-slide-sub-title"><?php the_title(); ?></h3>
                  <p class="box-slide-description"><?php echo $slider_description; ?></p>
                  <p>
                    <a href="<?php echo $slider_button_link; ?>" class="slider btn btn-primary"><?php echo $slider_button_text; ?></a>
                  </p>
              </div>
            </div>
        </div>
      </div>
    <?php
    }
    wp_reset_postdata();
  ?>
</div>