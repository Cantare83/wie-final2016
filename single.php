<?php get_header(); ?>

    <section class="row container">
        <div class="four columns">
          <?php get_sidebar(); ?>
        </div>
        <div class="eight columns">

<!-- Begin Page PHP -->
            <?php if( have_posts() ) {
              while( have_posts() ) {
                the_post();

                if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php } ?>

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php
              }
            } ?>
<!-- End Page PHP -->

        </div>
    </section>

<?php get_footer(); ?>
