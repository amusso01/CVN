<?php
/**
* Template Name: Register
*
* @package WordPress
*/

get_header();

?>

<main role="main" class="site-main page-register">
  <div class="content-block">
    <div class="header">

      <h1 class="login-page-title hero-page-title">Register</h1>

      <div class="line-grey"></div>
    </div>
    <div class="content">
      <?php the_content() ?>
      <p class="fdry-bb-account-info" >Already a Member? Please <a href="<?php echo site_url('/login') ?>">Login.</a></p>
    </div>
  </div>
</main><!-- #main -->


<?php
get_footer();