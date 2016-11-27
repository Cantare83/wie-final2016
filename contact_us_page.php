<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
    <div class="container">
      <section class="row">
        <div class="twelve columns">
          <h2>Contact Us</h2>
        </div>
      </section>

      <section class="row">
        <div class="four columns">
          <?php dynamic_sidebar('contact1-widget'); ?>
        </div>
        <div class="four columns">
          <?php dynamic_sidebar('contact2-widget'); ?>
        </div>
        <div class="four columns">
          <?php dynamic_sidebar('contact3-widget'); ?>
        </div>
      </section>

      <section class="row">
          <div class="twelve columns">
            <?php dynamic_sidebar('contact-map-widget'); ?>
          </div>
      </section>

      <section class="row">
          <div class="twelve columns">
            <?php dynamic_sidebar('contact-message-widget'); ?>
          </div>
      </section>

      <section class="row">
          <div class="twelve columns">
            <?php dynamic_sidebar('contact-form-widget'); ?>
          </div>
      </section>
    </div>

<?php get_footer(); ?>