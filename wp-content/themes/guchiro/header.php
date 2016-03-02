<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/logos/logo-icon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
				<link rel="stylesheet" href="<?=get_template_directory_uri()?>/bower_components/bootstrap/dist/css/bootstrap.css">
    		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/app.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="">

			<!--=====BEGIN HEADER=====-->
			<header class="">
				<div class="container-fluid">
					<nav class="navbar-default navbar-fixed-top">
						<div id="global-nav"class="row">
							<div class="container">
								<p>Call us today! | (559) 875-4569 | <a href="mailto:info@gutierrez-chiropractic.com">info@gutierrez-chiropractic.com</a></p>

								<div id="global-icons" class="sm-icons">
									<a class="sm-tw-icon" href="#"><i class="fa fa-twitter"></i></a>
									<a class="sm-fb-icon" href="#"><i class="fa fa-facebook"></i></a>
								</div>
								</div>
						</div>
						<div id="separator" class="container">
							 <div class="header-separator"></div>
					</div>


						<div class="container">
						<div type="button" class="navbar-toggle" id="nav-menu-btn" data-toggle="collapse" data-target="#navbarCollapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar" id="icon-btn-bar"></span>
	            <span class="icon-bar" id="icon-btn-bar"></span>
	            <span class="icon-bar" id="icon-btn-bar"></span>
	        	</div>

						<!-- Logo -->
						<div id="logo">
	            <a class="" href="<?php echo home_url(); ?>">
	                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/gc-logo.png" alt="Logo">
	            </a>
						</div>

						<!--Menu-->
						<div id="navbarCollapse" class="collapse navbar-collapse">
							<?php
							wp_nav_menu( array(
											'menu'              => 'primary',
											'theme_location'    => 'primary',
											'depth'             => 2,
											'container'         => false,
											'menu_class'        => 'nav navbar-nav menu',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'walker'            => new wp_bootstrap_navwalker())
							); ?>
						</div>

						<!--dropdown icons-->
						<div class="head-icons">
							<a href="#"><i class="fa fa-clock-o"></i><span class="icon-hours">Hours</span></a>
							<a href="#"><i class="fa fa-envelope"> <span class="icon-contact">Contact</span></i></a>
						</div>


					</div>
					</nav>
				</div>
			</header>

			<!--=====END HEADER=====-->
