<?php
/**
 * HomePage Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

?>


<section class="hero-bg-home">
  <div class="text">
    <h2>Join The UK Clinical <br> Virology Network <br> Community</h2>
    <div class="cta">
      <a href="<?php echo site_url( '/register' ) ?>" class="btn">BECOME A MEMBER</a>
      <a href="<?php echo site_url( '/login' ) ?>" class="btn">LOGIN</a>
    </div>
  </div>
  <div class="bg">
  <figure class="figure" >
    <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>" alt="Clinical Virology UK Network">
  </figure>
  </div>
</section>
