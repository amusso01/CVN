<?php
/**
 * Template part for displaying posts
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

if ( is_active_sidebar( 'forum-sidebar' ) ) {
?>

<aside class="fdry-aside-bbPress" role="complementary">
	<div class="welcome">
		<h2>Welcome</h2>
		<p>Welcome to The UK Clinical Virology Network Forum! This forum was developed due to popular demand for information and news. Please use this forum to learn, discuss and contribute to the latest topics.</p>
	</div>
 <?php dynamic_sidebar( 'forum-sidebar' ); ?>
</aside>

<?php } ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'foundry' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
