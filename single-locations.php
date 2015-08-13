<?php get_header(); ?>
<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('large');
		} 
		?>
        <h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
