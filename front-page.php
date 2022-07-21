<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<section class="site-hero">
	
	<?php get_template_part( 'components/front/hero' ); ?>

</section>

<main class="main homepage-main" role="main">

	<?php get_template_part( 'components/front/top-cards' ); ?>

	<div class="upcoming-home">
		<div class="content-block">
			<?php get_template_part( 'components/events/upcoming' ) ?>
		</div>
	</div>


	<section class="partners-home">
		<div class="content-block">

			<h3>Partners</h3>
			<div class="grid-partners">
				<?php get_template_part( 'components/front/partners' ) ?>
			</div>
		</div>
	</section>

	<section class=" home-latest-news">
		<div class="content-block">
			<h3 class="latest-title" >Latest news</h3>
			<div class="grid-latest">
				<?php get_template_part( 'components/front/latest-news' ); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
