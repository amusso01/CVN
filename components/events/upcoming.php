<?php 

$today = current_time('Ymd');
$args = array(
  'post_type' => 'bml-events',
  'posts_per_page' => '-1',
  'meta_key'  => 'end_date',
  'order' => 'ASC',
  'orderby' => 'meta_value',
  'meta_query' => array(
    array(
          'key'   => 'end_date',
          'compare' => '>=',
          'value'   => $today,
      ),
  ),
);



$children = new WP_Query($args);
?>

<?php if ($children->have_posts()) : ?>



  <section class="events-upcoming">
    <h3>Upcoming events</h3>
    <div class="events-grid">

    <?php while ($children->have_posts()) : $children->the_post(); $fields = (object) get_fields(); ?>

    <?php 
    $startDate = get_field('start_date');
    $endDate = get_field('end_date');
    $hasMultidate = get_field('is_a_multiple_date_event');

    $endArray = explode( ',' , $endDate);
    $endMonth = $endArray[0];
    $endDay = $endArray[1];

    $Day = $endDay;
    $Month = $endMonth;


    if($hasMultidate){
      $startArray = explode( ',' , $startDate);
      $startMonth = $startArray[0];
      $startDay = $startArray[1];

      $Day = $startDay.'-'. $endDay;
      if($startMonth !== $endMonth){
        $Month = $startMonth.'/'. $endMonth;
      }
    }

    ?>

      <div class="event">
        <div class="event-info">
          <a href="<?php the_permalink(); ?>">
            <h4><?php echo get_the_title() ?></h4>
            <p class="location"><?php echo get_field('location') ?></p>
          </a>
          <div class="event-date">
            <p class="month">
              <?php echo $Month ?>
            </p>
            <p class="date">
              <?php echo $Day ?>
            </p>
          </div>
        </div>
        <div class="event-details">
          <p><?php echo get_the_excerpt() ?></p>
          <p class="call-to-action"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
          
    </div>
  </section>
<?php endif; ?>