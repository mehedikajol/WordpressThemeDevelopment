<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">

            <?php
              $args = array(
                'post_type' => 'testimonials',
                'posts_per_page' => 3,
              );
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();
                $image = get_field('testimonial_image');
            ?>

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      <?php the_content(); ?>
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="<?php echo $image['url'];?>" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author"><?php the_title(); ?></h3>
                          <span class="quote-subtext"><?php the_field('testimonial_role'); ?></span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>

            <?php
              }
            ?>

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
            <?php
              $args = array(
                'post_type' => 'clients',
                'posts_per_page' => 6,
              ); 
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();
            ?>
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a target="_blank" href="<?php the_field('client_url'); ?>"><img loading="lazy" class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="clients-logo" /></a>
                </figure>
              </div>
            <?php
              }
            ?>
          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->