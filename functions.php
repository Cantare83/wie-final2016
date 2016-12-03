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

/*--- Our History Page Widgets ---*/

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

/*--- Services and Promos Page Widgets ---*/

register_sidebar( array(
  'name'          => ('Promo Widget 1'),
  'id'            => 'promo1-widget',
  'description'   => 'First widget on the promo page',
  'before_widget' => '<div class="widget-promo1">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Promo Widget 2'),
  'id'            => 'promo2-widget',
  'description'   => 'Second widget on the promo page',
  'before_widget' => '<div class="widget-promo2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Promo Widget 3'),
  'id'            => 'promo3-widget',
  'description'   => 'Third widget on the promo page',
  'before_widget' => '<div class="widget-promo3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Icon Widget 1'),
  'id'            => 'service-icon1-widget',
  'description'   => 'First icon on the promo page',
  'before_widget' => '<div class="widget-icon1">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Icon Widget 2'),
  'id'            => 'service-icon2-widget',
  'description'   => 'Second icon on the promo page',
  'before_widget' => '<div class="widget-icon2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Icon Widget 3'),
  'id'            => 'service-icon3-widget',
  'description'   => 'Third icon on the promo page',
  'before_widget' => '<div class="widget-icon3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Page Widget 1'),
  'id'            => 'service-page1-widget',
  'description'   => 'First text area on the promo page',
  'before_widget' => '<div class="widget-page1">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Page Widget 2'),
  'id'            => 'service-page2-widget',
  'description'   => 'Second text area on the promo page',
  'before_widget' => '<div class="widget-page2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Service Page Widget 3'),
  'id'            => 'service-page3-widget',
  'description'   => 'Third text area on the promo page',
  'before_widget' => '<div class="widget-page3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

/*--- Contact Us Page Widgets ---*/

register_sidebar( array(
  'name'          => ('Contact Widget 1'),
  'id'            => 'contact1-widget',
  'description'   => 'First widget on the contact page',
  'before_widget' => '<div class="widget-contact1">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Contact Widget 2'),
  'id'            => 'contact2-widget',
  'description'   => 'Second widget on the contact page',
  'before_widget' => '<div class="widget-contact2">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Contact Widget 3'),
  'id'            => 'contact3-widget',
  'description'   => 'Third widget on the contact page',
  'before_widget' => '<div class="widget-contact3">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Contact Map Widget'),
  'id'            => 'contact-map-widget',
  'description'   => 'Map widget on the contact page',
  'before_widget' => '<div class="widget-contact-map">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

register_sidebar( array(
  'name'          => ('Contact Message Widget'),
  'id'            => 'contact-message-widget',
  'description'   => 'Message widget on the contact page',
  'before_widget' => '<div class="widget-contact-message">',
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

/*--- Enqueing CSS Files ---*/

function normalize_css() {
  wp_enqueue_style(
    'normalize-css',
    get_template_directory_uri() . '/stylesheets/normalize.css'
  );
}
add_action('wp_enqueue_scripts', 'normalize_css');

function skeleton_css() {
  wp_enqueue_style(
    'skeleton-css',
    get_template_directory_uri() . '/stylesheets/skeleton.css'
  );
}
add_action('wp_enqueue_scripts', 'skeleton_css');

function simpletextrotator_css() {
  wp_enqueue_style(
    'simpletextrotator_css',
    get_template_directory_uri() . '/stylesheets/simpletextrotator.css'
  );
}
add_action('wp_enqueue_scripts', 'simpletextrotator_css');

/*--- Enqueing JQuery Files ---*/

wp_deregister_script('jquery');

wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js','','',true);

function enqueue_textrotator() {
  wp_enqueue_script(
    'textrotator',
    get_template_directory_uri() . '/scripts/jquery.simple-text-rotator.min.js',
    array('jquery'),
    '',
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_textrotator');

function enqueue_main_js() {
  wp_enqueue_script(
    'main_js',
    get_template_directory_uri() . '/scripts/main.js',
    array('jquery'),
    '',
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_main_js');

function enqueue_fontawesome() {
  wp_enqueue_script(
    'fontawesome',
    'https://use.fontawesome.com/f9fd5646bd.js',
    array('jquery'),
    '',
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome')

?>
