<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">

      <?php
        $args = array(
          'post_type' => 'services',
          'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        while($query -> have_posts()){
          $query -> the_post();
          $service_icon = get_field('service_icon');
      ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="service-image">
              </div>
              <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="<?php echo $service_icon['url']; ?>" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                    <h3 class="<?php the_permalink(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <a class="learn-more d-inline-block" href="<?php the_permalink(); ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                </div>
              </div>
          </div><!-- Single Service end -->
        </div>
      <?php
        }
        wp_reset_postdata();
      ?>
        

    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->