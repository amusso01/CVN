<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foundry
 */

 $user_id = get_current_user_id()  ;
 $role = bbp_get_user_role($user_id);


get_header(); ?>


<main class="main main-error" role="main">

	<section class="section content-block" id="section-error-page">

		<?php if(is_404() && $role !== 'bbp_blocked') : ?>
		<h1 class="page-title error-title"><?php esc_html_e( 'Content Cannot Be Found', 'foundry' ); ?></h1>

		<div class="page-body error-body">

			<p><?php esc_html_e( 'Unfortunately the content you were looking for could not be found. Please check that the URL is correct.', 'foundry' ); ?></p>
		</div>
		<?php endif; ?>

	

		<?php if(is_user_logged_in() && $role === 'bbp_blocked') : ?>
			<div class="blocked-user-form" style="max-width: 720px;">
				<p style="margin-top: 60px; margin-bottom:25px;">
					<strong>Please request access to the message board via the form below </strong>
				</p>
				<p><strong>Due to inactivity, your account has been temporarily paused. To enable access to the message board, please get in touch with us.</strong></p>

				<?= do_shortcode( '[forminator_form id="1444"]' ); ?>
			</div>
		<?php else: ?>
			<p style="margin-top: 60px; margin-bottom:25px;"><strong>To see the Message Board please login</strong></p>
		<?php endif; ?>
		<div class="content-block">
			<?php if(is_user_logged_in() && $role !== 'bbp_blocked') : ?>
				<?php echo do_shortcode( '[bbp-login] ' )   ?>
			<?php endif; ?>
		</div>

	</section>

</main>

<?php get_footer(); ?>