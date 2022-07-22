<?php 
$top = get_field('top_content');
$middle = get_field('middle_content');
$banner = get_field('blue_info_banner');
$bottom = get_field('bottom_content');
$executives = get_field('cvn_executive');

?>


<div class="about-content">
  
  <section class="top-about about-grid-content">
    <div class="content u-rich-text">
      <?php echo $top['content'] ?>
    </div>
    <div class="image">
      <figure class="figure" >
        <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($top['image']) ?>" alt="Clinical Virology UK Network">
      </figure>
    </div>
  </section>

  <section class="blue-banner">
    <p><?php echo $banner ?></p>
  </section>

  <section class="middle-about about-grid-content">
  
    <div class="image">
      <figure class="figure" >
        <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($middle['image']) ?>" alt="Clinical Virology UK Network">
      </figure>
    </div>
    <div class="content u-rich-text">
      <?php echo $middle['content'] ?>
    </div>
  </section>

  <section class="bottom-about about-grid-content">
    <div class="content u-rich-text">
      <?php echo $bottom['content'] ?>
    </div>
    <div class="image">
      <figure class="figure" >
        <img class="lazyload" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($bottom['image']) ?>" alt="Clinical Virology UK Network">
      </figure>
    </div>
  </section>

  <div class="line-grey"></div>

  <section class="executive">
    <h3><i><?php get_template_part( 'svg-template/svg', 'board' ) ?></i> CVN Executive</h3>

    <div class="executive-grid">
      <?php foreach($executives as $executive) : ?>
        <div class="single-executive">
          <h5><?php echo $executive['name'] ?></h5>
          <p class="role"><?php echo $executive['role'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </section>

  <div class="gutten-editor u-rich-text">
    <?php the_content() ?>
  </div>
</div>