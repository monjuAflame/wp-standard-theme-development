<!-- Footer-->
<footer id="footer-widgets">
  <div class="container">
    <div class="go-top">
      <a href="#top">
        <i class="ti-arrow-up"></i>
      </a>
    </div>
    <div class="row">
      <div class="col-md-6 ov-h">
        <div class="row">

          <?php dynamic_sidebar('footer-area') ?>

        </div>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <div class="row">
          <div class="col-md-12">
          <?php dynamic_sidebar( 'footer-subscribe-area' ) ?>
          </div>
        </div>
      </div>
    </div>
    <!-- end of row-->
  </div>
  <!-- end of container-->
</footer>
<footer id="footer">
  <div class="container">
    <div class="footer-wrap">
      <div class="row">
        <div class="col-md-4">
          <div class="copy-text">
          <?php 
              $comet = get_option( 'comet' );
              global $comet;
            ?>
            <p><i class="icon-heart red mr-15"></i><?php echo $comet['footer-copyright'] ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <?php wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'list-inline'
          ) ) ?>
        </div>
        <div class="col-md-4">
          <div class="footer-social">
            <ul>
              <li>
                <?php echo isset($comet['social-facebook']) && $comet['social-facebook']!="" ?  '<a target="_blank" href="'.$comet['social-facebook'].'"><i class="ti-facebook"></i></a>' : ''  ?>
              </li>
              <li>
                <?php echo isset($comet['social-twitter']) && $comet['social-twitter']!="" ?  '<a target="_blank" href="'.$comet['social-twitter'].'"><i class="ti-twitter-alt"></i></a>' : ''  ?>
                <a target="_blank" href="#"><i class=""></i></a>
              </li>
              <li>
                <?php echo isset($comet['social-linkedin']) && $comet['social-linkedin']!="" ?  '<a target="_blank" href="'.$comet['social-linkedin'].'"><i class="ti-linkedin"></i></a>' : ''  ?>
                <a target="_blank" href="#"><i class=""></i></a>
              </li>
              <li>
                <?php echo isset($comet['social-instagram']) && $comet['social-instagram']!="" ?  '<a target="_blank" href="'.$comet['social-instagram'].'"><i class="ti-instagram"></i></a>' : ''  ?>
                <a target="_blank" href="#"><i class=""></i></a>
              </li>
              <li>
                <?php echo isset($comet['social-dribbble']) && $comet['social-dribbble']!="" ?  '<a target="_blank" href="'.$comet['social-dribbble'].'"><i class="ti-dribbble"></i></a>' : ''  ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end of row-->
    </div>
  </div>
  <!-- end of container-->
</footer>
<!-- end of footer-->


<?php wp_footer(); ?>
</body>

</html>