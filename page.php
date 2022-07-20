<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();

get_template_part( 'components/page/contact-hero' );

?>

<main role="main" class="site-main page-main">
	<div class="content-block">

<?php



	if(is_page('contact')){
		
		get_template_part( 'template-parts/content', 'contact' );

	}else{

		get_template_part( 'template-parts/content', 'page' );

	};

?>
	</div>
</main><!-- #main -->


<?php
get_footer();
