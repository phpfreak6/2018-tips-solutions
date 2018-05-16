<?php 
/*
Template Name: Properties Of The Month
*/
get_header(); 
?>

	<?php  
	
	
	while(have_posts()):the_post();

	$wk_slider_shortcode =	get_post_meta($post->ID,'wpcf-add-slider-shortcode',true);
	$wk_second_text_left_image = get_post_meta($post->ID,'wpcf-add-second-text-left-image',true);
	$wk_second_text_center_text =	get_post_meta($post->ID,'wpcf-add-second-text-center-text',true);
	$wk_second_text_right_button_text =	get_post_meta($post->ID,'wpcf-add-second-text-right-button-text',true);
	$wk_second_text_right_button_link =	get_post_meta($post->ID,'wpcf-add-second-text-right-button-link',true);

	


	?>

	<section class="banner">
		<?php echo do_shortcode($wk_slider_shortcode); ?>
	</section>


<section class="sec_one">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		
		<?php the_content(); ?>
		
	</div>
</section>

<section class="apply_sec">
	<div class="container">
		 <div class="apply_icon"><img src="<?= $wk_second_text_left_image; ?>"></div>
		<h2><?= $wk_second_text_center_text; ?></h2>

		<div class="apply_btn"><a href="<?php if(empty($wk_second_text_right_button_link)){ echo "javascript:void(0)";  }else{ echo $wk_second_text_right_button_link; } ?>"><?= $wk_second_text_right_button_text; ?></a></div>
	</div>
</section>

<section class="home_sec">
	<div class="container">
		<div class="row">
		
		<?php
		


		echo do_shortcode('[ajax_load_more post_type="properties-post" posts_per_page="8" scroll="false" order="ASC" button_label="Load More"]');
			
		/* 	$posts_properties = get_posts(array('post_type'=>'properties-post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
						
			foreach($posts_properties as $post_propertie) {
							
			$wk_number_properties_left = get_post_meta($post_propertie->ID,'wpcf-add-number-properties-left',true);	
			$wk_per_week_price =	get_post_meta($post_propertie->ID,'wpcf-add-per-week-price',true);	
			$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post_propertie->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }
	
			 */
			
		

  /*  
		?>
		
		  <div class="col-xs-12 col-sm-3 wh_property">
		  	<div class="home_box">
		  		<div class="home_img">
		  			<img src="<?= $wk_img; ?>">
		  		</div>
		  		<div class="home_text">
		  			<h3><?php echo $post_propertie->post_title; ?></h3>
		  			<div class="invest_sec">
		  				<h5>Invest Form</h5>
		  				<a href="javascript:void(0)"><?= $wk_per_week_price; ?></a>
		  			</div>

		  		 <div class="prop_btn">
					<a href="<?php echo get_the_permalink($post_propertie->ID); ?>">VIEW PROPEPTY 
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrw2.png">
					</a>
				 </div>
		  		</div>
				<?php if(!empty($wk_number_properties_left)){ ?>
		  		<div class="over_text">
		  			<span><?= $wk_number_properties_left; ?></span>
		  		</div>
				<?php } ?>

		  	</div>
		  </div>
		  
			<?php } ?>

		


		  <div class="load_btn"><a href="#">Load More</a></div>
		  <?php  */ ?>

		</div>
	</div>
</section>

	
			
	<?php endwhile; ?>





<?php


get_footer(); 
	
	
?>