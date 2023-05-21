<!-- header -->

<?php get_header() ?>

<!-- header  post -->



    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
          <?php  $comet = get_option( 'comet' ); global $comet; ?>
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php echo $comet['blog-title'] ?><span class="red-dot"></span></h1>
                <h4><?php echo $comet['blog-subtitle'] ?></h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- post -->
            <div class="blog-posts">

                <?php while( have_posts()) : the_post() ?>
                     <?php get_template_part( 'post-formats/content', get_post_format() ) ?>
                <?php endwhile; ?>

            </div>
            <!-- post end -->

            <!-- pagination -->
            <?php 
                if(function_exists('the_posts_pagination')){
                    the_posts_pagination( 
                        array(
                            'prev_text' => '<span aria-hidden="true"><i class="ti-arrow-left"></i></span>',
                            'next_text' => '<span aria-hidden="true"><i class="ti-arrow-right"></i></span>',
                        ), get_the_posts_pagination( 
                            array(
                                'class' => 'pagination',
                                'screen_reader_text' => ' '
                            )
                        )
                    );
                }
            ?>
            <!-- pagination end -->
            
          </div>

          <!-- sidebar -->

          <?php get_sidebar(); ?>

          <!-- sidebar end -->


        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>

    <!-- footer -->

    <?php get_footer(); ?>

    <!-- footer end -->