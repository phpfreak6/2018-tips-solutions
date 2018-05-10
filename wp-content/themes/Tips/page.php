<?php get_header(); ?>

	<?php  while(have_posts()):the_post(); ?>
				
									
					
					
				
			<h1><?php echo $post->post_title; ?> Us</h1>
		
			
			<?php the_content(); ?>
				
				
					<?php endwhile; ?>

<?php get_footer();