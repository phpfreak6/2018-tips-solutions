<?php			
		$home_id =  "15";
		$wk_footer_left_title =	get_post_meta($home_id,'wpcf-add-footer-left-title',true);
		$wk_footer_center_title = get_post_meta($home_id,'wpcf-add-footer-center-title',true);
		$wk_footer_center_address =	get_post_meta($home_id,'wpcf-add-footer-center-address',true);
		$wk_footer_center_phone_no = get_post_meta($home_id,'wpcf-add-footer-center-phone-no',true);
		$wk_footer_center_fax_no = get_post_meta($home_id,'wpcf-add-footer-center-fax-no',true);
		$wk_footer_right_logo_1 = get_post_meta($home_id,'wpcf-add-footer-right-logo-1',true);
		$wk_footer_right_logo_1_link = get_post_meta($home_id,'wpcf-add-footer-right-logo-1-link',true);
		$wk_footer_right_logo_2 = get_post_meta($home_id,'wpcf-add-footer-right-logo-2',true);
		$wk_footer_right_logo_2_link = get_post_meta($home_id,'wpcf-add-footer-right-logo-2-link',true);
		$wk_footer_right_logo_3 = get_post_meta($home_id,'wpcf-add-footer-right-logo-3',true);
		$wk_footer_right_logo_3_link = get_post_meta($home_id,'wpcf-add-footer-right-logo-3-link',true);
		$wk_footer_right_logo_4 = get_post_meta($home_id,'wpcf-add-footer-right-logo-4',true);
		$wk_footer_right_logo_4_link = get_post_meta($home_id,'wpcf-add-footer-right-logo-4-link',true);
		$wk_footer_right_logo_5 = get_post_meta($home_id,'wpcf-add-footer-right-logo-5',true);
		$wk_footer_right_logo_5_link = get_post_meta($home_id,'wpcf-add-footer-right-logo-5-link',true);
		$wk_footer_bottom_text = get_post_meta($home_id,'wpcf-footer-bottom-text',true);
		$wk_testimonial_title = get_post_meta($home_id,'wpcf-add-testimonial-title',true);
		$wk_other_service_title = get_post_meta($home_id,'wpcf-add-other-service-title',true);
		$wk_link_text = get_post_meta($home_id,'wpcf-add-link-text',true);
		$wk_first_service_title = get_post_meta($home_id,'wpcf-add-first-service-title',true);
		$wk_first_service_small_content = get_post_meta($home_id,'wpcf-add-first-service-small-content',true);
		$wk_first_service_image = get_post_meta($home_id,'wpcf-add-first-service-image',true);
		$wk_first_service_link = get_post_meta($home_id,'wpcf-add-first-service-link',true);
		$wk_second_service_title = get_post_meta($home_id,'wpcf-add-second-service-title',true);
		$wk_second_service_small_content = get_post_meta($home_id,'wpcf-add-second-service-small-content',true);
		$wk_second_service_image = get_post_meta($home_id,'wpcf-add-second-service-image',true);
		$wk_second_service_link = get_post_meta($home_id,'wpcf-add-second-service-link',true);
		$wk_third_service_title = get_post_meta($home_id,'wpcf-add-third-service-title',true);
		$wk_third_service_small_content = get_post_meta($home_id,'wpcf-add-third-service-small-content',true);
		$wk_third_service_image = get_post_meta($home_id,'wpcf-add-third-service-image',true);
		$wk_third_service_link = get_post_meta($home_id,'wpcf-add-third-service-link',true);
		

?>

<?php  

		$wk_form_code_yes_no =	get_post_meta($post->ID,'wpcf-select-show-appointment-form',true);
		$wk_add_form_title_here =	get_post_meta($post->ID,'wpcf-add-form-title-here',true);
		$wk_add_form_shortcode_here =	get_post_meta($post->ID,'wpcf-add-form-shortcode-here',true);
		
		
	if($wk_form_code_yes_no == "2"){

 ?>

<section class="book_appointment">
	<div class="container">
		<div class="booking_box">
			<h1 class="heading"><?= $wk_add_form_title_here; ?></h1>

			<div class="wk_row">
				<div class="wk_input">
					<?php echo do_shortcode($wk_add_form_shortcode_here); ?>
					
				</div>

			</div>
		</div>
	</div>
</section>

	<?php } ?>

