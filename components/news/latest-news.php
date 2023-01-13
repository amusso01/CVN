<article class="latest-single-news">
  <a class="news-info" href="<?php echo get_the_permalink() ?>">
    <figure class="figure"><img data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>"" data-sizes="auto" alt="<?php echo get_the_title()  ?>" class="lazyload"></figure>
  </a>
  <a class="news-info" href="<?php echo get_the_permalink() ?>">
    <p class="date"><?php  echo get_the_date('M d, Y')   ?></p>
    <h4><?php echo get_the_title() ?> </h4>
    <p class="read-more">READ MORE</p>
  </a>
</article>