<?php
/**
 * Main Site Header Template
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>

<?php 
// Social logic

$displaySocial = get_theme_mod('display-social');

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--=== GMT head ===-->
	<?php  WPSeed_gtm('head') ?>
    <!--=== gmt end ===-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--=== GMT body ===-->
<?php WPSeed_gtm('body') ?>
<!--=== gmt end ===-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundry' ); ?></a>
	<header class="site-header">
		<div class="site_header-account">
			<div class="content-block">
				<ul>
					<?php if(!is_user_logged_in()) : ?>
						<li><a href="<?php echo site_url( '/login' ) ?>"><i><?php get_template_part('svg-template/svg', 'icon-user' ) ?></i>Login</a></li>
						<li><a href="<?php echo site_url( '/register' ) ?>">Become a member</a></li>
					<?php else : ?>
						<?php $this_user = wp_get_current_user();  ?>
						<li><a href="<?php echo site_url( '/forums' ) ?>">Forum</a></li>
						<li>Welcome <a class="user-logged-in" href="<?php echo bbp_get_user_profile_url($this_user->ID); ?>"><?php echo $this_user->user_login ?> <i><?php get_template_part('svg-template/svg', 'icon-user' ) ?></i> </a></li>
					<?php endif; ?>
				</ul>
			<!-- <?php get_search_form(); ?> -->

			</div>
		</div>
		<div class="site-header__inner content-block">
			<?php get_template_part( 'components/header/logo' ); ?>
			<?php get_template_part( 'components/navigation/primary' ); ?>
			<?php get_template_part( 'components/header/hamburger' ); ?>
		</div>
	</header><!-- .site-header -->
	<div id="menuOverlay" class="mobile-menu-overlay"></div>

	<div id="content" class="site-content">
