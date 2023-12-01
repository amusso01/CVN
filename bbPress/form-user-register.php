<?php

/**
 * User Registration Form
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	<fieldset class="bbp-form">
		<legend><?php esc_html_e( 'Create an Account', 'bbpress' ); ?></legend>

		<?php do_action( 'bbp_template_before_register_fields' ); ?>

		<div class="bbp-template-notice">
			<ul>
				<li><?php esc_html_e( 'Your username must be unique, and cannot be changed later.',                        'bbpress' ); ?></li>
				<li><?php esc_html_e( 'We use your email address to email you a secure password and verify your account.', 'bbpress' ); ?></li>
			</ul>
		</div>

		<div class="bbp-username">
			<label for="user_login"><?php esc_html_e( 'Username', 'bbpress' ); ?>*</label>
			<input type="text" required name="user_login" value="<?php bbp_sanitize_val( 'user_login' ); ?>" size="20" id="user_login" maxlength="100" autocomplete="off" />
		</div>

		<div class="bbp-email">
			<label for="user_email"><?php esc_html_e( 'Email', 'bbpress' ); ?>* </label>
			<input type="email"  required name="user_email" value="<?php bbp_sanitize_val( 'user_email' ); ?>" size="20" id="user_email" maxlength="100" autocomplete="off" />
		</div>

		<?php do_action( 'register_form' ); ?>

		<div class="fdry-consent">
			<p style="font-size:13px; " >To ensure compliance with the General Data Protection Regulation (GDPR), by registering with the Clinical Virology Network, you consent to receiving email communications. 
			For more information read our <a style="font-size:13px; " href="<?php echo site_url('/terms-conditions') ?>">terms & conditions</a></p>
		</div>

		<div class="bbp-submit-wrapper">

			<button type="submit" name="user-submit" class="button submit user-submit"><?php esc_html_e( 'Register', 'bbpress' ); ?></button>

			<?php bbp_user_register_fields(); ?>

		</div>

		<?php do_action( 'bbp_template_after_register_fields' ); ?>

	</fieldset>
</form>