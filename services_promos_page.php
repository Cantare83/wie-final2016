<?php
/*
Template Name: Our Services and Promotions Page
*/
?>

<?php get_header(); ?>
    <div class="container">
      <section class="row">
        <div class="twelve columns">
          <h1>Services & Promotions</h1>
        </div>
      </section>
      <section class="row">
        <div class="four columns">
          <?php dynamic_sidebar('promo1-widget'); ?>
        </div>
        <div class="four columns">
          <?php dynamic_sidebar('promo2-widget'); ?>
        </div>
        <div class="four columns">
          <?php dynamic_sidebar('promo3-widget'); ?>
        </div>
      </section>

      <section class="row">
          <div class="three columns">
            <?php dynamic_sidebar('service-icon1-widget'); ?>
          </div>
          <div class="nine columns">
            <?php dynamic_sidebar('service-page1-widget'); ?>
          </div>
      </section>
      <section class="row">
          <div class="three columns">
            <?php dynamic_sidebar('service-icon2-widget'); ?>
          </div>
          <div class="nine columns">
            <?php dynamic_sidebar('service-page2-widget'); ?>
          </div>
      </section>
      <section class="row">
          <div class="three columns">
            <?php dynamic_sidebar('service-icon3-widget'); ?>
          </div>
          <div class="nine columns">
            <?php dynamic_sidebar('service-page3-widget'); ?>
          </div>
      </section>

      <section class="row">
        <div class="twelve columns promo_button">
          <a class="button" href="http://www.chrisihendricks.net/wie-final2016/contact-us/">Get An Estimate</a>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
