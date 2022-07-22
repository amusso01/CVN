<?php 
$args = array( 
  'post_type' => 'bml-partners',
  'posts_per_page' => -1, 
);

$the_query = new WP_Query( $args );


// The Loop
if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); $post_id = get_the_ID();;  ?>
<a href="<?php echo get_field('url', $post_id)?>" target="_blank">
  <div class="figure-container">
    <figure class="figure" >
      <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>" alt="<?php echo get_the_title() ?> logo">
    </figure>
  </div>
</a>

<?php    
  endwhile;
endif;
  
// Reset Post Data
wp_reset_postdata();

?>