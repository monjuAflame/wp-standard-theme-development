<?php 


add_shortcode( 'home-testimonials', 'comet_home_testimonials' );
function comet_home_testimonials($atts, $content = NULL){
	$attrebut = extract(shortcode_atts( array(

      'title'            => 'What They Say',
      'bg_img'         => '',

    ), $atts));

	ob_start();
    $testimonialsimg = wp_get_attachment_image_src($bg_img, 'full');
?>
    <section class="parallax">
      <div data-parallax="scroll" data-image-src="<?php echo $testimonialsimg[0]; ?>" class="parallax-bg"></div>
      <div class="parallax-overlay pb-50 pt-50">
        <div class="container">
          <div class="title center">
            <h3><?php echo $title; ?><span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="section-content">
            <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">
              <ul class="slides">
                <?php 
          				$home_testimonials = new WP_Query(array(
          					'post_type' => 'home-testimonials'
          				));
        			 ?>
        			  <?php while($home_testimonials->have_posts()) : $home_testimonials->the_post();?>
    	           <li>
                    <blockquote>
                      <p>"<?php echo the_content(); ?>"</p>
                      <footer><?php echo the_title(); ?></footer>
                    </blockquote>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
   return ob_get_clean();
}
?>