<?php get_header(); ?>


<section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/images/bg/18.jpg" class="parallax-bg"></div>
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
            <?php while (have_posts()): the_post(); ?>
            <article class="post-single">
                <div class="post-info">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h6 class="upper"><span>By</span><a href="#"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F Y'); ?></span><span class="dot"></span><?php the_tags() ?></h6>
                </div>
                <div class="post-media">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="post-body">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; ?>

            <!-- end of article-->
            
            <!-- end of comments-->
            
      <?php
          // If comments are open or we have at least one comment, load up the comment template.
           if ( comments_open() || get_comments_number() ) :
               comments_template();
           endif;
      ?>


            <!-- end of comment form-->
          </div>

        <?php get_sidebar(); ?>

        </div>
        <!-- end of row-->

      </div>
    </section>

<?php get_footer(); ?>