<?php 
/* Template Name: Test Page */ 
?>
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


			<?php 
				$currentpage = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;
				$blog = new WP_Query(array(
					'post_type' => 'post',
			    	'posts_per_page' => 2,
			    	'paged' => $currentpage
				));
			?>

        	<?php while($blog->have_posts()) : $blog->the_post();?>
        		<h3><?php the_title();  ?></h3>
        	<?php endwhile; ?>


        	<?php 
        		$currentpage = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;
        		$totalpage = $blog->max_num_pages;
        		echo paginate_links( array(
        			'type' => 'list',
        			'current' =>$currentpage,
        			'total'   =>$totalpage,
        			'show_all' => true,
        			 'prev_text'          => __( '<span aria-hidden="true"><i class="ti-arrow-left"></i></span>' ),
              'next_text'          => __( '<span aria-hidden="true"><i class="ti-arrow-right"></i></span>' ),

        		) );

        	?>




<?php get_footer(); ?>