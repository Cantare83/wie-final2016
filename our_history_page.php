<?php
/*
Template Name: Our History Page
*/
?>

<?php get_header(); ?>
    <div class="container">
      <section class="row">
        <div class="twelve columns">
          <h1>Our History</h1>
        </div>
      </section>
      <section class="row">
          <div class="six columns">
            <?php dynamic_sidebar('history1-widget'); ?>
          </div>
          <div class="six columns">
            <?php dynamic_sidebar('history2-widget'); ?>
          </div>
      </section>
      <section class="row">
          <div class="six columns">
            <?php dynamic_sidebar('history3-widget'); ?>
          </div>
          <div class="six columns">
            <?php dynamic_sidebar('history4-widget'); ?>
          </div>
      </section>
      <section class="row">
        <div class="twelve columns history_button">
          <a class="button" href="http://www.chrisihendricks.net/wie-final2016/contact-us/">Make An Appointment</a>
        </div>

      </section>
    </div>

<?php get_footer(); ?>
