<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>



  </div> <!-- /.container -->
			<div class="locations">
			  	<?php $loop = new WP_Query( array( 'post_type' => 'locations', 'posts_per_page' => -1 ) ); ?>
			  	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  		<div class="single-location">
			  			<h2><?php the_title(); ?></h2>
			  		</div>
			  	<?php endwhile; wp_reset_query(); ?>
			</div>
			<div class="instagram-container"><?php the_field('instagram'); ?></div>
</div> <!-- /.main -->

<?php get_footer(); ?>