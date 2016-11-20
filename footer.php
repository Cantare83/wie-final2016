  </div> <!-- End Container Div -->

    <div class="footer-wrapper">
        <footer>
            <section class="row">
                <div class="three columns">
                    <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/SlicksAutoBody.png" alt="Slick's Auto Repair" /></a>
                </div>
                <div class="nine columns right-header">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <p>888 - 203 - 4455</p>
                   <p>Hours: M - F 8am - 8pm, Saturday 9am - 5pm</p>
                  <a class="fa fa-facebook" href="https://facebook.com"></a>
                  <a class="fa fa-twitter" href="https://twitter.com"></a>
                  <a class="fa fa-linkedin" href="https://www.linkedin.com"></a>
                </div>
            </section>
            <section class="row">
              <div class="twelve columns">
              <?php
                  wp_nav_menu( array(
                    'sort_column' => 'menu-order',
                    'container_class' => 'menu-header'
                  ));
              ?>
              </div>
            </section>
            <section class="row">
              <div class="three columns">
                <p>
                  12345 Oaks Lane <br/> Gainesville, FL 33445 <br/> slick@slicksautorepair.com <br/> 888 - 203 - 4455
                </p>
              </div>
              <div class="nine columns">
                <?php dynamic_sidebar('footer-one'); ?>
              </div>
            </section>
            <section class="row">
              <div class="twelve columns copyright">
                <p>Designed by Chrisi Hendricks. Copyright &copy; 2016</p>
              </div>
            </section>
          </footer>
      </div>

      <?php wp_footer(); ?>

      <script src="https://use.fontawesome.com/f9fd5646bd.js"></script>

    </body>
</html>
