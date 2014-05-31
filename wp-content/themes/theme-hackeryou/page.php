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
      <div class="three first">
        <h3>Content</h3>
        <div class="button">Button One</div>
      </div>
      <div class="three second">
        <h3>Content</h3>
        <div class="button">Button Two</div>
      </div>
      <div class="three third">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        
        <?php endwhile; // end the loop?>
        <div class="button">Button Three</div>
      </div>
      <div class="main contact">
        <h3>Contact Us</h3>
        <div id="map"></div>
      </div>
    </div> <!-- /full clearfix -->
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>