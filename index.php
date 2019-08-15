<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php if( is_category( array('events-archive', 'events', 'news') ) ) { ?>
<div class="masonry row">
<?php while (have_posts()) : the_post();
  
  get_template_part('templates/content', 'masonry' );
  
  endwhile;
  
  ?>
  
</div>
<?php } else {
   while (have_posts()) : the_post();
    
    get_template_part('templates/content', get_post_format());
    endwhile;
  
 }
wp_reset_postdata() ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

<?php if( is_category('events') ) { ?>
  <div id="remaining">
    <a class="button" href="<?php //echo get_site_url(); ?>/?cat=290">Events Archive</a>
  </div>
<?php } ?>
