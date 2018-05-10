<?php 
/*
Template Name: Contact US
*/
get_header(); 
?>

	<?php  
	
	
	while(have_posts()):the_post();

		$wk_slider_shortcode = get_post_meta($post->ID,'wpcf-add-slider-shortcode',true);
		$wk_first_heading_here = get_post_meta($post->ID,'wpcf-add-first-heading-here',true);
		$wk_address_left_image = get_post_meta($post->ID,'wpcf-add-address-left-image',true);
		$wk_left_title_here = get_post_meta($post->ID,'wpcf-add-left-title-here',true);
		$wk_left_address_here = get_post_meta($post->ID,'wpcf-add-left-address-here',true);
		$wk_email_address_center_image = get_post_meta($post->ID,'wpcf-add-email-address-center-image',true);
		$wk_center_title_here = get_post_meta($post->ID,'wpcf-add-center-title-here',true);
		$wk_center_email_here = get_post_meta($post->ID,'wpcf-add-center-email-here',true);
		$wk_call_now_right_image = get_post_meta($post->ID,'wpcf-add-call-now-right-image',true);
		$wk_right_title_here = get_post_meta($post->ID,'wpcf-add-right-title-here',true);
		$wk_right_phone_no_here = get_post_meta($post->ID,'wpcf-add-right-phone-no-here',true);
		
	


	?>

<section class="banner">
	<?php echo do_shortcode($wk_slider_shortcode); ?>
</section>

<section class="total_investment contact_page">
	<div class="container">
		<h1><?= $wk_first_heading_here; ?></h1>
	    
	    <div class="row">
	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img class="icon_blue" src="<?php echo $wk_address_left_image; ?>">
	    			</div>
	    			 <div class="service_text">
	    			 	<a target="_blank" href="https://maps.google.com/maps?saddr=&daddr=<?= $wk_left_address_here; ?>">
	    			 		<?= $wk_left_title_here; ?> <span><?= $wk_left_address_here; ?></span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>

	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img src="<?php echo $wk_email_address_center_image; ?>">
	    			</div>
	    			 <div class="service_text">
	    			 	<a href="mailto:<?= $wk_center_email_here; ?>">
	    			 		<?= $wk_center_title_here; ?>   <span><?= $wk_center_email_here; ?></span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>


	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img src="<?php echo $wk_call_now_right_image; ?>">
	    			</div>
	    			 <div class="service_text">
	    			 	<a href="tel:<?= $wk_right_phone_no_here; ?>">
	    			 		<?= $wk_right_title_here; ?>  <span><b><?= $wk_right_phone_no_here; ?></b></span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>
	    </div>
	</div>
</section>

	
	
	
			
	<?php endwhile; ?>





<?php


get_footer(); 
	
	
?>