<?php 

add_shortcode('comet-slider', 'comet_hero_slider');

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
                  <p>
                    <?php 
                    $first_button = get_post_meta(get_the_id(), '_first-button-text', true ); 
                    $first_button_url = get_post_meta(get_the_id(), '_first-button-url', true ); 
                    
                    if (!empty($first_button)) : ?>
                      <a href="<?php
                        if (!empty($first_button_url)) {
                          echo $first_button_url;
                        } else {
                          the_permalink();
                        }
                       ?>" class="btn <?php if(get_post_meta(get_the_id(), '_first-button-type', true) == 'transparent') {
                        echo 'btn-light-out';
                      } else {
                        echo 'btn-color btn-full';
                      } ?>">
                        <?php echo $first_button; ?>
                      </a>
                    <?php endif; ?>
                      
                    <?php 
                    $second_button = get_post_meta(get_the_id(), '_second-button-text', true );
                    $second_button_url = get_post_meta(get_the_id(), '_second-button-url', true ); 

                    if (!empty($second_button)) : ?>
                      <a href="<?php 
                        if (!empty($second_button_url)) {
                          echo $second_button_url;
                        } else {
                          the_permalink();
                        }
                      ?>" class="btn <?php if(get_post_meta(get_the_id(), '_second-button-type', true) == 'transparent') {
                        echo 'btn-light-out';
                      } else {
                        echo 'btn-color btn-full';
                      } ?>">
                        <?php echo $second_button; ?>
                      </a>
                    <?php endif; ?>


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


?>