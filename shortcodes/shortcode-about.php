<?php 


add_shortcode( 'home-about', 'comet_home_about' );

function comet_home_about($atts, $content){

    $attrebut = extract(shortcode_atts( array(
        
        'title'     => 'Who We Are',
        'subtitle'  => 'We are driven by creative.'

    ), $atts));

	ob_start();
?>

 <section id="about">
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle ?></h4>
          <h2><?php echo $title ?><span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="col-md-8 col-md-offset-2">
            <p class="lead-text serif text-center"><?php echo do_shortcode( $content ); ?></p>
          </div>
        </div>
      </div>
    </section>


<?php 
   return ob_get_clean();
}

?>