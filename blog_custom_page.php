<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
  <div class="container">
    <section class="row">
      <div class="twelve columns">
      <h2>Shop Talk</h2>
      </div>
    </section>
    <section class="row">
        <div class="six columns">
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); ?>

                <div class="thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>

            <?php
              } //end while
                } //end if
                  ?>
          </div>
          <div class="six columns blog-text">
            <div class="blog-excerpt">
              <?php if (have_posts()) :
                  while (have_posts()) : the_post(); ?>

                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                      <span class="date"><?php echo get_the_date(); ?></span>

                      <?php the_excerpt();
                    endwhile; ?>

                  <div class="navigation">
                      <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                  </div>

                  <?php else: ?>

                  <div class="404-section">
                      <p><?php _e('None found.','example'); ?></p>
                  </div>

              <?php endif; wp_reset_query(); ?>
          </div>
        </div>
    </section>
  </div>

<?php get_footer(); ?>
