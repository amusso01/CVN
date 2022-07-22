<?php
/**
* Template Name: Forgot Password
*
* @package WordPress
*/

get_header();

?>

<main role="main" class="site-main page-forgot">
  <div class="content-block">
    <div class="header">

      <h1 class="login-page-title hero-page-title">Forgot Password</h1>

      <div class="line-grey"></div>
    </div>
    <div class="content">
      <?php the_content() ?>
      <p class="fdry-bb-account-info" >Not yet a Member? Please <a href="<?php echo site_url('/register') ?>">Register.</a></p>
    </div>
  </div>
</main><!-- #main -->


<?php
get_footer();