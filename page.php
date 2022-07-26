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

if(is_page('contact')){

get_template_part( 'components/page/contact-hero' );

}elseif(is_page('about')){

	get_template_part( 'components/page/about-hero' );

}elseif(is_bbpress()){ ?>

	<header class="bbPress-fdry-header">
		<div class="content-block">
			<div class="title">
		
		
					<h1 class="hero-page-title"><?php echo  get_the_title(); ?></h1>
		
		
		
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
		
		
			</div>
		
			<div class="cta">
				<a class="btn" href="<?php echo site_url('/new-discussion') ?>">CREATE NEW DISCUSSION</a>
			</div>

		</div>


</header>

<div class="line-grey"></div>

<?php
}else{

	get_template_part( 'components/page/hero' );

};


?>

<main role="main" class="site-main page-main">
	<div class="content-block">

<?php



	if(is_page('contact')){
		
		get_template_part( 'template-parts/content', 'contact' );

	}elseif(is_page('about')){

		get_template_part( 'template-parts/content', 'about' );

	}elseif(is_bbpress()){ ?>

<div class="bbPress-fdry-inner">

<?php while ( have_posts() ) : 
 
	the_post();

	get_template_part( 'template-parts/content', 'bbPress' );

endwhile; ?>

</div>


	<?php
	}else{

		get_template_part( 'template-parts/content', 'page' );

	};

?>
	</div>
</main><!-- #main -->


<?php
get_footer();
