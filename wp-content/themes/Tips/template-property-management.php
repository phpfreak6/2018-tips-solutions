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
				<li class="tab-link current" data-tab="tab-Sold">Sold</li>
				<li class="tab-link" data-tab="tab-Sale">For Sale</li>
				<li class="tab-link" data-tab="tab-Rent">For Rent</li>
				<li class="tab-link" data-tab="tab-Construction">Under Construction</li>
			</ul>

		</div>
		
	

      <div id="tab-Sold" class="tab-content current">
		<div class="prop_type">
		
	
			<p  class="text1"><?php 
			
					$count_posts  = wp_count_posts('properties-post'); 
					
					echo $count_posts->publish; ?> 
					properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>
			
			

			<div class="row">
			
			
				<?php
			
		$posts_properties = get_posts(array('post_type'=>'properties-post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
		
		
						
			foreach($posts_properties as $post_propertie) {
							
			$wk_number_properties_left = get_post_meta($post_propertie->ID,'wpcf-add-number-properties-left',true);	
			$wk_per_week_price =	get_post_meta($post_propertie->ID,'wpcf-add-per-week-price',true);	
			$wk_properties_status =	get_post_meta($post_propertie->ID,'wpcf-add-properties-status',true);	
			$wk_sold_date =	get_post_meta($post_propertie->ID,'wpcf-add-sold-date',true);	
			$wk_bathroom_numbers =	get_post_meta($post_propertie->ID,'wpcf-add-bathroom-numbers',true);	
			$wk_parking_space =	get_post_meta($post_propertie->ID,'wpcf-add-parking-space',true);	
			$wk_bathtub_number =	get_post_meta($post_propertie->ID,'wpcf-add-bathtub-number',true);	
			$wk_properties_address =	get_post_meta($post_propertie->ID,'wpcf-add-properties-address',true);	
			$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post_propertie->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }
	
	
		if($wk_properties_status == "Sold"){
  
		?>
		
			
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo $wk_img; ?>">
			  		</div>

			  		<div class="prop_head">
			  			<h4><?php echo $post_propertie->post_title; ?></h4>
			  			<span><?= $wk_properties_status; ?> <?php if($wk_properties_status == "Sold"){ ?> on <?= date('d M Y ', $wk_sold_date);; ?> <?php } ?></span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png">
							<?= $wk_properties_address; ?></h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> <?= $wk_bathroom_numbers; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> <?= $wk_parking_space; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"><?= $wk_bathtub_number; ?></a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>
			  
		<?php } ?>
			  
			<?php } ?>


			 


			</div>



		</div>
	  </div>


	  <div id="tab-Sale" class="tab-content">
		<div class="prop_type">
			
		<p  class="text1"><?php 
			
					$count_posts  = wp_count_posts('properties-post'); 
					
					echo $count_posts->publish; ?> 
					properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>
	

			<div class="row">
			
			
				<?php
			
		$posts_properties = get_posts(array('post_type'=>'properties-post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
		
		
						
			foreach($posts_properties as $post_propertie) {
							
			$wk_number_properties_left = get_post_meta($post_propertie->ID,'wpcf-add-number-properties-left',true);	
			$wk_per_week_price =	get_post_meta($post_propertie->ID,'wpcf-add-per-week-price',true);	
			$wk_properties_status =	get_post_meta($post_propertie->ID,'wpcf-add-properties-status',true);	
			$wk_sold_date =	get_post_meta($post_propertie->ID,'wpcf-add-sold-date',true);	
			$wk_bathroom_numbers =	get_post_meta($post_propertie->ID,'wpcf-add-bathroom-numbers',true);	
			$wk_parking_space =	get_post_meta($post_propertie->ID,'wpcf-add-parking-space',true);	
			$wk_bathtub_number =	get_post_meta($post_propertie->ID,'wpcf-add-bathtub-number',true);	
			$wk_properties_address =	get_post_meta($post_propertie->ID,'wpcf-add-properties-address',true);	
			$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post_propertie->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }
	
	
		if($wk_properties_status == "Sale"){
  
		?>
		
			
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo $wk_img; ?>">
			  		</div>

			  		<div class="prop_head">
			  			<h4><?php echo $post_propertie->post_title; ?></h4>
			  			<span>For <?= $wk_properties_status; ?> <?php if($wk_properties_status == "Sold"){ ?> on <?= date('d M Y ', $wk_sold_date);; ?> <?php } ?></span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png">
							<?= $wk_properties_address; ?></h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> <?= $wk_bathroom_numbers; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> <?= $wk_parking_space; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"><?= $wk_bathtub_number; ?></a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>
			  
		<?php } ?>
			  
			<?php } ?>


			 


			</div>



		</div>
	  </div>



	  <div id="tab-Rent" class="tab-content">
		<div class="prop_type">
		
			<p  class="text1">
				<?php 
			
					$count_posts  = wp_count_posts('properties-post'); 
					
					echo $count_posts->publish;

					?> 
					properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>
			
	

			<div class="row">
			
			
				<?php
			
		$posts_properties = get_posts(array('post_type'=>'properties-post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
		
		
						
			foreach($posts_properties as $post_propertie) {
							
			$wk_number_properties_left = get_post_meta($post_propertie->ID,'wpcf-add-number-properties-left',true);	
			$wk_per_week_price =	get_post_meta($post_propertie->ID,'wpcf-add-per-week-price',true);	
			$wk_properties_status =	get_post_meta($post_propertie->ID,'wpcf-add-properties-status',true);	
			$wk_sold_date =	get_post_meta($post_propertie->ID,'wpcf-add-sold-date',true);	
			$wk_bathroom_numbers =	get_post_meta($post_propertie->ID,'wpcf-add-bathroom-numbers',true);	
			$wk_parking_space =	get_post_meta($post_propertie->ID,'wpcf-add-parking-space',true);	
			$wk_bathtub_number =	get_post_meta($post_propertie->ID,'wpcf-add-bathtub-number',true);	
			$wk_properties_address =	get_post_meta($post_propertie->ID,'wpcf-add-properties-address',true);	
			$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post_propertie->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }
	
	
		if($wk_properties_status == "Rent"){
  
		?>
		
			
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo $wk_img; ?>">
			  		</div>

			  		<div class="prop_head">
			  			<h4><?php echo $post_propertie->post_title; ?></h4>
			  			<span>For <?= $wk_properties_status; ?> <?php if($wk_properties_status == "Sold"){ ?> on <?= date('d M Y ', $wk_sold_date);; ?> <?php } ?></span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png">
							<?= $wk_properties_address; ?></h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> <?= $wk_bathroom_numbers; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> <?= $wk_parking_space; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"><?= $wk_bathtub_number; ?></a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>
			  
		<?php } ?>
			  
			<?php } ?>


			 


			</div>

		</div>
	  </div>
	  
	  
	<div id="tab-Construction" class="tab-content">
		<div class="prop_type">
		
			
			
			<p  class="text1"><?php 
			
					$count_posts  = wp_count_posts('properties-post'); 
					
					echo $count_posts->publish; ?> 
					properties for rent by TIPS Property Management RLA 240800 - ST PETERS</p>

			<div class="row">
			
			
				<?php
			
		$posts_properties = get_posts(array('post_type'=>'properties-post','post_status'=>'publish','posts_per_page'=>-1,'order'=>'ASC')); 
		
			
						
			foreach($posts_properties as $post_propertie) {
							
			$wk_number_properties_left = get_post_meta($post_propertie->ID,'wpcf-add-number-properties-left',true);	
			$wk_per_week_price =	get_post_meta($post_propertie->ID,'wpcf-add-per-week-price',true);	
			$wk_properties_status =	get_post_meta($post_propertie->ID,'wpcf-add-properties-status',true);	
			$wk_sold_date =	get_post_meta($post_propertie->ID,'wpcf-add-sold-date',true);	
			$wk_bathroom_numbers =	get_post_meta($post_propertie->ID,'wpcf-add-bathroom-numbers',true);	
			$wk_parking_space =	get_post_meta($post_propertie->ID,'wpcf-add-parking-space',true);	
			$wk_bathtub_number =	get_post_meta($post_propertie->ID,'wpcf-add-bathtub-number',true);	
			$wk_properties_address =	get_post_meta($post_propertie->ID,'wpcf-add-properties-address',true);	
			$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post_propertie->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }
	
	
		if($wk_properties_status == "Construction"){
  
		?>
		
			
			  <div class="col-xs-12 col-sm-3 wh_prop_type">
			  	<div class="prop_sec">
			  		<div class="prop_img">
			  			<img src="<?php echo $wk_img; ?>">
			  		</div>

			  		<div class="prop_head">
			  			<h4><?php echo $post_propertie->post_title; ?></h4>
			  			<span>Under <?= $wk_properties_status; ?> <?php if($wk_properties_status == "Sold"){ ?> on <?= date('d M Y ', $wk_sold_date);; ?> <?php } ?></span>	
			  		</div>

			  		<div class="locate_text">
			  			<h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_point.png">
							<?= $wk_properties_address; ?></h6>
			  		</div>

			  		 <div class="prop_ul">
			  		 	<ul>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathroom.png"> <?= $wk_bathroom_numbers; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/car.png"> <?= $wk_parking_space; ?></a></li>
			  		 	  <li><a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bathtub.png"><?= $wk_bathtub_number; ?></a></li>
			  		 	</ul>
			  		 </div> 
			  	</div>
			  </div>
			  
		<?php } ?>
			  
			<?php } ?>


			 


			</div>

		</div>
	</div>






	</div>
</section>



	
			
	<?php endwhile; ?>





<?php


get_footer(); 
	
	
?>