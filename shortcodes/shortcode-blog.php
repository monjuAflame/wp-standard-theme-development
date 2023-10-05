<?php 


add_shortcode( 'home-blog', 'comet_home_blog' );

function comet_home_blog($atts, $content = NULL){

    $attrebut = extract(shortcode_atts( array(

      'title'            => 'The Blog',
      'subtitle'         => 'We have a few tips for you.',
      'blog_btn_link'    => '',
      'post_per_page'    => 2


    ), $atts));

	ob_start();
?>


   <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle ?></h4>
          <h2><?php echo $title ?><span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="col-md-8 col-md-offset-2">
            <?php 



            	$home_blog = new WP_Query(array(
            		'post_type' => 'post',
                'posts_per_page' => $post_per_page,
            	));
            ?>

        	<?php while($home_blog->have_posts()) : $home_blog->the_post();?>
                <div class="blog-post">
                  <div class="post-body">
                    <h3 class="serif"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                    <hr>
                    <p class="serif"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                    <div class="post-info upper"><a href="<?php echo the_permalink(); ?>">Read More</a><span class="pull-right black-text"><?php the_time('F j, Y'); ?></span></div>
                  </div>
                </div>
            <?php endwhile; ?>
            
          </div>
          <div class="clearfix"></div>
          <div class="mt-25">
            <p class="text-center"><a href="<?php echo $blog_btn_link; ?>" class="btn btn-color-out">View Full Blog</a></p>
          </div>
        </div>
      </div>
    </section>
     
<?php 
   return ob_get_clean();
}


?>