<?php 
/*
Template Name: About
*/
get_header(); 
?>

	<?php  
	
	
	while(have_posts()):the_post();

		$wk_slider_shortcode =	get_post_meta($post->ID,'wpcf-add-slider-shortcode',true);
		$wk_top_first_title =	get_post_meta($post->ID,'wpcf-add-top-first-title',true);
		$wk_top_second_title =	get_post_meta($post->ID,'wpcf-add-top-second-title',true);
		$wk_left_image_here =	get_post_meta($post->ID,'wpcf-add-left-image-here',true);
		$wk_top_small_content =	get_post_meta($post->ID,'wpcf-add-top-small-content',true);
		$wk_learn_more_button_text = get_post_meta($post->ID,'wpcf-add-learn-more-button-text',true);
		$wk_learn_more_link = get_post_meta($post->ID,'wpcf-add-learn-more-link',true);
	


	?>

	<section class="banner">
		<?php echo do_shortcode($wk_slider_shortcode); ?>
	</section>

<section class="inner_sec abt_sec">
	<div class="container">
		<h1><span><?php echo $wk_top_first_title; ?>  </span><?php echo $wk_top_second_title ; ?></h1>

		<div class="center_text">
		<?php echo wpautop($wk_top_small_content); ?>
			
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 abt_img">
				<img src="<?php echo $wk_left_image_here; ?>">
			</div>

			<div class="col-xs-12 col-sm-9 abt_txt">
			
				<?php echo wpautop($post->post_content); ?>
				
			</div>
		</div>

		<div class="learn_btn">
		<?php if(empty($wk_google_plus_link)){ ?>
			<a href="javascript:void(0);">
		<?php }else{ ?>	
			<a href="<?= $wk_learn_more_link; ?>">
		<?php } ?>	
			
			<?php echo $wk_learn_more_button_text; ?> 
			
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right.png"></a>
		</div>


	</div>
</section>


	
			
	<?php endwhile; ?>





<?php


get_footer(); 
	
	
?>