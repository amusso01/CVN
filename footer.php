<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer__inner content-block ">

			<div class="footer-grid">
				<div class="footer-logo-section">
					<figure>
						<img src="<?php echo get_template_directory_uri() ?>/dist/images/CVN-logo.png" alt="Clinical virology logo">
					</figure>
					<div class="info">
						<p>The information contained in this website is provided ‘as is’ without warranty of any kind. The entire risk as to the results and the performance of the information is assumed by the user, and in no event shall The UK Clinical Virology Network be liable for any consequential, incidental or direct damages suffered in the course of using the information on this website. Use of the information contained on this website are governed by their respective license agreements and may contain restrictions on use. <br> <span> The UK Clinical Virology Network does not endorse or recommend any commercial products, processes, or services.</span></p>
					</div>
				</div>
				<div class="footer-menus">
					<div class="footer-nav-first footer-menu-single">
						<div class="blue-line"></div>
						<?php get_template_part( 'components/navigation/footer-nav-first' ); ?>
					</div>
					<div class="footer-nav-second footer-menu-single">
						<div class="blue-line"></div>
						<?php get_template_part( 'components/navigation/footer-nav-second' ); ?>
					</div>
					<div class="footer-nav-legal footer-menu-single">
						<div class="blue-line"></div>
						<?php get_template_part( 'components/navigation/footer-nav-legal' ); ?>
					</div>
				</div>

			</div>

			<div class="copyright">
				<p>© <?php echo date('Y') ?> The UK Clinical Virology Network. All rights reserved.</p>
			</div>
			
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
