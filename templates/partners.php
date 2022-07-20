<?php
/**
* Template Name: Partners
*
* @package WordPress
*/

get_header();

get_template_part( 'components/partners/hero' );

?>

<main role="main" class="site-main page-partners">
  <div class="content-block">
  <?php  get_template_part( 'components/partners/content' ); ?>

    </div>
</main><!-- #main -->


<?php
get_footer();