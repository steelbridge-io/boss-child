

<div class="col-md-4">
  <div class="thumbnail">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('thumbnail');
    }
    ?>
    <div class="caption">
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      
      <?php the_excerpt(); ?>
      
    </div>
  </div>
</div>

$custom_query = new WP_Query(
array(
'post_type' => 'work_projects',
'work_type' => 'website_development',
'posts_per_page' => 100
)
);
if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();

the_post_thumbnail($size);
the_title();
the_content();

endwhile; endif; wp_reset_query();

