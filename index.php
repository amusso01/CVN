<?php
/**
 * The index file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>


<main role="main" class=" main news-main">
	<div class="content-block">

		<?php get_template_part( 'components/news/featured-news' ); ?>
	
		<?php
		if ( have_posts() ) :?>

		<h2 class="latest-title" >Latest news</h2>
		<section class="latest-news" >


			<?php
				/* Start the Loop */
				while ( have_posts() ) :

					the_post();
					get_template_part( 'components/news/latest-news' );

				endwhile;
			?>
		</section>
		<?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

				


	</div>

</main><!-- #main -->


<?php
get_footer();
