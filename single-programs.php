<?php
/**
 * The Template for displaying all single posts
 *
 */

//get_header(); ?>
  
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php
      // Start the Loop.
      while ( have_posts() ) : the_post();
      
        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part( 'templates/content', 'programs' ); ?>
      
     <?php endwhile;
      ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
//get_footer();