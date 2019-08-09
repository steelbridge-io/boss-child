<?php
/*
Template Name: Program Map
*/

get_template_part('templates/page', 'header');
get_template_part('templates/content', 'page');

 //get_template_part('templates/page', 'header');
 // while (have_posts()) : the_post();
 //the_content();
 //endwhile;
 ?><!-- <div id="mapp0_poi_list" class="mapp-poi-list" style="width:100%"></div>--><?php

get_header(); ?>
        <h1><?php the_title(); ?></h1>
        <?php while (have_posts()) : the_post();
          the_content();
        endwhile;
        
        query_posts(array(
          'post_type' => 'programs',
          'showposts' => 20
        ) );
        ?>
        <div class="masonry row">
        <?php
        // Start the Loop.
        while ( have_posts() ) :the_post();
          
          // Include the page content template.
          get_template_part( 'templates/content', 'map' );
          
          // If comments are open or we have at least one comment, load up the comment template.
         // if ( comments_open() || get_comments_number() ) {
          //  comments_template();
         // }
        endwhile;
        ?>
        </div>
<?php
//get_sidebar();
//get_footer();





