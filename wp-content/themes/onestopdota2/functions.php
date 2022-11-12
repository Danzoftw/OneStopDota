<?php

/*
=============================================================
  Enqueue Scripts and Styles
=============================================================
*/
function theme_enqueue_scripts() {
  //CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1', 'all');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), '4.1', 'all');
  wp_enqueue_style('slick-slider',get_template_directory_uri() . '/css/slick.css', array(), '3.3.4', 'all');
  wp_enqueue_style('aos',get_template_directory_uri() . '/css/aos.css', array(), '3.3.4', 'all');
  wp_enqueue_style('onestopdota', get_template_directory_uri() . '/css/style.css', array(), '3.3.4', 'all');

 	//JS
  wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array('jquery'), false);
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false);
  wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), false);
  wp_enqueue_script('aos-js', get_stylesheet_directory_uri() . '/js/aos.js', array('jquery'), false);
  wp_enqueue_script('onestopdota', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false);
 }
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


/*
=============================================================
  Hide admin bar
=============================================================
*/
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function remove_admin_bar(){
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

/*
=============================================================
  Register Menus
=============================================================
*/
function register_my_menus() {
  add_theme_support('menus');
  register_nav_menu('primary_header','Primary header navigation');
  register_nav_menu('primary_footer','Primary footer navigation');
  register_nav_menu('primary_mobile','Mobile header navigation');
}
add_action('init', 'register_my_menus');


/*
===================================
  Theme support function
===================================
*/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');


function cc_customize_register($wp_customize) {
	//header logo
	$wp_customize->add_section("site_logo", array(
    "title" => __("Site Logo", "onestopdota"),
    "priority" => 30,
	));
  $wp_customize->add_setting("logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "logo_url", array(
    'label' => __('Upload a white logo', 'onestopdota'),
    'section' => 'site_logo',
    'settings' => 'logo_url'
    )
  ));
  //footer logo
  $wp_customize->add_section("footer_logo", array(
    "title" => __("Footer Logo", "onestopdota"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("footer_logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "footer_logo_url", array(
    'label' => __('Upload a footer logo', 'onestopdota'),
    'section' => 'footer_logo',
    'settings' => 'footer_logo_url'
    )
  ));
  /*Site copyright*/
  $wp_customize->add_section("site_copyright", array(
	    "title" => __("Site copyright", "onestopdota"),
	    "priority" => 30,
	));
  $wp_customize->add_setting("copyright_text", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "copyright_text", array(
      'label' => __('Copyright Text', 'onestopdota'),
      'section' => 'site_copyright',
      'settings' => 'copyright_text'
      )
  ));
  /*Social media links*/
  $wp_customize->add_section("social_links", array(
    "title" => __("Social media links", "onestopdota"),
    "priority" => 30,
  ));
  
  $wp_customize->add_setting("vimeo_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("linkedin_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("vimeo_logo", array(
    "default" => "",
  ));
  $wp_customize->add_setting("linkedin_logo", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "vimeo_link", array(
      'label' => __('Vimeo link', 'onestopdota'),
      'section' => 'social_links',
      'settings' => 'vimeo_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "vimeo_logo", array(
    'label' => __('Upload Vimeo logo', 'onestopdota'),
    'section' => 'social_links',
    'settings' => 'vimeo_logo'
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "linkedin_link", array(
      'label' => __('Linkedin link', 'onestopdota'),
      'section' => 'social_links',
      'settings' => 'linkedin_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "linkedin_logo", array(
    'label' => __('Upload Linkedin logo', 'onestopdota'),
    'section' => 'social_links',
    'settings' => 'linkedin_logo'
    )
  ));
}
add_action("customize_register", "cc_customize_register");

/*
  ===================================
  Excerpt Limit
  ===================================
*/
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
  ===================================
  Excerpt Custom
  ===================================
*/
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*
  ===================================
  Sidebar function
  ===================================
*/
function widget_setup(){
    register_sidebar(
        array(
            'name'=>'Footer subscribe form',
            'id' => 'subscribe_section',
            'class'=> 'subscribe-section',
            'description' => 'Footer subscribe',
            'before_widget' => '<aside id="%1$s" class="mb-4 mb-sm-0 widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<p class="widget-title theme color-dark-gray mb-2 mb-sm-4">',
            'after_title' => '</p>',
        )
    );
    register_sidebar(
        array(
            'name'=>'Contact details',
            'id' => 'contact_section',
            'class'=> 'contact-section',
            'description' => 'Contact Sidebar',
            'before_widget' => '<aside id="%1$s" class="mb-4 mb-sm-0 widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="widget-title theme color-body-text mb-2 mb-sm-4">',
            'after_title' => '</h4>',
        )
    );
}
add_action('widgets_init','widget_setup');


