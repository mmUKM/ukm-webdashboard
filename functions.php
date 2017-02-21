<?php
/**
 *
 */
require( get_template_directory() . '/inc/theme-update-checker.php' );
  new ThemeUpdateChecker(
    'ukm-malaycivilization-master',
    'https://raw.githubusercontent.com/mmUKM/ukm-webdashboard/master/package.json'
);
/**
 * favicon.ico for all pages
 * wp-login, dashboard, frontpage
 */
function wdash_favicon() {
  $favicon_url = get_stylesheet_directory_uri() . '/favicon.ico';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

add_action( 'login_head', 'wdash_favicon' );
add_action( 'admin_head', 'wdash_favicon' );
add_action( 'wp_head', 'wdash_favicon' );
/**
 * Theme configuration
 */
function wdash_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form' ) );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 145, 145, true );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  load_theme_textdomain( 'atma', get_template_directory() . '/lang' );
  register_nav_menus( array(
    'top'       => __( 'Top Navigation', 'atma' ),
    'main'      => __( 'Main Navigation', 'atma' ),
    'database'  => __( 'Database Navigation', 'atma' ),
    'footer'    => __( 'Footer Navigation', 'atma' ),
  ) );
  add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'wdash_setup' );

/**
 * Theme Stylesheet & Javascripts
 * UIKit
 */
function wdash_scripts() {
  // CSS
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '201702', false );
  wp_enqueue_script( 'uikit', get_template_directory_uri() . '/vendor/uikit/js/uikit.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-accordian', get_template_directory_uri() . '/vendor/uikit/js/components/accordion.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-slider', get_template_directory_uri() . '/vendor/uikit/js/components/slider.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-slideshow', get_template_directory_uri() . '/vendor/uikit/js/components/slideshow.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-slideshow-fx', get_template_directory_uri() . '/vendor/uikit/js/components/slideshow-fx.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-slideset', get_template_directory_uri() . '/vendor/uikit/js/components/slideset.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-lightbox', get_template_directory_uri() . '/vendor/uikit/js/components/lightbox.min.js', array(), '201702', true );
  wp_enqueue_script( 'uikit-search', get_template_directory_uri() . '/vendor/uikit/js/components/search.min.js', array(), '201702', true );
  wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/scripts.min.js', array(), '201702', true );
  // JS
  wp_enqueue_style( 'uikit', get_template_directory_uri() . '/vendor/uikit/css/uikit.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'uikit-accordian', get_template_directory_uri() . '/vendor/uikit/css/components/accordion.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'uikit-slider', get_template_directory_uri() . '/vendor/uikit/css/components/slider.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'uikit-slideshow', get_template_directory_uri() . '/vendor/uikit/css/components/slideshow.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'uikit-slidenav', get_template_directory_uri() . '/vendor/uikit/css/components/slidenav.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'uikit-search', get_template_directory_uri() . '/vendor/uikit/css/components/search.almost-flat.min.css', false, '201702' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), false, '201702' );
}
add_action( 'wp_enqueue_scripts', 'wdash_scripts' );

/**
 * Load theme post type, taxonomy, settings
 */
function wdash_load_configurations() {

  require( get_template_directory() . '/inc/theme-login.php' );
  require( get_template_directory() . '/inc/theme-metabox.php' );
  require( get_template_directory() . '/inc/theme-post-type.php' );
  require( get_template_directory() . '/inc/theme-walker-menu.php' );
  require( get_template_directory() . '/inc/theme-widget.php' );
}
add_action( 'after_setup_theme', 'wdash_load_configurations' );

/**
 * Widgets
 * Register sidebar
 */
function wdash_widgets() {
  register_sidebar( array(
    'name'            => __( 'Page Sidebar', 'ukmtheme' ),
    'id'              => 'sidebar-1',
    'description'     => __( 'Appears in frontpage, pages, posts and post type.', 'ukmtheme' ),
    'before_widget'   => '<aside class="widgets padding-bottom">',
    'after_widget'    => '</aside>',
    'before_title'    => '<h3 class="widget-title">',
    'after_title'     => '</h3>',
  ) );

  register_sidebar( array(
    'name'            => __( 'Frontpage: Three Column', 'ukmtheme' ),
    'id'              => 'sidebar-2',
    'description'     => __( 'Appears when using the optional Front Page', 'ukmtheme' ),
    'before_widget'   => '<div class="uk-width-medium-1-3" style="min-height: 100px;">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="widget-title">',
    'after_title'     => '</h3>',
  ) );
}
add_action( 'widgets_init', 'wdash_widgets' );


function wdash_add_revisions_support_for_pages() {
	add_post_type_support( 'page', 'revisions' );
}
add_action( 'init', 'wdash_add_revisions_support_for_pages' );

// Add a custom user role

$result = add_role( 'webmaster', __( 'Webmaster' ),

array(

'read' => true, // true allows this capability
'edit_posts' => false, // Allows user to edit their own posts
'edit_pages' => true, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => false, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User can’t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User can’t update any plugins
'update_core' => false // user cant perform core updates

)

);