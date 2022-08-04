<?php
/**
 * HomePage Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $carousel = get_field('carousel');

?>


<section class="hero-bg-home">
  <div id="homeGlide" class=" glide glide-home">
   <div class="glide__track" data-glide-el="track">
    <div class="glide__slides">
      <?php  foreach($carousel as $slide) :  ?>
        <div class="text glide__slide">
          <h2><?php echo $slide['title'] ?></h2>
          <?php if($slide['subtitle']) : ?>
            <p><?php echo $slide['subtitle'] ?></p>
          <?php endif; ?>
          <?php if($slide['link']) : ?>
          <div class="cta">
            <a href="<?php echo $slide['link']['url']?>" class="btn"><?php echo $slide['link']['title']?></a>
          </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
   </div>

   <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><?php get_template_part( 'svg-template/svg', 'arrow-carrusel-left' ) ?></button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><?php get_template_part( 'svg-template/svg', 'arrow-carrusel-right' ) ?></button>
    </div>

  </div>


  <div class="bg">
  <figure class="figure" >
    <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>" alt="Clinical Virology UK Network">
  </figure>
  </div>
</section>
