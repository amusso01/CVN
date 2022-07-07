<?php
/**
* Template Name: Events
*
* @package WordPress
*/

get_header();

get_template_part( 'components/events/hero' );

?>

<main role="main" class="site-main page-events">
  <div class="content-block">
    <?php get_template_part( 'components/events/upcoming' ) ?>

    <div class="line-grey"></div>

    <?php get_template_part( 'components/events/past' ) ?>
  </div>
</main><!-- #main -->


<?php
get_footer();