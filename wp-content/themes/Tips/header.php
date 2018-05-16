<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
	<title>  <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title(''); ?> | <?php  echo get_bloginfo('name');
    }?></title>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.css">
           <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
           <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
	        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css">
	        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	         <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	          <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 11]><p class="browser-upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

		<?php			
			$home_id =  "15";
			$wk_logo =	get_post_meta( $home_id,'wpcf-add-site-logo',true);
			$wk_facebook_link =	get_post_meta( $home_id,'wpcf-add-facebook-link',true);
			$wk_twitter_link =	get_post_meta( $home_id,'wpcf-add-twitter-link',true);
			$wk_google_plus_link =	get_post_meta( $home_id,'wpcf-add-google-plus-link',true);
			$wk_add_linkedin_link =	get_post_meta( $home_id,'wpcf-add-linkedin-link',true);
			$wk_add_youtube_link =	get_post_meta( $home_id,'wpcf-add-youtube-link',true);
			$wk_phone_number =	get_post_meta( $home_id,'wpcf-add-phone-number-here',true);

		?>
		
 <section class="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo site_url(); ?>"> 
				<img alt="TIPS Logo" src="<?php echo $wk_logo; ?>">
			</a>
		</div>

		<div class="head_right">
			<div class="top_bar">
			   <div  class="social_icons">
			   	 <ul>
			   	 	<li>
						<?php if(empty($wk_facebook_link)){ ?>
							
							<a href="javascript:void(0);">
								<i class="fab fa-facebook-f"></i>
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_facebook_link; ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
					
						<?php } ?>
					</li>
			   	 	<li>
						<?php if(empty($wk_twitter_link)){ ?>
							
							<a href="javascript:void(0);">
								<i class="fab fa-twitter"></i>
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_twitter_link; ?>">
								<i class="fab fa-twitter"></i>
							</a>
					
						<?php } ?>
					</li>					
			   	 	<li>
						<?php if(empty($wk_google_plus_link)){ ?>
							
							<a href="javascript:void(0);">
								<i class="fab fa-google-plus-g"></i>
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_google_plus_link; ?>">
								<i class="fab fa-google-plus-g"></i>
							</a>
					
						<?php } ?>
					</li>
					<li>
						<?php if(empty($wk_add_linkedin_link)){ ?>
							
							<a href="javascript:void(0);">
								<i class="fab fa-linkedin-in"></i>
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_add_linkedin_link; ?>">
								<i class="fab fa-linkedin-in"></i>
							</a>
					
						<?php } ?>
					</li>
					<li>
						<?php if(empty($wk_add_youtube_link)){ ?>
							
							<a href="javascript:void(0);">
								<i class="fab fa-youtube"></i>
							</a>
		
						<?php }else{ ?>
					
							<a target="_blank" href="<?= $wk_add_youtube_link; ?>">
								<i class="fab fa-youtube"></i>
							</a>
					
						<?php } ?>
					</li>
			   	 </ul>
				<?php if(!empty($wk_phone_number)){ ?>
					<div class="phone_no">
						<a href="tel:<?= $wk_phone_number; ?>"><?= $wk_phone_number; ?></a>
					</div>
				<?php } ?>
			   </div>
			</div>                                                                    

			<div class="navigation">
				<?php wp_nav_menu( array('menu' => 'main menu')); ?>  
				<!--<ul>
				  <li><a href="<?php //echo site_url(); ?>">Home</a></li>
				  <li><a href="#">3 x Core Offering</a></li>
				  <li><a href="<?php //echo site_url(); ?>/property-management/">Property management</a></li>
				  <li><a href="#">Insights / Tips</a></li>
				  <li><a href="<?php //echo site_url(); ?>/about/">About</a></li>
				  <li><a href="<?php //echo site_url(); ?>/contact/">Contact</a></li>
				  <li><a href="#">Individual house listing</a></li>
				</ul>-->
			</div>
       
       <div class="toggle"><i class="fas fa-bars"></i></div>

		</div>


	</div>
</section>