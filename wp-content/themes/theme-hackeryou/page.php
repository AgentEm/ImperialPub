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
      </div>
      <div class="three first"></div>
      <div class="three second"></div>
      <div class="three third">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        
        <?php endwhile; // end the loop?>
      </div>
      <div class="main contact">
        <h3>Contact Us</h3>
      </div>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>