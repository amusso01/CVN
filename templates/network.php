<?php
/**
* Template Name: Network
*
* @package WordPress
*/

get_header();

get_template_part( 'components/network/hero' );
get_template_part( 'components/network/navigation' );

?>

<main role="main" class="site-main page-network">
  <div class="content-block">
  <?php  get_template_part( 'components/network/content' ); ?>

    </div>
</main><!-- #main -->


<?php
get_footer();