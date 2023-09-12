<?php


add_shortcode('home-slider', 'comet_hero_slider');


function comet_hero_slider()
{
    ob_start(); ?>

<section id="home">
      <!-- Home Slider-->
      <div id="home-slider" class="flexslider">
        <ul class="slides">
            <?php 
                $slider = new WP_Query(array(
                    'post_type' => 'comet-slider',
                    'posts_per_page' => 3
                ));

                while ($slider->have_posts()): $slider->the_post();
            
            ?>
          <li>
            <?php the_post_thumbnail(); ?>
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1><?php the_title(); ?><span class="red-dot"></span></h1>
                  <h6><?php echo get_post_meta(get_the_id(), '_slider-subtitle', true) ?></h6>
                  <p><a href="<?php the_permalink() ?>" class="btn btn-light-out">Read More</a><a href="#" class="btn btn-color btn-full">Services</a>
                  </p>
                </div>
              </div>
            </div>
          </li>
          <?php endwhile; ?>


        </ul>
      </div>
      <!-- End Home Slider-->
    </section>
    
    <?php return ob_get_clean();
}



