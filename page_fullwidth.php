<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

    <section class="row container">
        <div class="twelve columns">
            <?php if( have_posts() ) {
              while( have_posts() ) {
                the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php
              }
            } ?>
        </div>
    </section>

<?php get_footer(); ?>
