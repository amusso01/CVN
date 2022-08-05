<?php
/**
* Template Name: RSS FEED
*
* @package WordPress
*/

get_header();

get_template_part( 'components/page/rss-hero' );

?>

<main role="main" class="site-main page-rss">
  <div class="content-block u-rich-text">
    <?php the_content() ?>
  </div>
</main><!-- #main -->


<?php
get_footer();