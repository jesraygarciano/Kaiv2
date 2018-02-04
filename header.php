<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php bloginfo('name'); ?>|
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kai made for adventure apparel" />
	<meta name="keywords" content="Kai, Kai Apparel, Kai made for adventure, Adventure apparel, climb apparel, made for adventure, kai adventure apparel" />
	<meta name="author" content="Jesray Garciano" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700|Roboto:900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/sass/stylesheets/screen.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Modernizr JS -->
	<script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<?php wp_head();?>
	</head>
	<body>
		
	<!-- <div class="gtco-loader"></div> -->
	
	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo">
							<a href="<?php echo get_site_url();?>">
								<img src="<?php echo get_bloginfo('template_directory'); ?>/images/nav_logo.png" />
							</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
							<?php
							wp_nav_menu( array(
							    'theme_location'    => 'primary',
							    'depth'             => 2,
							    'container'         => 'div',
							    'container_class'   => 'collapse navbar-collapse',
							    'container_id'      => 'bs-example-navbar-collapse-1',
							    'menu_class'        => 'nav navbar-nav',
							    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							    'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>
					</div>


				</div>
				
			</div>
		</nav>