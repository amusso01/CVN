<?php
/**
* Template Name: Forum
*
* @package WordPress
*/

get_header();

?>
<main id="site-content" class="content-block bbPress-fdry">

<?php

$archive_title    = '';
$archive_subtitle = '';

if ( is_search() ) {
  global $wp_query;

  $archive_title = sprintf(
    '%1$s %2$s',
    '<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
    '&ldquo;' . get_search_query() . '&rdquo;'
  );

  if ( $wp_query->found_posts ) {
    $archive_subtitle = sprintf(
      /* translators: %s: Number of search results. */
      _n(
        'We found %s result for your search.',
        'We found %s results for your search.',
        $wp_query->found_posts,
        'twentytwenty'
      ),
      number_format_i18n( $wp_query->found_posts )
    );
  } else {
    $archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
  }
} elseif ( is_archive() && ! have_posts() ) {
  $archive_title = __( 'Nothing Found', 'twentytwenty' );
} elseif ( ! is_home() ) {
  $archive_title    = get_the_archive_title();
}

if ( $archive_title || $archive_subtitle ) {
  ?>

  <header class="bbPress-fdry-header">

    <div class="title">

      <?php if ( $archive_title ) { ?>
        <h1 class="hero-page-title"><?php echo  get_the_title(); ?></h1>
      <?php } ?>

      <?php if ( $archive_subtitle ) { ?>
        <div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
      <?php } ?>

    </div>

    <div class="cta">
      <a class="btn" href="<?php echo site_url('/new-discussion') ?>">CREATE NEW DISCUSSION</a>
    </div>

  </header>

  <div class="line-grey"></div>

  <?php
}

if ( have_posts() ) : ?>


<div class="bbPress-fdry-inner">

  <?php while ( have_posts() ) : 
   
    the_post();

    get_template_part( 'template-parts/content', 'bbPress' );

  endwhile; ?>

</div>
  <?php
elseif ( is_search() ) : ?>

  <div class="no-search-results-form section-inner thin">

    <?php
    get_search_form(
      array(
        'aria_label' => __( 'search again', 'twentytwenty' ),
      )
    );
    ?>

  </div><!-- .no-search-results -->

  <?php
endif
?>


</main><!-- #site-content -->


<?php
get_footer();