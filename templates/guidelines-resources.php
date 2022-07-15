<?php
/**
* Template Name: Guidelines & Resources
*
* @package WordPress
*/

get_header();

$guidelinesBlocks =get_field('guidelines_block');
$guidelinesFooter =get_field('footer_guidelines');

$resourcesBlocks =get_field('resources_block');
$resourcesFooter =get_field('footer_resources');


?>

<main role="main" class="site-main page-guidelines">

  <div id="guidelinesTab" class="selector content-block">
    <ul>
      <li class="grSelectors s-active" data-select="guidelines" >Guidelines</li>
      <li class="grSelectors" data-select="resources" >Resources</li>
    </ul>
  </div>

  <div class="page-gr-content">
    <div class="content-block__small">

      <!-- GUIDELINES -->
      <section class="gr-content s-active" data-selector="guidelines" >

        <?php foreach($guidelinesBlocks as $guideline) : ?>

          <div class="single-gr">
            <?php if($guideline['main_title']) :   ?>
              <h2><?php echo $guideline['main_title'] ?></h2>
            <?php endif; ?>
            

            <?php if($guideline['has_download']) : ?>

              <?php $downloads = $guideline['single_download']; ?>

              <?php foreach($downloads as $download) :?>

                <article class="single-download">
                  <div class="info">
                    <h4><?php echo $download['title'] ?></h4>
                    <p><?php echo $download['body_text'] ?></p>
                  </div>
                  <a target="_blank" href="<?php echo $download['download_link'] ?>">DOWNLOAD NOW</a>
                </article>

              <?php endforeach; ?>


            <?php else : ?>

              <div class="u-rich-text">
                <?php echo $guideline['text'] ?>
              </div>

            <?php endif; ?>

          </div>

        <?php endforeach; ?>

        <div class="gr-footer">
          <p><?php echo $guidelinesFooter['footer_text_area'] ?></p>
          <a href="<?php echo $guidelinesFooter['link']['url'] ?>"><?php echo $guidelinesFooter['link']['title'] ?></a>
        </div>

      </section>

      <!-- RESOURCES -->
      <section class="gr-content" data-selector="resources" >

        <?php foreach($resourcesBlocks as $resource) : ?>

          <div class="single-gr">
            <?php if($resource['main_title']) :   ?>
              <h2><?php echo $resource['main_title'] ?></h2>
            <?php endif; ?>

            <?php if($resource['has_download']) : ?>

              <?php $downloads = $resource['single_download']; ?>

              <?php foreach($downloads as $download) :?>

                <article class="single-download">
                  <div class="info">
                    <h4><?php echo $download['title'] ?></h4>
                    <p><?php echo $download['body_text'] ?></p>
                  </div>
                  <a target="_blank" href="<?php echo $download['download_link'] ?>">DOWNLOAD NOW</a>
                </article>

              <?php endforeach; ?>


            <?php else : ?>

              <div class="u-rich-text">
                <?php echo $resource['text'] ?>
              </div>

            <?php endif; ?>

          </div>

        <?php endforeach; ?>

        <div class="gr-footer">
          <p><?php echo $resourcesFooter['footer_text_area'] ?></p>
          <a href="<?php echo $resourcesFooter['link']['url'] ?>"><?php echo $resourcesFooter['link']['title'] ?></a>
        </div>

      </section>

    </div>
  </div>


</main><!-- #main -->


<?php
get_footer();