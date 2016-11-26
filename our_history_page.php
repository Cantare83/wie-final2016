<?php
/*
Template Name: Our History Page
*/
?>

<?php get_header(); ?>
    <div class="container">
      <section class="row">
        <div class="twelve columns">
          <h2>Meet Slick</h2>
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
        <div class="twelve columns">
          <h2>Our Employees</h2>
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
    </div>

<?php get_footer(); ?>
