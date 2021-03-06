<?php
/**
* Template Name: Login
*
* @package WordPress
*/

get_header();

?>

<main role="main" class="site-main page-login">
  <div class="content-block">
    <div class="header">

      <h1 class="login-page-title hero-page-title">Login</h1>

      <div class="line-grey"></div>
    </div>
    <div class="content">
      <?php the_content() ?>
      <p class="fdry-bb-account-info" >Reset your <a href="<?php echo site_url('/forgot-password') ?>">Password here.</a></p>
    </div>
  </div>
</main><!-- #main -->


<?php
get_footer();