<?php
  
  $sub        = types_render_field( 'subtitle', array() );
  $date       = types_render_field( 'date-start', array() );
  $time       = types_render_field( 'time', array() );
  $place      = types_render_field( 'location-name', array() );
  $addr       = types_render_field( 'location-address', array() );
  
  $post = get_post( $post->ID );
  $slug = $post->post_name;
  
  ?>
  
  <article <?php post_class(); ?>>
    <header>
      <div class="post-thumb">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail();
        }
        ?>
      </div><!-- /.post-thumb -->
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <h4 class="subtitle"><?php echo $sub; ?></h4>
      
     
    
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
   
  </article>
