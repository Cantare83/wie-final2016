<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Sidebar Widget ---*/
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'right widget in the footer',
        'before_widget' => '<div class="widget-footer widget-right">',
        'after_widget'  => '</div>'
    ));

    /*--- Index Page Widgets ---*/

    register_sidebar( array(
      'name'          => ('Index Promo Widget'),
      'id'            => 'promo-widget',
      'description'   => 'Widget for the promo on the index page',
      'before_widget' => '<div class="widget-promo">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
  ));

  register_sidebar( array(
    'name'          => ('Index Service 1 Widget'),
    'id'            => 'service1-widget',
    'description'   => 'Widget for the first service on the index page',
    'before_widget' => '<div class="widget-service1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Index Service 2 Widget'),
  'id'            => 'service2-widget',
  'description'   => 'Widget for the second service on the index page',
  'before_widget' => '<div class="widget-service2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Index Service 3 Widget'),
  'id'            => 'service3-widget',
  'description'   => 'Widget for the third service on the index page',
  'before_widget' => '<div class="widget-service3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Index CTA Widget'),
  'id'            => 'index-cta-widget',
  'description'   => 'Widget for the cta on the index page',
  'before_widget' => '<div class="widget-index-cta">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Our History Widget 1'),
  'id'            => 'history1-widget',
  'description'   => 'First widget on the history page',
  'before_widget' => '<div class="widget-history1">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Our History Widget 2'),
  'id'            => 'history2-widget',
  'description'   => 'Second widget on the history page',
  'before_widget' => '<div class="widget-history2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Our History Widget 3'),
  'id'            => 'history3-widget',
  'description'   => 'Third widget on the history page',
  'before_widget' => '<div class="widget-history3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Our History Widget 4'),
  'id'            => 'history4-widget',
  'description'   => 'Fourth widget on the history page',
  'before_widget' => '<div class="widget-history4">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

}
add_action('widgets_init', 'blank_widgets_init');

/*--------------- Enable Menus -----------*/

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );

/*--------------- Custom Post: Links -----------*/

function custom_web_resources() {
    $labels = array(
/*---Begin Labels Options ---*/
    'name'               => _x( 'Links', 'post type general name' ),
    'singular_name'      => _x( 'Link', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'weblink' ),
    'add_new_item'       => __( 'Add Link' ),
    'edit_item'          => __( 'Edit Links' ),
    'new_item'           => __( 'New Link' ),
    'all_items'          => __( 'All Links' ),
    'view_item'          => __( 'View Links' ),
    'search_items'       => __( 'Search Links' ),
    'not_found'          => __( 'No links found' ),
    'not_found_in_trash' => __( 'No links found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Web Links'
    );
    $args = array(
/*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Place to put useful links to other web resources',
    'public'        => true,
    'menu-position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has-archive'   => true,
    );
    register_post_type( 'links', $args );
}
add_action('init', 'custom_web_resources');

?>
