<?php get_header();  ?>
<div class="section">
  <div class="innerWrapper">
    <div class="full clearfix">
      <div class="main">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/patio.jpg">
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/bar.jpg">
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/upstairs.jpg">
            </li>
          </ul>
        </div>
      </div> <!-- /.main -->
      
      <div class="main about">
        <h2>Welcome to the Imperial Pub</h2>
        <p>We pride ourselves on our comfortable, welcoming service and atmosphere. From the aquarium bar to the library, the backroom, and the patio, we hope you’ll find the Pub to be a great place for a drink or a meal and a conversation.</p>
      </div>
 
      <div class="three events">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        
        <?php endwhile; // end the loop?>
        <div class="button">See More Events</div>
      </div>

      <div class="three menu">
        <h3>Our Menu</h3>
        <p>We offer classic pub fare, featuring healthy, ethically-sourced fresh beef, fish, and vegetables. With succulent sous-vide cooking and thoughtful marinades, sauces and sandwich toppings, we take our time to produce world-class casual food.</p>
        <div class="button">View our Full Menu</div>
      </div>

      <div class="three twitter">
        <a class="twitter-timeline" href="https://twitter.com/THEIMPERIALPUB" data-widget-id="473208474428379137">Tweets by @THEIMPERIALPUB</a>
      </div>

      <div class="main contact" id="contact">
        <h3>Contact Us</h3>
        <p><i class="fa fa-phone"></i> 416-977-4667</p> 
        <p><i class="fa fa-car"></i> 54 Dundas Street East, Toronto, M5B 1C7</p>
        <div id="map"></div>
      </div>
    </div> <!-- /full clearfix -->
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>