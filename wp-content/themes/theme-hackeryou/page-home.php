<?php

/*
	Template Name: Home Page, No Sidebar
*/ 

get_header();  ?>
<div class="section">
  <div class="innerWrapper">
    <div class="full">
    <div class="three first"></div>
    <div class="three second"></div>
    <div class="three third">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        
      <?php endwhile; // end the loop?>
    </div>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>