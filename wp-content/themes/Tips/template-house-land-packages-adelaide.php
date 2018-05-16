<?php 
/*
Template Name: House & Land Packages Adelaide
*/
get_header(); 
?>

	<?php  
	
	
	while(have_posts()):the_post();

		$wk_slider_shortcode =	get_post_meta($post->ID,'wpcf-add-slider-shortcode',true);
		
	


	?>

	<section class="banner">
		<?php echo do_shortcode($wk_slider_shortcode); ?>
	</section>

	
	<section class="our_property">
	
		<div class="container">
		
			<h1 class="heading"><?php echo $post->post_title; ?></h1>
			
			<div class="center_text">
			
				<?php the_content(); ?>
				
			</div>

		</div>
	</section>

	
			
	<?php endwhile; ?>





<?php


get_footer(); 
	
	
?>