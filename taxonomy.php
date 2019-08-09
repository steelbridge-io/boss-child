<?php //
get_header();
//get_template_part('templates/page', 'header');
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div class="page-header">
  <h1><span class="umph">BOSS</span>&nbsp;<?php echo $term->name; ?></h1>
  <h2></h2>
</div>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php
    if (is_tax( 'job-type' )) {
      echo "Sorry, there are no positions currently open. Please check back soon.";
    } else {
      _e('Sorry, no results were found.', 'roots');
    }
    ?>
  </div>
  <?php // get_search_form(); ?>
<?php endif; ?>
<div class="masonry row">
<?php while (have_posts()) : the_post();
 get_template_part('templates/content', 'masonry');
 endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>