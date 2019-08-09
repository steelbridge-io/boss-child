<?php
/*
Template Name: Program Map
*/

get_header(); ?>
<div class="page-header">
  <h1><span class="umph">BOSS</span>&nbsp;<?php the_title(); ?></h1>
  <h2></h2>
</div>

<?php while (have_posts()) : the_post();
  the_content();
endwhile;
wp_reset_query();

$custom_query = new WP_Query(array(
  'post_type' => 'programs',
  'showposts' => 20
) );
?>
  <div class="masonry row">
    <?php
    // Start the Loop.
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
      
      // Include the page content template.
      get_template_part( 'templates/content', 'map' );
      
      // If comments are open or we have at least one comment, load up the comment template.
      // if ( comments_open() || get_comments_number() ) {
      //  comments_template();
      // }
    endwhile;
    wp_reset_query();
    ?>
  </div>