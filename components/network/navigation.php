<?php
   $args = array(
        'taxonomy' => 'bml-alphabetical',
        'orderby' => 'name',
        'order'   => 'ASC',
      'hide_empty' => false
    );

   $cats = get_categories($args);
?>
<nav class="network-navigation" >
  <div class="content-block">
    <ul>
      <?php foreach($cats as $cat) : ?>
        <li>
          <a href="<?php echo get_category_link( $cat->term_id ) ?>">
            <?php echo $cat->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    
    </ul>
  </div>
</nav>