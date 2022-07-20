<?php
  $argsInner = array (
  'post_type' => 'bml-partners',
  'posts_per_page' => -1,
  'order' => 'ASC',
  
 );

 $the_query = new WP_Query($argsInner);

// The Loop for single center card 
if ( $the_query->have_posts() ) : ?>
<div class="partners-grid" id="jsModal">

<?php  while ( $the_query->have_posts() ) : $the_query->the_post();

  get_template_part( 'components/partners/card' );

endwhile; ?>
</div>
 <?php endif;









