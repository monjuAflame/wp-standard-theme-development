<?php 


add_shortcode( 'home-portfolio', 'comet_home_portfolios' );

function comet_home_portfolios($atts, $content = NULL){

	$attrebut = extract(shortcode_atts( array(

      'title'  => 'Selected Works',

    ), $atts));

	ob_start();
?>
    <section id="portfolio" class="pb-0">
      <div class="container">
        <div class="col-md-4">
          <div class="title m-0 txt-xs-center txt-sm-center">
            <h2 class="upper"><?php echo $title; ?><span class="red-dot"></span></h2>
            <hr>
          </div>
        </div>
        <div class="col-md-8">
          <ul id="filters" class="no-fix mt-25">
            <li data-filter="*" class="active">All</li>
            <?php

                $category_items = get_terms( 'home-comet-portfolio-category' );
                foreach($category_items as $category_item) :?>
                  
                  <li data-filter=".<?php echo $category_item->slug; ?>"><?php echo $category_item->name; ?></li>
                <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="section-content pb-0">     
        <div id="works" class="four-col wide mt-50">
        <?php 
            $home_portfolio = new WP_Query(array(
              'post_type' => 'home-comet-portfolio'
            ));
          ?>
            <?php while($home_portfolio->have_posts()) : $home_portfolio->the_post();?>
            <div class="work-item <?php

                            $category_items = get_the_terms( get_the_id(), 'home-comet-portfolio-category' );
                            foreach($category_items as $category_item){
                              echo $category_item->slug .' ';
                            }

                           ?>">
              <div class="work-detail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
                  <div class="work-info">
                    <div class="centrize">
                      <div class="v-center">
                        <h3><?php the_title(); ?></h3>
                        <p>
                          <?php

                            $category_items = get_the_terms( get_the_id(), 'home-comet-portfolio-category' );
                            foreach($category_items as $category_item){
                              echo $category_item->slug .' ';
                            }

                           ?></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>                     

<?php 
   return ob_get_clean();
}


?>