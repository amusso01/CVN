<?php 
$pageId = get_queried_object_id();

$featuredNews = get_field('featured_news' , $pageId);
?>

<section class="featured-news">

  <div id="glideFeaturedNews" class="glide-featured-news">
    <div class="glide__track" data-glide-el="track">

      <ul class="glide__slides">
        <?php foreach ($featuredNews as $index => $news ) :?>
          <li class="glide__slide">
            <div class="news-info">
              <div class="date"><?php echo get_the_date('M d, Y', $news->ID)   ?></div>
              <div class="header">
                <h4><?php echo $news->post_title ?></h4>
                <a href="<?php echo get_the_permalink( $news->ID) ?>" class="btn">READ MORE</a>
              </div>
            </div>
            <figure class="figure" ><img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id($news->ID)) ?>" alt="<?php echo $news->post_title ?>"></figure>
          </li>
        <?php endforeach ?>
      </ul>

    </div>

    <div class="glide__bullets" data-glide-el="controls[nav]">
      <?php foreach ($featuredNews as $index => $news ) :?>
        <button class="glide__bullet" data-glide-dir="=<?php echo $index ?>"></button>
      <?php endforeach ?>
    </div>

    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><?php get_template_part( 'svg-template/svg', 'arrow-carrusel-left' ) ?></button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><?php get_template_part( 'svg-template/svg', 'arrow-carrusel-right' ) ?></button>
    </div>
  </div>
  
</section>