<?php 


add_shortcode( 'home-vision', 'comet_home_vision' );

function comet_home_vision($atts, $content = NULL){

    $attrebut = extract(shortcode_atts( array(

      'title'            => 'The Vision',
      'subtitle'         => 'Not just code.',
      'right_img'           => '',

       'vision_one_title'      => 'Strategy', 
       'vision_one_paragraph'  => 'Natus totam adipisci illum aut nihil consequuntur ut, ducimus alias iusto facili.',

       'vision_two_title'      => 'Design', 
       'vision_two_paragraph'  => 'Nisi, ut commodi dolor, quae doloremque earum alias accusantium sint.',

       'vision_three_title'    => 'Skills', 
       'vision_three_paragraph' => 'Nesciunt est eaque, expedita cum minima reprehenderit? Harum vero dolorum.', 

       'vision_four_title'     => 'Power', 
       'vision_four_paragraph' => 'Fuga ipsum, repellendus? Architecto commodi magni non nihil et iusto.',


    ), $atts));

	ob_start();

    $imageSrc = wp_get_attachment_image_src($right_img, 'full'); 
?>

    <section>
      <div class="col-md-6 col-sm-4 img-side img-right">
        <div class="img-holder"><img src="<?php echo $imageSrc[0]; ?>" alt="" class="bg-img"></div>
      </div>
      <div class="container">
        <div class="col-md-5 col-sm-8">
          <div class="title">
            <h4 class="upper"><?php echo $subtitle; ?></h4>
            <h3><?php echo $title; ?><span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row">
              <div class="text-box">
                <h4 class="upper small-heading"><?php echo $vision_one_title; ?></h4>
                <p><?php echo $vision_one_paragraph; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row">
              <div class="text-box">
                <h4 class="upper small-heading"><?php echo $vision_two_title; ?></h4>
                <p><?php echo $vision_two_paragraph; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row">
              <div class="text-box">
                <h4 class="upper small-heading"><?php echo $vision_three_title; ?></h4>
                <p><?php echo $vision_three_paragraph; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row">
              <div class="text-box">
                <h4 class="upper small-heading"><?php echo $vision_four_title; ?></h4>
                <p><?php echo $vision_four_paragraph; ?></p>
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