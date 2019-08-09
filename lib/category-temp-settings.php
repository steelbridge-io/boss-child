<?php
/* Custom functions and filters for the category templates. You will find the_excerpt() length setting and posts per
page values here. Please update this comment with searchable content if updated. */

add_action( 'pre_get_posts',  'boss_number_events_archive'  );
function boss_number_events_archive( $query ) {
  
  if ( is_category( array( 'events', 'events-archive') ) && $query->is_main_query() ) {
    $query->set( 'posts_per_page', 9 );
    
    return $query;
    
    
  }
}

/**
 * Filter the except length to 20 words.
 *
 */
add_filter('excerpt_length', 'boss_custom_excerpt_length', 999 );
function boss_custom_excerpt_length($length) {
  if( is_category( array('events-archive', 'events') ) ) {
    return 20;
  } else{
    return 30;
  }
}