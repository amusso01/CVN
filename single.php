<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

get_header();


$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3

);

$the_query = new WP_Query( $args );


?>



<main id="main" class="single-main news-main">

	<div class="content-block">
		<article class="news-article">
			<header>
				<a href="<?php echo site_url('/news') ?>" class="back"> <i><?php get_template_part( 'svg-template/svg', 'chevron-left' ) ?></i> BACK TO NEWS</a>
				<h1><?php echo get_the_title() ?></h1>
			</header>

			<figure class="figure"><img data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>"" data-sizes="auto" alt="<?php echo get_the_title()  ?>" class="lazyload"></figure>


			<div class="news-content">
				<div class="top-info">
					<time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M d, Y' ); ?></time>
					<div class="share">
						<p>SHARE</p>
						<ul>
							<li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-facebook' ) ?></a></li>
							<li><a href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-twitter' ) ?></a></li>
							<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-linkedin' ) ?></a></li>
							<li><a href="mailto:?subject= I want to share this with you &amp;body= Hi there, Check out this site <?php echo get_the_permalink() ?>. Thanks."><?php get_template_part( 'svg-template/svg', 'share-email' ) ?></a></li>
						</ul>
					</div>
				</div>

				<div class="u-rich-text">

					<?php the_content(); ?>

				</div>
			</div>

		</article>


		<div class="single-latest-news">
			<h2 class="latest-title" >Latest news</h2>

			<div class="grid">
				<?php 
				
						// The Loop
					if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						get_template_part( 'components/news/latest-news' );
					endwhile;
					endif;
				
				?>

			</div>
		</div>

	</div>

</main><!-- #main -->


<?php
get_footer();