<section class="other_services">
	<div class="container">
		<h1 class="heading"><?= $wk_other_service_title; ?></h1>

		<div class="other_service_box">
			<div class="col-xs-12 col-sm-4 boxes">
				<div class="inner_service">
					<div class="other_service_icon">
						<img alt="<?= $wk_first_service_title; ?>" src="<?= $wk_first_service_image; ?>">
					</div>

					<div class="other_service_text">
						<h4><?= $wk_first_service_title; ?></h4>
						<span><?= $wk_first_service_small_content; ?></span>
						<a href="<?php if(empty($wk_first_service_link)){ echo "javascript:void(0)"; }else{ echo $wk_first_service_link; } ?>" class="find_btn"><?= $wk_link_text; ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrw.png"></a>
					</div>

				</div>
			</div>


			<div class="col-xs-12 col-sm-4 boxes">
				<div class="inner_service">
					<div class="other_service_icon">
						<img alt="<?= $wk_second_service_title; ?>" src="<?= $wk_first_service_image; ?>">
					</div>

					<div class="other_service_text">
						<h4><?= $wk_second_service_title; ?> </h4>
						<span><?= $wk_second_service_small_content; ?></span>
						<a href="<?php if(empty($wk_second_service_link)){ echo "javascript:void(0)"; }else{ echo $wk_second_service_link; } ?>" class="find_btn"><?= $wk_link_text; ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrw.png"></a>
					</div>

				</div>
			</div>


			<div class="col-xs-12 col-sm-4 boxes">
				<div class="inner_service">
					<div class="other_service_icon">
						<img alt="<?= $wk_third_service_title; ?>" src="<?= $wk_third_service_image; ?>">
					</div>

					<div class="other_service_text">
						<h4><?= $wk_third_service_title; ?> </h4>
						<span><?= $wk_third_service_small_content; ?></span>
						<a href="<?php if(empty($wk_third_service_link)){ echo "javascript:void(0)"; }else{ echo $wk_third_service_link; } ?>" class="find_btn"><?= $wk_link_text; ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrw.png"></a>
					</div>

				</div>
			</div>


		</div>
	</div>
</section>


<section class="testimonial_sec">
	<div class="container">
		<h1><?= $wk_testimonial_title; ?></h1>


		<div class="owl-carousel owl-theme" id="owl-demo">
		
		<?php
	$posts_testimonials = get_posts(array('post_type'=>'testimonials','post_status'=>'publish','posts_per_page'=>-1,'order'=>'DESC')); 
						
						foreach($posts_testimonials as $post_testimonials) {

  
		?>
		
    	  	 <div class="owl-item">
    	  	 	<div class="no-gutter">
    	  	 		<div class="testimonial_box">
						 <div class="test_text"> 
						 
						  <?php echo wpautop($post_testimonials->post_content); ?>
						 
						
						 
						 </div>
    	  	 		</div>

    	  	 		<div class="client_box">
    	  	 			<div class="client_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/user1.png"></div>
    	  	 			<div class="client_name"><?= $post_testimonials->post_title; ?></div>

    	  	 		</div>
    	  	 	</div>
    	  	 </div>
			 
		<?php } ?>
		

    	</div>

    	</div>
	</div>
</section>


