<?php 
/*
Template Name: Property management
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

<section class="management_sec">
	<div class="container">
		<h2>TIPS Property Management RLA 240800 - ST PETERS</h2>

		<div class="location_text">
			
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location_blue.png"> <strong>Office location:</strong> 215 Payneham Road, ST PETERS, SA 5069</p>
		</div>

		<div class="icons_ul">
			<ul>
		      <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_ul1.png"> <br> Enquire</a></li>
		      <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_ul2.png"> <br> Contacts</a></li>
		      <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_ul3.png"> <br> More</a></li>
			</ul>
		</div>

		<div class="three_btn">
			<div class="row">
			<div class="col-xs-12 col-sm-4 wh_btn">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/message_white.png"> I'm looking to sell my property</a>
			</div>

			<div class="col-xs-12 col-sm-4 wh_btn">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/message_white.png"> I require property management</a>
			</div>

			<div class="col-xs-12 col-sm-4 wh_btn">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/message_white.png"> General enquiry</a>
			</div>
			</div>
		</div>

	</div>
</section>

<section class="tips_sec">
	<div class="container">
		<h1 class="heading">The TIPS Property Management RLA 240800 - ST PETERS Team</h1>

		<div class="team_member">
		
		<?php
			
			$posts_our_team = get_posts(array('post_type'=>'our-team','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
						
			foreach($posts_our_team as $post_our_team) {
							
			$wk_profle_image_here =	get_post_meta($post_our_team->ID,'wpcf-add-profle-image-here',true);	
			$wk_designation_here =	get_post_meta($post_our_team->ID,'wpcf-add-designation-here',true);	
			
			
		

  
		?>
		
			<div class="col-xs-6 col-sm-3 wh_member">
				<div class="member_inner">
					<div class="team_member_img">
					
					<?php

					if(empty($wk_profle_image_here)){
				
						
					?>
					
						<img alt="<?= $post_our_team->post_title; ?>" src="<?= site_url(); ?>/wp-content/uploads/2018/05/team4.png">
						
					<?php }else{ ?>

						<img alt="<?= $post_our_team->post_title; ?>" src="<?= $wk_profle_image_here; ?>">

					<?php } ?>					
						
					</div>
					<div class="team_member_text">
						<h6><?= $post_our_team->post_title; ?></h6>
						<?php if(!empty($wk_designation_here)){ ?>
							<span><?= $wk_designation_here; ?></span>
						<?php } ?>
					</div>
				</div>
			</div>
			
			
			<?php } ?>

		</div>
	</div>
</section>


<section class="our_property">
	<div class="container">
		<h1 class="heading">Our Properties</h1>
		<div class="center_text">
			<p>The property lists contain all properties TIPS Property Management RLA 240800 - ST PETERS have sold and listed on realestate.com.au. It may not contain off-market 
			and private listings, properties with unknown sold dates and listings that may be exclusively listed on other websites.</p>
		</div>

		<div class="tabs_ul">
			<ul class="tabs">
				<li class="tab-link current" data-tab="tab-1">Sold</li>
				<li class="tab-link" data-tab="tab-2">For Sale</li>
				<li class="tab-link" data-tab="tab-3">For Rent</li>
			</ul>

		</div>

      <div id="tab-1" class="tab-content current">
		<div class="prop_type">
			<p  class="text1">12 properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>

			<div class="row">
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop1.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop2.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop3.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop4.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop5.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop6.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop7.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop8.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>


			</div>



		</div>
	  </div>


	  <div id="tab-2" class="tab-content">
		<div class="prop_type">
			<p  class="text1">12 properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>

			<div class="row">
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop2.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>
			</div>



		</div>
	  </div>



	  <div id="tab-3" class="tab-content">
		<div class="prop_type">
			<p  class="text1">12 properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>

			<div class="row">
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prop1.jpg">
			  		</div>

			  		<div class="prop_head">
			  			<h4>Contact agent</h4>
			  			<span>Sold on 19 Jan 2018</span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png"> 189 East Parkway Lightsview, 5085</h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> 3</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> 2</a></li>
			  		 	  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"> 2</a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
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