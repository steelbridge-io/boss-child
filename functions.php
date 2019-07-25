<?php
  
  
  add_action('wp_enqueue_scripts', 'boss_enqueue_styles_scripts');
  function boss_enqueue_styles_scripts()
  {
    
    $parent_style = 'parent-style';
    $parent_asset_app_css = 'parent-asset-app-css';
    $parent_asset_main_min_css = 'parent-asset-main-min-css';
    $parent_sass_css = 'parent-sass-css';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style($parent_asset_app_css, get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style($parent_asset_main_min_css, get_template_directory_uri() . '/assets/css/main.min.css');
    wp_enqueue_style($parent_sass_css, get_template_directory_uri() . '/sass.css');
    
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
  }
