
<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">

          <?php
            $args = array(
              'post_type' => 'services',
              'posts_per_page' => 3,
              'order'  => 'DESC',
              //'orderby' => 'menu_order',
              );
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();
                $service_icon = get_field('service_icon');
            ?>
              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <img loading="lazy" src="<?php echo $service_icon['url']; ?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                  </div>
              </div><!-- Service 1 end -->
            <?php
              } 
          ?>

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/services/service-center.jpg" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <?php
            $args = array(
              'post_type' => 'services',
              'posts_per_page' => 3,
              'order'  => 'ASC',
              //'orderby' => 'menu_order',
              );
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();
                $service_icon = get_field('service_icon');
            ?>
              <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="<?php echo $service_icon['url']; ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                </div>
              </div>
            <?php
              }
            ?>
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->