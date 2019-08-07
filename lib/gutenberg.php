<?php
/**
 * Add support for Gutenberg.
 *
 * @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
 */
function boss_gutenberg_support() {

// Theme supports wide images, galleries and videos.
  add_theme_support( 'align-wide' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'responsive-embeds' );

// Make specific theme colors available in the editor.
  add_theme_support( 'editor-color-palette',
    array(
      'name' => 'dark blue',
      'color' => '#1767ef',
    ),
    array(
      'name' => 'light gray',
      'color' => '#eee',
    ),
    array(
      'name' => 'dark gray',
      'color' => '#444',
    )
  );
}
add_action( 'after_setup_theme', 'boss_gutenberg_support' );

add_action( 'after_setup_theme', 'boss_editor_style' );
function boss_editor_style() {
  
  add_editor_style( get_stylesheet_directory_uri() . '/assets/css/editor-style.css' );
}