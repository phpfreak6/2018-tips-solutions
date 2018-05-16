<?php 
/*
Template Name: Home
*/
get_header(); 
?>



<section class="banner">
<?php echo do_shortcode('[rev_slider alias="homeslider"]'); ?>

  <!--<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/banner1.jpg"/>-->
</section>

<section class="lst_property">
	<div class="container">

	  <div class="row">
	  	<?php  
		
		$investment_propertise_adelaide_id = "85";
		$wk_small_content_homepage = get_post_meta($investment_propertise_adelaide_id,'wpcf-add-small-content-homepage',true);	
		$wk_image_homepage = get_post_meta($investment_propertise_adelaide_id,'wpcf-add-image-homepage',true);	
		$wk_small_image = get_post_meta($investment_propertise_adelaide_id,'wpcf-add-small-image',true);	
			
			

		?>
		
		<div class="col-xs-12 col-sm-4 wh_ist_property">
	  		<div class="property_box">
	  			<div class="property_img">
	  				<img alt="<?= get_the_title($investment_propertise_adelaide_id); ?>" src="<?= $wk_image_homepage; ?>"/>
	  				<div class="shake_hand"><img alt="shake_hand" src="<?= $wk_small_image; ?>"></div>
	  			</div>
	  			<div class="property_text">
	  				
	  				<h5><a href="<?php echo get_the_permalink($investment_propertise_adelaide_id); ?>"><?= get_the_title($investment_propertise_adelaide_id); ?></a></h5>
	  				<p><?= $wk_small_content_homepage; ?></p>

	  				<div class="knw_btn"><a href="<?php echo get_the_permalink($investment_propertise_adelaide_id); ?>">Know More <i class="fas fa-arrow-right"></i></a></div>
	  			</div>
	  		</div>
	  	</div>
		
			<?php  
		
		$house_land_packages_adelaide_id = "90";
		$wk_small_content_homepage_2 = get_post_meta($house_land_packages_adelaide_id,'wpcf-add-small-content-homepage',true);	
		$wk_image_homepage_2 = get_post_meta($house_land_packages_adelaide_id,'wpcf-add-image-homepage',true);	
		$wk_small_image_2 = get_post_meta($house_land_packages_adelaide_id,'wpcf-add-small-image',true);	
			
			

		?>


	  	<div class="col-xs-12 col-sm-4 wh_ist_property">
	  		<div class="property_box">
	  			<div class="property_img">
	  				<img alt="<?= get_the_title($house_land_packages_adelaide_id); ?>" src="<?= $wk_image_homepage_2; ?>"/>
	  				<div class="shake_hand">
					<img alt="shake_hand" src="<?= $wk_small_image_2; ?>"></div>
	  			</div>
	  			<div class="property_text">
	  				
	  				<h5><a href="<?php echo get_the_permalink($house_land_packages_adelaide_id); ?>"><?= get_the_title($house_land_packages_adelaide_id); ?></a></h5>
	  				<p><?= $wk_small_content_homepage_2; ?></p>

	  				<div class="knw_btn"><a href="<?php echo get_the_permalink($house_land_packages_adelaide_id); ?>">Know More <i class="fas fa-arrow-right"></i></a></div>
	  			</div>
	  		</div>
	  	</div>
		
			<?php  
		
		$first_home_owner_affordable_housing_id = "94";
		$wk_small_content_homepage_3 = get_post_meta($first_home_owner_affordable_housing_id,'wpcf-add-small-content-homepage',true);	
		$wk_image_homepage_3 = get_post_meta($first_home_owner_affordable_housing_id,'wpcf-add-image-homepage',true);	
		$wk_small_image_3 = get_post_meta($first_home_owner_affordable_housing_id,'wpcf-add-small-image',true);	
			
			

		?>

	  	<div class="col-xs-12 col-sm-4 wh_ist_property">
	  		<div class="property_box">
	  			<div class="property_img">
	  				<img alt="<?= get_the_title($first_home_owner_affordable_housing_id); ?>" src="<?= $wk_image_homepage_3; ?>"/>
	  				<div class="shake_hand">
					<img alt="shake_hand" src="<?= $wk_small_image_3; ?>"></div>
	  			</div>
	  			<div class="property_text">
	  				
	  				<h5><a href="<?php echo get_the_permalink($first_home_owner_affordable_housing_id); ?>"><?= get_the_title($first_home_owner_affordable_housing_id); ?></a></h5>
	  				<p><?= $wk_small_content_homepage_3; ?></p>

	  				<div class="knw_btn"><a href="<?php echo get_the_permalink($first_home_owner_affordable_housing_id); ?>">Know More <i class="fas fa-arrow-right"></i></a></div>
	  			</div>
	  		</div>
	  	</div>

	  	<div class="lst_btn">
	  		<a href="<?php echo get_the_permalink(66); ?>"><?= get_the_title(66); ?></a>
	  	</div>


	  </div>

	</div>
</section>

<section class="total_investment">
	<div class="container">
		<h1>Total Investment Property Solutions</h1>
	    
	    <div class="row">
	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img class="icon_blue" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png">
	    			</div>
	    			 <div class="service_text">
	    			 	<a href="#">
	    			 		Rental Properties Available Now. <span>Click to view our range</span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>

	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png">
	    			</div>
	    			 <div class="service_text">
	    			 	<a href="#">
	    			 		Download Our Beginners Guide  <span>to property investment</span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>


	    	<div class="col-xs-12 col-sm-4 services">
	    		<div class="service_box">
	    			<div class="service_icon">
	    				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png">
	    			</div>
	    			 <div class="service_text">
	    			 	<a href="#">
	    			 		Avoid Disappointment  <span>register here for our property alerts</span>
	    			 	</a>
	    			 </div>
	    		</div>
	    	</div>


	    </div>

	</div>
</section>

<section class="investment_sec">
	<div class="container">
		<div class="col-xs-12 col-sm-6 sec_img">
		  <div class="overlay_box"></div>
			<div class="border_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/investment1.jpg">
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 sec_text">
			<h2>Investment Property In Adelaide</h2>
			<p>Many people believe that owning an investment property in 
				Adelaide will cost them thousands of dollars upfront, and 
				hundreds of dollars per week. But at TIPS we know that just isn’t the case.Many of our clients have been astounded to find out that they could buy an investment property with no deposit at all through.....</p>
				<div class="knw_btn1"><a href="<?php echo get_the_permalink($investment_propertise_adelaide_id); ?>">Know More <i class="fas fa-arrow-right"></i></a></div>
		</div>
	</div>
</section>





	
	
	
	





<?php


get_footer(); 
	
	
?>