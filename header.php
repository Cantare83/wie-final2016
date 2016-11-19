<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
          <!-- Links to our Style.css file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>
    <body>
      <div class="header-wrapper">
          <header>
              <div class="row">
                  <div class="three columns">
                      <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/SlicksAutoBody.png" alt="Slick's Auto Repair" /></a>
                  </div>
                  <div class="nine columns top-header">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <p>888 - 203 - 4455</p>
                     <p>Hours: M - F 8am - 8pm, Saturday 9am - 5pm</p>
                    <a class="fa fa-facebook" href="https://facebook.com"></a>
                    <a class="fa fa-twitter" href="https://twitter.com"></a>
                    <a class="fa fa-linkedin" href="https://www.linkedin.com"></a>
                  </div>
              </div>
              <div class="row">
                <?php
                    wp_nav_menu( array(
                      'sort_column' => 'menu-order',
                      'container_class' => 'menu-header'
                    ));
                ?>
              </div>
          </header>
      </div>
      <div class="container">  <!-- Begin Container Div -->
