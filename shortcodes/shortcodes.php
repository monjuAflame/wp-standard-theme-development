<?php

// slider shortcode

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

// about shortcode

add_shortcode('about-section', 'comet_about_section');

function comet_about_section($attr, $content = null)
{

  $attr = extract(shortcode_atts(array(
                    'title' => 'Who we are',
                    'subtitle' => 'We are driven by creative.'
                  ), $attr));

    ob_start(); ?>

    <section id="about">
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle; ?></h4>
          <h2><?php echo $title; ?><span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p class="lead-text serif text-center">
                <?php echo do_shortcode($content); ?>
              </p>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <!-- end of section content-->
      </div>
      <!-- end of container-->
    </section>
    
    <?php return ob_get_clean();
}

// Expertise shortcode

add_shortcode('expertise-section', 'comet_expertise_section');

function comet_expertise_section($attr, $content = null)
{

  $attr = extract(shortcode_atts(array(
                    'title' => 'Expertise',
                    'subtitle' => 'This is what we love to do.',
                    'bgimage' => '',
                    'first_front_icon' => 'focus',
                    'first_back_icon' => 'focus',
                    'first_title' => 'Branding',
                    'first_content' => 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',
                    'second_front_icon' => 'layers',
                    'second_back_icon' => 'layers',
                    'second_title' => 'Interactive',
                    'second_content' => 'Commodi totam esse quis alias, nihil voluptas repellat magni, id fuga perspiciatis, ut quia beatae, accus.',
                    'third_front_icon' => 'mobile',
                    'third_back_icon' => 'mobile',
                    'third_title' => 'Production',
                    'third_content' => 'Doloribus qui asperiores nisi placeat volup eum, nemo est, praesentium fuga alias sit quis atque accus.',
                    'last_front_icon' => 'globe',
                    'last_back_icon' => 'globe',
                    'last_title' => 'Editing',
                    'last_content' => 'Aliquid repellat facilis quis. Sequi excepturi quis dolorem eligendi deleniti fuga rerum itaque.',

                  ), $attr));

    ob_start(); ?>

    <section class="p-0 b-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-left mb-0">
            <div class="img-holder">
              <img src="<?php echo $bgimage; ?>" alt="" class="bg-img">
              <div class="centrize">
                <div class="v-center">
                  <div class="title txt-xs-center">
                    <h4 class="upper"><?php echo $subtitle; ?></h4>
                    <h3><?php echo $title; ?><span class="red-dot"></span></h3>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of side background image-->
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
            <div class="services">
              <div class="row">
                
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $first_front_icon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $first_back_icon; ?>"></i></span>
                    <h4><?php echo $first_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $first_content; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $second_front_icon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $second_back_icon; ?>"></i></span>
                    <h4><?php echo $second_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $second_content; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $third_front_icon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $third_back_icon; ?>"></i></span>
                    <h4><?php echo $third_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $third_content; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $last_front_icon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $last_back_icon; ?>"></i></span>
                    <h4><?php echo $last_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $last_content; ?></p>
                  </div>
                  <!-- end of service-->
                </div>

              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of row -->
      </div>
    </section>
    
    <?php return ob_get_clean();
}

// comet portfolio 

add_shortcode('comet-portfolio', 'comet_portfolio_section');

function comet_portfolio_section($attr, $content)
{
  $attr = extract(shortcode_atts(array(
                'title' => 'Selected Works'
              ), $attr));
  ob_start(); ?>

    <section id="portfolio" class="pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title m-0 txt-xs-center txt-sm-center">
              <h2 class="upper"><?php echo $title; ?><span class="red-dot"></span></h2>
              <hr>
            </div>
          </div>
          <div class="col-md-6">
            <ul id="filters" class="no-fix mt-25">
              <li data-filter="*" class="active">All</li>
              <?php 
                $categories = get_terms('comet-portfolio-category');

                foreach ($categories as $item) {
              ?>
                <li data-filter=".<?php echo $item->slug; ?>"><?php echo $item->name; ?></li>
              <?php    
                }
              ?>
            </ul>
            <!-- end of portfolio filters-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <div class="section-content pb-0">
        <div id="works" class="four-col wide mt-50">

        <?php
          $items = new WP_Query(array(
            'post_type' => 'comet-portfolios'
          ));
          
          while ($items->have_posts()): $items->the_post() 

          ?>

          <div class="work-item  <?php 

                        $categories = get_the_terms(get_the_id(), 'comet-portfolio-category');
                        foreach ($categories as $item) {
                          echo $item->slug . " ";
                        }
                        ?>">
            <div class="work-detail">
              <a href="portfolio-single-1.html">
                <?php echo the_post_thumbnail(); ?>
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3><?php echo the_title(); ?></h3>
                      <p>
                        <?php 

                          $categories = get_the_terms(get_the_id(), 'comet-portfolio-category');
                          foreach ($categories as $item) {
                            echo $item->name . " ";
                          }
                        ?>

                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
        <!-- end of portfolio grid-->
      </div>
    </section>

  <?php return ob_get_clean();
}


