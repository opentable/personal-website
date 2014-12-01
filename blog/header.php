<!-- HEADER -->

<!doctype html>
<!-- This website was coded with love using OCSS as structure model, please share, dont rip off :)	-->
<html <?php language_attributes(); ?>>
		<head>
				<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="OpenTable, design, tech, blog, data, engineering, news, articles ">
		<meta name="description" content="Stories and Ideas.">
		
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
				<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
				<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

		<!-- WP HEADER -->
		
		<?php wp_head(); ?>
		
		<!-- END WP HEADER -->

		</head>
<body>
<div class="main-box">

	<div class="main-navigation">
		<!-- TITLE -->
			<div class="title-logo">
				<div class="line cf">
					<div class="unit size6of6">
						<div class="header">
							 <div class="logo"><a href="http://opentable.com"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
							 <div class="title"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt=""></a></div>
						 </div>
					 </div>
				 </div>
			 </div>
		<!-- END TITLE -->

		<!-- START NAVIGATION -->

		<div class="navigation-line"></div>
		<div class="menu">
			<div class="line cf">
				<div class="lastUnit size6of6 t-center">
					<div class="navigation a-center">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu-class' => 'cf' ) ); ?>
						
						<!-- example header code
							<ul class="cf">
							<a href=""><li class="selected">All Categories</li></a>
							<a href=""><li>Data</li></a>
							<a href=""><li>Engineering</li></a>
							<a href="design.html"><li>Design</li></a>
							<a href=""><li>Product</li></a>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGATION -->
	</div>

<!-- END HEADER -->