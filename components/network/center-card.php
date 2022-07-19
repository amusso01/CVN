<?php
$contact = get_field('contact') ;
  ?>

  <div class="center-card">
    <h4><?php echo get_the_title() ?></h4>
    <div class="location">
      <p class="info">LOCATION</p>
      <p><?php echo get_field('location') ?></p>
    </div>
    <div class="contact">
      <p class="info">CONTACT</p>
      <p><?php echo $contact['text'] ?></p>
      <p> <a href="mailto:<?php echo $contact['email'] ?>"><?php echo $contact['email'] ?></a></p>
    </div>
    <div class="cta">
      <?php if(get_field('web_site')): ?>
      <a href="<?php echo get_field('web_site') ?>" target="_blank" class="btn">VISIT SITE</a>
      <?php endif; ?>
      <a href="<?php echo get_the_permalink() ?>" class="read-more">READ MORE</a>
    </div>
  </div>