/*-------------------------------------------------------------
  Custom Post Type - News
---------------------------------------------------------------*/
function post_type_news() {
  $labels = array(
    'name'               => _x( 'News', 'post type general name' ),
    'singular_name'      => _x( 'News', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'News' ),
    'add_new_item'       => __( 'Add New News' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Story',
    'public'        => true,
    'menu_position' => 3,
    'taxonomies'    => array( 'category' ),
    'menu_icon'     => 'dashicons-format-status',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments'),
    'has_archive'   => true,
  );
  register_post_type( 'news', $args );
  // register_taxonomy_for_object_type( 'category', 'stories' );
}
add_action( 'init', 'post_type_news' );

//taxonomy for news
function register_taxonomy_for_news()
{
  $labels = [
    'name'              => _x('News categories', 'taxonomy general name'),
    'singular_name'     => _x('News category', 'taxonomy singular name'),
    'search_items'      => __('Search News category'),
    'all_items'         => __('All News categories'),
    'parent_item'       => __('Parent News category'),
    'parent_item_colon' => __('Parent News category:'),
    'edit_item'         => __('Edit News category'),
    'update_item'       => __('Update News category'),
    'add_new_item'      => __('Add New News category'),
    'new_item_name'     => __('New News category Name'),
    'menu_name'         => __('News categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'news_category'],
    'show_in_rest' => true,
    'supports' => array('editor')
  ];
  register_taxonomy('news_category', ['news'], $args);
}
add_action('init', 'register_taxonomy_for_news');



/*-------------------------------------------------------------
  Custom Post Type - concluded
---------------------------------------------------------------*/
function post_type_concluded() {
  $labels = array(
    'name'               => _x( 'Concluded', 'post type general name' ),
    'singular_name'      => _x( 'Concluded', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Concluded' ),
    'add_new_item'       => __( 'Add New Concluded' ),
    'edit_item'          => __( 'Edit Concluded' ),
    'new_item'           => __( 'New Concluded' ),
    'all_items'          => __( 'All Concluded' ),
    'view_item'          => __( 'View Concluded' ),
    'search_items'       => __( 'Search Concluded' ),
    'not_found'          => __( 'No Concluded found' ),
    'not_found_in_trash' => __( 'No Concluded found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Concluded'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Story',
    'public'        => true,
    'menu_position' => 3,
    'taxonomies'    => array( 'category' ),
    'menu_icon'     => 'dashicons-format-status',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments'),
    'has_archive'   => true,
  );
  register_post_type( 'concluded', $args );
  // register_taxonomy_for_object_type( 'category', 'stories' );
}
add_action( 'init', 'post_type_concluded' );

//taxonomy for Concluded
function register_taxonomy_for_concluded()
{
  $labels = [
    'name'              => _x('Concluded categories', 'taxonomy general name'),
    'singular_name'     => _x('Concluded category', 'taxonomy singular name'),
    'search_items'      => __('Search Concluded category'),
    'all_items'         => __('All Concluded categories'),
    'parent_item'       => __('Parent Concluded category'),
    'parent_item_colon' => __('Parent Concluded category:'),
    'edit_item'         => __('Edit Concluded category'),
    'update_item'       => __('Update Concluded category'),
    'add_new_item'      => __('Add New Concluded category'),
    'new_item_name'     => __('New Concluded category Name'),
    'menu_name'         => __('Concluded categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'concluded_category'],
    'show_in_rest' => true,
    'supports' => array('editor')
  ];
  register_taxonomy('concluded_category', ['concluded'], $args);
}
add_action('init', 'register_taxonomy_for_concluded');


/*-------------------------------------------------------------
  Custom Post Type - upcoming
---------------------------------------------------------------*/
function post_type_upcoming() {
  $labels = array(
    'name'               => _x( 'Upcoming', 'post type general name' ),
    'singular_name'      => _x( 'Upcoming', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Upcoming' ),
    'add_new_item'       => __( 'Add New Upcoming' ),
    'edit_item'          => __( 'Edit Upcoming' ),
    'new_item'           => __( 'New Upcoming' ),
    'all_items'          => __( 'All Upcoming' ),
    'view_item'          => __( 'View Upcoming' ),
    'search_items'       => __( 'Search Upcoming' ),
    'not_found'          => __( 'No Upcoming found' ),
    'not_found_in_trash' => __( 'No Upcoming found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Upcoming'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Story',
    'public'        => true,
    'menu_position' => 3,
    'taxonomies'    => array( 'category' ),
    'menu_icon'     => 'dashicons-format-status',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments'),
    'has_archive'   => true,
  );
  register_post_type( 'upcoming', $args );
  // register_taxonomy_for_object_type( 'category', 'stories' );
}
add_action( 'init', 'post_type_upcoming' );

//taxonomy for Upcoming
function register_taxonomy_for_upcoming()
{
  $labels = [
    'name'              => _x('Upcoming categories', 'taxonomy general name'),
    'singular_name'     => _x('Upcoming category', 'taxonomy singular name'),
    'search_items'      => __('Search Upcoming category'),
    'all_items'         => __('All Upcoming categories'),
    'parent_item'       => __('Parent Upcoming category'),
    'parent_item_colon' => __('Parent Upcoming category:'),
    'edit_item'         => __('Edit Upcoming category'),
    'update_item'       => __('Update Upcoming category'),
    'add_new_item'      => __('Add New Upcoming category'),
    'new_item_name'     => __('New Upcoming category Name'),
    'menu_name'         => __('Upcoming categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'upcoming_category'],
    'show_in_rest' => true,
    'supports' => array('editor')
  ];
  register_taxonomy('upcoming_category', ['upcoming'], $args);
}
add_action('init', 'register_taxonomy_for_upcoming');