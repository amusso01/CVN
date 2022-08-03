<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

get_header();
?>
	<?php 
		$location = get_field('location');
    $contact = get_field('contact');
    $address = get_field('address');
    $telFax = get_field('telephone_and_fax');
    $url = get_field('web_site');
    $content = get_field('what_we_do');
    $members = get_field('members');

	?>

		<main id="main" class="site-main-single-network ">

			<section class="single-network-content content-block__small">

				<div class="network-info">
			
					<div class="network-title">
						<a href="<?php echo site_url('/networking-directory') ?>">< BACK TO DIRECTORY</a>
						<h4><?php echo get_the_title() ?></h4>
					</div>
				</div>
				<div class="line-grey"></div>
				<div class="network-details">
					<div class="left">
						<div class="location">
							<h4 class="hBlue">LOCATION OF LABORATORY</h4>
							<p><?php echo $location ?></p>
						</div>
						<div class="address">
							<h4 class="hBlue">ADDRESS</h4>
							<p><?php echo $address ?></p>
						</div>
					</div>
					<div class="center">
						<?php if(is_user_logged_in()) : ?>
						<div class="contact">
							<h4 class="hBlue">CONTACT</h4>
							<p><?php echo $contact['text'] ?></p>
							<p><a href="mailto:<?php echo $contact['email'] ?>"><?php echo $contact['email'] ?></a></p>
						</div>
						<?php endif; ?>
						<div class="telephone-fax">
							<h4 class="hBlue">TELEPHONE & FAX NUMBER</h4>
							<p><?php echo $telFax ?></p>
						</div>
					</div>
					<div class="right">
						<a href="<?php echo $url ?>" class="btn-visit">VISIT SITE</a>
						<div class="share">
							<p>SHARE</p>
							<ul class="social">
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'share-facebook' ) ?></a></li>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'share-linkedin' ) ?></a></li>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'share-twitter' ) ?></a></li>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'share-email' ) ?></a></li>
							</ul>
						</div>
					</div>

					<div class="full">
						<?php if($content) : ?>
						<div class="what-we-do">
							<h4 class="hBlue">WHAT DO WE DO?</h4>
							<div class="u-rich-text">
								<?php echo $content ?>
							</div>	
						</div>
						<?php endif; ?>
						<?php if($members) : ?>
						<div class="staff">
							<h4 class="hBlue">STAFF</h4>
							<div class="staff-grid">
								<?php foreach($members as $member) : ?>
									<div class="single-staf">
										<p class="name"><?php echo $member['name'] ?></p>
										<p class="role"><?php echo $member['role'] ?></p>
										<?php if(is_user_logged_in()) : ?>
										<p class="email"><a href="mailto:<?php echo $member['email'] ?>"> <?php echo $member['email'] ?></a></p>
										<?php endif; ?>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>

				


			</section>


		</main><!-- #main -->


<?php
get_footer();
