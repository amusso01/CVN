<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();

get_template_part( 'components/network/hero' );
get_template_part( 'components/network/navigation' );
?>


<main role="main" class=" main archive-alphabetical page-network">
	<div class="content-block">
<?php if ( have_posts() ) : ?>

	<div class="center-header">
    <p><?php echo get_the_archive_title() ?></p>
    <div class="line"></div>
  </div>
	<div class="network-grid">
	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		get_template_part( 'components/network/center-card' );

	endwhile; ?>

	</div>
<?php 

	

else : ?>
<div class="no-entry">
	<h3>No entries found</h3>
	<p>There are no registerd center with this letter yet</p>
</div>

<?php 
endif;
?>
  </div>
</main><!-- #main -->


<?php
get_footer();
