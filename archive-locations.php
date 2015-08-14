<?php get_header(); ?>
<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	<div class="location">
	      	<div class="single-location-img">
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('large');
				} 
				?>
	      	</div>
	      	<div class="single-location-content">
		        <h2><?php the_title(); ?></h2>
				<div class="location-address">
					<p><?php the_field('location_address'); ?></p>
				</div>
		        <div class="location-info">
					<?php the_content(); ?>
		        </div>
	      	</div>
      	</div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
