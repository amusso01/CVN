<?php
// GET THE ALPHABETICAL TAXONOMY
   $args = array(
        'taxonomy' => 'bml-alphabetical',
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => true
    );

   $cats = get_categories($args);

   $catIDs = [];
?>


<?php foreach($cats as $cat) : //LOOP TAXONOMY ALPHABETICAL ?>

  <div class="center-header">
    <p><?php echo $cat->name ?></p>
    <div class="line"></div>
  </div>

<?php 
  $argsInner = array (
  'post_type' => 'bml-network',
  'posts_per_page' => -1,
  'tax_query' => array( // (array) - use taxonomy parameters (available with Version 3.1).
    array(
      'taxonomy' => 'bml-alphabetical', // (string) - Taxonomy.
      'field' => 'term_id', // (string) - Select taxonomy term by Possible values are 'term_id', 'name', 'slug' or 'term_taxonomy_id'. Default value is 'term_id'.
      'terms' => array($cat->term_id), // (int/string/array) - Taxonomy term(s).
      'operator' => 'IN' // (string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND', 'EXISTS' and 'NOT EXISTS'. Default value is 'IN'.
    ),
  ),
 );

 $the_query = new WP_Query($argsInner);

// The Loop for single center card 
if ( $the_query->have_posts() ) : ?>
<div class="network-grid">

<?php  while ( $the_query->have_posts() ) : $the_query->the_post();

  get_template_part( 'components/network/center-card' );

endwhile; ?>
</div>
 <?php endif;

?>





<?php endforeach; ?>