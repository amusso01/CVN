<?php if ( has_post_thumbnail() ) : ?>
<section class="lazyload hero-bg-overlay" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>"  >
  <div class="content-block hero-bg-container">
    <h1 class="hero-page-title"><?php echo get_the_title() ?></h1>
    <h2>Take a look at our Events and Conferences</h2>
  </div>
</section>
<?php endif; ?>