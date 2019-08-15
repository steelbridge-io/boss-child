<?php

// Add our custom loop
add_action( 'front_page_news', 'news_loop' );
function news_loop() {
  
  $taxonomy = 'news';
  $queried_term = get_query_var($taxonomy);
  $terms = get_terms($taxonomy, 'slug='.$queried_term);
  
  
  // Define the query
  $args = array(
    'post_type' => 'post',
    'machine-type' => $queried_term ,
    'posts_per_page' => -2,
  );

// run the query
  $query = new WP_Query( $args );
  if( $query->have_posts() ) {
    
    // Start the Loop
    while ( $query->have_posts() ) : $query->the_post();  ?>
      
      <div class="col-md-6">
        
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <?php  if ( has_post_thumbnail() ) { ?>
          <div class="thumbnail row-padding">
            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            ?>
            <img src="<?php echo $thumb_url; ?>" alt="...">
            <div class="panel panel-default mt-1618">
              <div class="caption">
                <p>PUBLISHED:&nbsp;<strong><?php echo get_the_date(); ?></strong></p>
                <div class="entry-content">
                  <?php echo the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>"> ... Read more</a>
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="thumbnail row-padding">
            <div class="panel panel-default mt-1618">
              <div class="caption">
                <p>PUBLISHED:&nbsp;<strong><?php echo get_the_date(); ?></strong></p>
                <div class="entry-content">
                  <?php echo the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>"> ... Read more</a>
                </div>
              </div>
            </div>
          </div>
        
        <?php } ?>
      
      </div>
    
    <?php endwhile;?>
    
    <hr/>
    
    <?php
    
  }
  // use reset postdata to restore orginal query
  wp_reset_postdata();
}
