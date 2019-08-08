<?php

require_once( get_stylesheet_directory() . '/lib/gutenberg.php');
  
  add_action('wp_enqueue_scripts', 'boss_enqueue_styles_scripts');
  function boss_enqueue_styles_scripts()
  {
    
    $parent_style = 'parent-style';
    $parent_asset_app_css = 'parent-asset-app-css';
    $parent_asset_main_min_css = 'parent-asset-main-min-css';
    $parent_sass_css = 'parent-sass-css';
    $bootsstrap_css = 'bootstrap_css';
    $fontawesome_css = 'fontawesome-css';
  
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
   
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style($parent_asset_app_css, get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style($parent_asset_main_min_css, get_template_directory_uri() . '/assets/css/main.min.css');
    wp_enqueue_style( $parent_sass_css, get_template_directory_uri() . '/sass.css');
    wp_enqueue_style( $bootsstrap_css, get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style( $fontawesome_css, get_stylesheet_directory_uri() . '/assets/fontawesome/css/all.min.css' );
    wp_enqueue_style( $fontawesome_css );
    
  
    $bootstrap_js = 'booststrap-js';
    $custom_js = 'custom-js';
    $join_us_recaptcha = 'join-us-recaptcha';
    $roots_scripts = 'roots_scripts';
    $fontawesome_js = 'fontawesome-js';
    
    wp_enqueue_script( $bootstrap_js, get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', '3.3.7', true );
    wp_enqueue_script( $custom_js, get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
    wp_enqueue_script( $join_us_recaptcha, '//www.google.com/recaptcha/api.js');
    wp_register_script( $roots_scripts, get_template_directory_uri() . '/assets/js/scripts.min.js', array(), 'ab381004153e2894a3f3e4c5dd82936a', false );
    wp_enqueue_script($roots_scripts);
    //wp_register_script( $fontawesome_js, get_stylesheet_directory_uri() . '/assets/fontawesome/js/all.min.js',
    // array(),'2019', true );
   // wp_enqueue_script( $fontawesome_js );
    
  }
  
  if(is_user_logged_in()) {
    add_filter('show_admin_bar', '__return_true', 1000);
  }
  
  // Register Custom Navigation Walker
  if ( ! file_exists( get_stylesheet_directory() . '/wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
  } else {
    // file exists... require it.
    require_once get_stylesheet_directory() . '/wp-bootstrap-navwalker.php';
  }

function boss_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'boss_add_woocommerce_support' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function boss_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'boss_custom_excerpt_length', 999 );
