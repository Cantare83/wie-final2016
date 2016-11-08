<?php get_header(); ?>

<!-- Begin Main Content -->
<section class="row">
    <div class="twelve columns">
      <!-- Begin Loop -->
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); ?>

            <?php
              if ( has_post_thumbnail() ) {
                  the_post_thumbnail('thumbnail');
              }
            ?>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More</a>

        <?php
          } //end while
        } //end if
      ?>
      <!-- Add the pagination function here -->
                <div class="row">
                    <div class="twelve columns">
                      <div class="pagination">
                        <?php next_posts_link('More Posts'); ?>
                      </div>
                      <div class="pagination">
                        <?php previous_posts_link('Previous Posts'); ?>
                      </div>
                    </div>
                </div>
      <!-- End Loop -->
    </div>
</section>
<!-- End Main Content -->

<?php get_footer(); ?>
