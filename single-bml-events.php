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
		$today = current_time('Ymd');
    $startDate = get_field('start_date');
    $endDate = get_field('end_date');
    $hasMultidate = get_field('is_a_multiple_date_event');
    $location = get_field('location');
    $regUrl = get_field('registration_url');

    $endArray = explode( ',' , $endDate);
    $endMonth = $endArray[0];
    $endDay = $endArray[1];

    $Day = $endDay;
    $Month = $endMonth;

		$past = false;


    if($hasMultidate){
      $startArray = explode( ',' , $startDate);
      $startMonth = $startArray[0];
      $startDay = $startArray[1];

      $Day = $startDay.'-'. $endDay;
      if($startMonth !== $endMonth){
        $Month = $startMonth.'/'. $endMonth;
      }
    }

		if( strtotime($endArray[2].$endArray[1].$endArray[0]) >= strtotime($today) ) {

				$past = true;

		}

	debug($today);
	debug(strtotime($endArray[2].$endArray[1].$endArray[0]));
	debug($endArray[2].$endArray[1].$endArray[0]);
	debug(strtotime($today));
	dd($past)

	?>

		<main id="main" class="site-main-single-event ">

			<section class="single-event-content content-block__small">

				<div class="event-info">
			
					<div class="event-title">
						<a href="<?php echo site_url('/events') ?>">< BACK TO EVENTS</a>
						<h4><?php echo get_the_title() ?></h4>
					</div>

					<div class="event-date <?php echo $past ? '' : 's-disabled' ?>">
						<p class="month">
							<?php echo $Month ?>
						</p>
						<p class="date">
							<?php echo $Day ?>
						</p>
					</div>
				</div>
				<div class="line-grey"></div>
				<div class="event-details">
					<div class="left">
						<ul>
							<li class="title"><i><?php get_template_part( 'svg-template/svg', 'details' ) ?></i> LOCATION</li>
							<li><?php echo $location ?></li>
						</ul>
						<?php the_content() ?>
					</div>
					<div class="right">
						<?php if($regUrl) : ?>
						<a href="<?php echo $regUrl ?>" class="btn-register <?php echo $past ? '' : 's-disabled' ?>"><?php echo $past ? 'REGISTER FOR THE EVENT' : 'EXPIRED EVENT' ?></a>
						<?php endif ; ?>
						<div class="share">
							<p>SHARE</p>
							<ul class="social">
								<li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-facebook' ) ?></a></li>
								<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-linkedin' ) ?></a></li>
								<li><a href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'svg-template/svg', 'share-twitter' ) ?></a></li>
								<!-- <li><a href=""><?php get_template_part( 'svg-template/svg', 'share-email' ) ?></a></li> -->
							</ul>
						</div>
					</div>
				</div>


			</section>

			
			<section class="single-event-upcoming">
				<div class="content-block">
					<?php get_template_part( 'components/events/upcoming' ) ?>
				</div>
			</section>

		</main><!-- #main -->


<?php
get_footer();