<section class="footer">
	<div class="container">
		<div class="col-xs-12 col-sm-5 footer_box">
			<h6><?= $wk_footer_left_title ; ?></h6>
			<ul class="footer_ul">
				<li><a href="javascript:void(0)">Home</a></li>
				<li><a href="javascript:void(0)">SMSF</a></li>
				<li><a href="javascript:void(0)">$19 a week</a></li>
				<li><a href="javascript:void(0)">Education Centre</a></li>
				<li><a href="javascript:void(0)">Careers</a></li>
				<li><a href="javascript:void(0)">Contact Us</a></li>
				<li><a href="javascript:void(0)">Property Management</a></li>
				<li><a href="javascript:void(0)">Property Investment Articles</a></li>
				<li><a href="javascript:void(0)">Property Alerts</a></li>
				<li><a href="javascript:void(0)">Our Services</a></li>
				<li><a href="javascript:void(0)">About Us</a></li>
				<li><a href="javascript:void(0)">Testimonials</a></li>
				<li><a href="javascript:void(0)">Privacy Policy</a></li>
				<li><a href="javascript:void(0)">Sitemap</a></li>

			</ul>
		</div>

		<div class="col-xs-12 col-sm-4 footer_box footer_center">
			<h6><?= $wk_footer_center_title ; ?></h6>

			<ul class="reach_us">
				<?php if(!empty($wk_footer_center_address)){ ?>
					<li>
						<a target="_blank" href="https://maps.google.com/maps?saddr=&daddr=<?= $wk_footer_center_address; ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png">
							<?=	$wk_footer_center_address; ?>
						</a>
					</li>
				<?php } ?>
				<?php if(!empty($wk_footer_center_phone_no)){ ?>
					<li>
						<a  href="tel:<?= $wk_footer_center_phone_no; ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png">
							<?=	$wk_footer_center_phone_no; ?>
						</a>
					</li>
				<?php } ?>
				
				<?php if(!empty($wk_footer_center_fax_no)){ ?>
					<li>
						<a  href="javascript:void(0);">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fax.png">
							<?=	$wk_footer_center_fax_no; ?>
						</a>
					</li>
				<?php } ?>
				
				
			</ul>
		</div>

		<div class="col-xs-12 col-sm-3 footer_box footer_img">
			<?php if(empty($wk_footer_right_logo_1_link)){ ?>
							
							<a href="javascript:void(0);">
								<img src="<?php echo $wk_footer_right_logo_1; ?>">
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_footer_right_logo_1_link; ?>">
								<img src="<?php echo $wk_footer_right_logo_1; ?>">
							</a>
					
			<?php } ?>
			
			<?php if(empty($wk_footer_right_logo_2_link)){ ?>
							
							<a href="javascript:void(0);">
								<img src="<?php echo $wk_footer_right_logo_2; ?>">
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_footer_right_logo_2_link; ?>">
								<img src="<?php echo $wk_footer_right_logo_2; ?>">
							</a>
					
			<?php } ?>
			
			<?php if(empty($wk_footer_right_logo_3_link)){ ?>
							
							<a href="javascript:void(0);">
								<img src="<?php echo $wk_footer_right_logo_3; ?>">
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_footer_right_logo_3_link; ?>">
								<img src="<?php echo $wk_footer_right_logo_3; ?>">
							</a>
					
			<?php } ?>	

			<?php if(empty($wk_footer_right_logo_4_link)){ ?>
							
							<a href="javascript:void(0);">
								<img src="<?php echo $wk_footer_right_logo_4; ?>">
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_footer_right_logo_4_link; ?>">
								<img src="<?php echo $wk_footer_right_logo_4; ?>">
							</a>
					
			<?php } ?>	

			<?php if(empty($wk_footer_right_logo_5_link)){ ?>
							
							<a href="javascript:void(0);">
								<img src="<?php echo $wk_footer_right_logo_5; ?>">
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_footer_right_logo_5_link; ?>">
								<img src="<?php echo $wk_footer_right_logo_5; ?>">
							</a>
					
			<?php } ?>
			
		</div>

		<div class="copyright">
    	<p><?= $wk_footer_bottom_text; ?></p>
    </div>

	</div>
</section>

<!--<script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery(".toggle").click(function(){
			jQuery(".navigation ").slideToggle("slow");
		});	
	});
</script>

<script type="text/javascript">

 jQuery(document).ready(function() {
          jQuery("#owl-demo").owlCarousel({
          autoPlay: true, //Set AutoPlay to 3 seconds
		  autoplayTimeout:9000 ,
		  pagination: false,
          items : 2,
          itemsDesktop : [1199,2],
          itemsDesktopSmall : [979,1],
          itemsTablet : [768,1],
          itemsMobile : [479,1],
		  navigation: false,
		  navigationText: [
				  "<i class='fa fa-angle-left' aria-hidden='true'></i>",
				  "<i class='fa fa-angle-right' aria-hidden='true'></i>"
				],
     });
     });

</script>

<script type="text/javascript">
jQuery(document).ready(function(){
	
	jQuery('ul.tabs li').click(function(){
		var tab_id = jQuery(this).attr('data-tab');

		jQuery('ul.tabs li').removeClass('current');
		jQuery('.tab-content').removeClass('current');

		jQuery(this).addClass('current');
		jQuery("#"+tab_id).addClass('current');
	})

})
</script>


        <?php wp_footer(); ?>
    </body>
</html>
