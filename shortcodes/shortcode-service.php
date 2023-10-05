<?php 


add_shortcode( 'home-service', 'comet_home_service' );

function comet_home_service($atts, $content = NULL){

    $attrebut = extract(shortcode_atts( array(

      'title'            => 'Expertise',
      'subtitle'         => 'This is what we love to do.',
      'bgimg'           => '',

       
       'services_one_front_icon'       => 'icon-focus', 
       'services_one_back_icon'    =>'icon-focus', 
       'services_one_title'      => 'Branding', 
       'services_one_paragraph'  => 'Facilis doloribus illum quis, expedita mollitia voluptate non iure, perspiciatis repellat eveniet volup.',

       'services_two_front_icon'      => 'icon-layers', 
       'services_two_back_icon'      => 'icon-layers', 
       'services_two_title'      => 'Interactive', 
       'services_two_paragraph'  => 'Commodi totam esse quis alias, nihil voluptas repellat magni, id fuga perspiciatis, ut quia beatae, accus.',

       'services_three_front_icon'    => 'icon-mobile', 
       'services_three_back_icon'    => 'icon-mobile', 
       'services_three_title'    => 'Production', 
       'services_three_paragraph' => 'Doloribus qui asperiores nisi placeat volup eum, nemo est, praesentium fuga alias sit quis atque accus.', 

       'services_four_front_icon'     => 'icon-globe', 
       'services_four_back_icon'     => 'icon-globe', 
       'services_four_title'     => 'Editing', 
       'services_four_paragraph' => 'Aliquid repellat facilis quis. Sequi excepturi quis dolorem eligendi deleniti fuga rerum itaque.',

    ), $atts));

	ob_start();

  $imageSrc = wp_get_attachment_image_src($bgimg, 'full'); 
?>

    <section class="p-0 b-0">
      <div class="col-md-6 col-sm-4 img-side img-left mb-0">
        <div class="img-holder">
        <img src="<?php  echo $imageSrc[0];  ?>" alt="" class="bg-img">
          <div class="centrize">
            <div class="v-center">
              <div class="title txt-xs-center">
                <h4 class="upper"><?php echo $subtitle;?></h4>
                <h3><?php echo $title;?><span class="red-dot"></span></h3>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
        <div class="row">
          <div class="services">
            <div class="col-sm-6 border-bottom border-right">
              <div class="service"><i class="<?php echo $services_one_front_icon;?>"></i><span class="back-icon"><i class="<?php echo $services_one_back_icon;?>"></i></span>
                <h4><?php echo $services_one_title;?></h4>
                <hr>
                <p class="alt-paragraph"><?php echo $services_one_paragraph;?></p>
              </div>
            </div>
            <div class="col-sm-6 border-bottom">
              <div class="service"><i class="<?php echo $services_two_front_icon;?>"></i><span class="back-icon"><i class="<?php echo $services_two_back_icon;?>"></i></span>
                <h4><?php echo $services_two_title;?></h4>
                <hr>
                <p class="alt-paragraph"><?php echo $services_two_paragraph;?></p>
              </div>
            </div>
            <div class="col-sm-6 border-bottom border-right">           
              <div class="service"><i class="<?php echo $services_three_front_icon;?>"></i><span class="back-icon"><i class="<?php echo $services_three_back_icon;?>"></i></span>
                <h4><?php echo $services_three_title;?></h4>
                <hr>
                <p class="alt-paragraph"><?php echo $services_three_paragraph;?></p>
              </div>
            </div>
            <div class="col-sm-6 border-bottom">           
              <div class="service"><i class="<?php echo $services_four_front_icon;?>"></i><span class="back-icon"><i class="<?php echo $services_four_back_icon;?>"></i></span>
                <h4><?php echo $services_four_title;?></h4>
                <hr>
                <p class="alt-paragraph"><?php echo $services_four_paragraph;?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php 
   return ob_get_clean();
}

?>