<?php 
$heroText = get_field('hero_text');
?>

<!-- 29 is the ID of networking directory page -->
<?php if ( has_post_thumbnail(29) ) : ?>
  <section class="lazyload hero-bg-overlay" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id(29) , false ); ?>"  >
    <div class="content-block hero-bg-container">
      <h1 class="hero-page-title"><?php echo get_the_title() ?></h1>
      <h2 class="wide" ><?php echo $heroText ?></h2>
    </div>
  </section>
<?php endif; ?>