<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

?>

<article style="padding:30px 0 120px; " id="post-<?php the_ID(); ?>" <?php post_class(  ); ?>>

	<div class="entry-content u-rich-text">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
