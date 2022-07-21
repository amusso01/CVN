<?php 
$args = array( 
  'post_type' => 'post',
  'posts_per_page' => 3, 
);

$the_query = new WP_Query( $args );


// The Loop
if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); 

  get_template_part( 'components/news/latest-news' );

  endwhile;
endif;
  
// Reset Post Data
wp_reset_postdata();

?>