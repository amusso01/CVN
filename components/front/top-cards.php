<?php 

$cards = get_field('top_cards');

?>

<section class="content-block home-top-card">
  <div class="top-card-grid">
    <?php foreach($cards as $card) : ?>
      <a href="<?php echo $card['top_card']['link']['url'] ?>">
        <div class="single-card">
          
          <figure class="figure" >
            <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($card['top_card']['image']) ?>" alt="Clinical Virology UK Network">
          </figure>
          <h4><?php echo $card['top_card']['link']['title'] ?></h4>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>