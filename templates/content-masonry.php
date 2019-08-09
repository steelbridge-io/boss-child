

<div class="col-md-4">
  <div class="thumbnail">
  <?php
  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    the_post_thumbnail('thumbnail');
  }
  ?>
    <div class="masonry caption">
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php the_excerpt(); ?>
  </div>
  </div>
</div>
