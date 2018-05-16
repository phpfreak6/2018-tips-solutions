<?php 
/*
/**
 * The template for displaying all Properties Post
 *
 */

get_header(); 
?>
	


<?php  
	
	
	while(have_posts()):the_post();
	
	$wk_number_properties_left = get_post_meta($post->ID,'wpcf-add-number-properties-left',true);	
	$wk_per_week_price =	get_post_meta($post->ID,'wpcf-add-per-week-price',true);	
	$wk_image = wp_get_attachment_url(get_post_thumbnail_ID($post->ID));
			
			 if(!empty($wk_image)){
								 
								 $wk_img = $wk_image;
								 
							 }else{
								 
								  $wk_img = "/wp-content/themes/Tips/images/dummy.jpg";
								 
							 }

	
	


	?>

	

<section class="inner_sec abt_sec">
	<div class="container">
		<h1><?php echo $post->post_title; ?></h1>

		

		<div class="row">
			<div class="col-xs-12 col-sm-3 abt_img">
				<div class="home_box">
					<img src="<?php echo $wk_img; ?>">
						<?php if(!empty($wk_number_properties_left)){ ?>
					<div class="over_text">
						<span><?= $wk_number_properties_left; ?></span>
					</div>
				<?php } ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-9 abt_txt">
			
				<?php  the_content(); ?>
				
			</div>
		</div>



	</div>
</section>


	
			
	<?php endwhile; ?>
	
<?php


get_footer(); 
	
	
?>	