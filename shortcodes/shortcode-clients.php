<?php 


add_shortcode( 'home-clients', 'comet_home_clients' );

function comet_home_clients($atts, $content = NULL){

	$attrebut = extract(shortcode_atts( array(

      'title'            => 'Our Clients',
      'subtitle'         => 'Some of the best.',

      'client_one'       => '',
      'client_two'       => '',
      'client_three'       => '',
      'client_four'       => '',
      'client_five'       => '',
      'client_six'       => '',

    ), $atts));

	ob_start();

$client_one_src = wp_get_attachment_image_src($client_one, 'full'); 
$client_two_src = wp_get_attachment_image_src($client_two, 'full'); 
$client_three_src = wp_get_attachment_image_src($client_three, 'full'); 
$client_four_src = wp_get_attachment_image_src($client_four, 'full'); 
$client_five_src = wp_get_attachment_image_src($client_five, 'full'); 
$client_six_src = wp_get_attachment_image_src($client_six, 'full'); 
?>
    <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle ?></h4>
          <h3><?php echo $title ?><span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="boxes clients">
            <div class="col-sm-4 col-xs-6 border-right border-bottom">
              <img src="<?php  echo $client_one_src[0];  ?>" alt="" data-animated="true" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-right border-bottom">
              <img src="<?php  echo $client_two_src[0];  ?>" alt="" data-animated="true" data-delay="500" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-bottom">
              <img src="<?php  echo $client_three_src[0];  ?>" alt="" data-animated="true" data-delay="1000" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-right">
              <img src="<?php  echo $client_four_src[0];  ?>" alt="" data-animated="true" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6 border-right">
              <img src="<?php  echo $client_five_src[0];  ?>" alt="" data-animated="true" data-delay="500" class="client-image">
            </div>
            <div class="col-sm-4 col-xs-6">
              <img src="<?php  echo $client_six_src[0];  ?>" alt="" data-animated="true" data-delay="1000" class="client-image">
            </div>
          </div>
        </div>
      </div>
    </section>

<?php 
   return ob_get_clean();
}


?>