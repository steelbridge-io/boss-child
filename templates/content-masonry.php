

<div class="col-md-4">
  
  <?php
  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    echo ' <div class="thumbnail">';
    the_post_thumbnail('thumbnail');
    echo '<div class="masonry caption"><!-- /.archive-thumb -->';
  }
  ?>
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    
    <?php the_excerpt(); ?>
  </div>
  </div>
</div>
