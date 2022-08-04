<?php 
$args = array( 
  'post_type' => 'bml-partners',
  'posts_per_page' => -1, 
);

$the_query = new WP_Query( $args );


// The Loop
if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); $post_id = get_the_ID();;  ?>
  <?php 
  $address = get_field('address') ;
  $phone = get_field('phone') ;
  $emails = get_field('emails') ;
  $link = get_field('url') ;
  $uid = uniqid('fdry');
  $id = get_the_ID();
  ?>

  <div class="partner-card partner-home" id="jsModalHome" title="<?php echo get_the_title() ?>">

    <div class="header js-partners-modal-btn" data-card="<?php echo $uid ?>"  >
      <figure class="figure-container">
        <img src="<?php echo get_the_post_thumbnail_url($id) ?>" alt="<?php echo get_the_title() ?> logo">
      </figure>
     
    </div>


    <div class="partner-modal" style="overflow:scroll;" data-modal="<?php echo $uid ?>">
        <div class="inner-modal">
          <div class="header">
            <img src="<?php echo get_the_post_thumbnail_url($id) ?>" alt="<?php echo get_the_title() ?> logo">

            <h4><?php echo get_the_title() ?></h4>
          </div>
          <div class="info">
            <div class="address">
              <h4>ADDRESS</h4>
              <p><?php echo $address ?></p>
            </div>
            <div class="phone">
              <h4>PHONE</h4>
              <p><?php echo $phone ?></p>
            </div>
            <div class="email">
              <?php if($emails) : ?>
              <h4>EMAIL</h4>
              <?php foreach($emails as $email): ?>
              <p> <a href="mailto:<?php echo $email['email']  ?>"><?php echo $email['email'] ?></a> </p>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>

            <div class="content">
              <?php  the_content() ?>
              <div class="cta-content">
                <a href="<?php echo $link ?>" class="btn">VISIT SITE</a>
              </div>
            </div>
          </div>


          <div class="close">X</div>
        </div>
    </div>
  </div>

<?php    
  endwhile;
endif;
  
// Reset Post Data
wp_reset_postdata();

?>