<?php

// Add our custom loop
add_action( 'front_page_news', 'news_loop' );
function news_loop() {
  
  $taxonomy = 'tax-name';
  $queried_term = get_query_var($taxonomy);
  $terms = get_terms($taxonomy, 'slug='.$queried_term);
  
  
  // Define the query
  $args = array(
    'post_type' => 'custom_cpt',
    'machine-type' => $queried_term ,
    'posts_per_page' => -1,
  );

// run the query
  $query = new WP_Query( $args );
  if( $query->have_posts() ) {
    
    // Start the Loop
    while ( $query->have_posts() ) : $query->the_post();  ?>
      
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <p><?php echo get_the_date(); ?></p>
      <div class="entry-content">
        <?php echo the_content(); ?>
        <a href="<?php echo get_permalink(); ?>"> ... Find Out More</a>
      </div>
    
    <?php endwhile;?>
    
    <hr/>
    
    <?php
    
  }
  // use reset postdata to restore orginal query
  wp_reset_postdata();
}
