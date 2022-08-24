<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

?>


<section class="home-top-card">
  <div class="top-card-grid">
      <a href="<?php echo site_url('/message-boards') ?>">
        <div class="single-card">
          
          <figure class="figure" >
            <img src="<?php echo get_template_directory_uri() ?>/dist/images/forum.png" alt="Forum access">
          </figure>
          <h4>Message Board</h4>
        </div>
      </a>

			<a href="<?php echo  site_url('/networking-directory') ?>">
        <div class="single-card">
          
          <figure class="figure" >
            <img src="<?php echo get_template_directory_uri() ?>/dist/images/network.png" alt="Network access">
          </figure>
          <h4>Premium access to networking</h4>
        </div>
      </a>
			<?php $this_user = wp_get_current_user();  ?>
			<a href="<?php echo bbp_get_user_profile_url($this_user->ID); ?>">
        <div class="single-card">
          
          <figure class="figure" >
            <img src="<?php echo get_template_directory_uri() ?>/dist/images/profile.png" alt="Profile access">
          </figure>
          <h4>My Profile</h4>
        </div>
      </a>
  </div>
</section>

<article style="padding:30px 0 120px; " id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>

	<div class="entry-content u-rich-text">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
