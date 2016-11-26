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
      <div class="hp-header-wrapper">
          <header>
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
                  <?php dynamic_sidebar('promo-widget'); ?>
                </div>
              </section>
              <section class="row hp-menu">
                <div class="twelve columns">
                <?php
                    wp_nav_menu( array(
                      'sort_column' => 'menu-order',
                      'container_class' => 'menu-header'
                    ));
                ?>
                </div>
              </section>
          </header>
      </div>
      <div class="container">  <!-- Begin Container Div -->
          <!-- Begin Main Content -->
          <section class="row">
            <div class="twelve columns">
                <h2>What Can We Do For You?</h2>
            </div>
          </section>
          <section class="row">
            <div class="four columns">
              <?php dynamic_sidebar('service1-widget'); ?>
            </div>
            <div class="four columns">
              <?php dynamic_sidebar('service2-widget'); ?>
            </div>
            <div class="four columns">
              <?php dynamic_sidebar('service3-widget'); ?>
            </div>
          </section>
      </div>
      <div class="cta-wrapper">
          <section class="row">
            <div class="twelve columns">
              <?php dynamic_sidebar('index-cta-widget'); ?>
            </div>
          </section>
      </div>
      <div class="blog-wrapper">
          <section class="row">
            <div class="twelve columns">
                <h2>Shop Talk</h2>
            </div>
          </section>
          <section class="row">
              <div class="six columns">
                <!-- Begin Loop -->
                <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post(); ?>

                      <div class="index-thumbnail">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                      </div>

                  <?php
                    } //end while
                      } //end if
                        ?>
                </div>
                <div class="six columns">
                  <?php
                    if ( have_posts() ) {
                      while ( have_posts() ) {
                        the_post(); ?>

                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_excerpt(); ?>
                      <a href="<?php the_permalink(); ?>">Read More</a>

                  <?php
                    } //end while
                  } //end if
                ?>
                <!-- End Loop -->
              </div>
          </section>
      </div>
      <!-- End Main Content -->

<?php get_footer(); ?>
