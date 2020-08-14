<!doctype html>
<html lang="pl" class="no-js">

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="viewport" content="width=width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/lightbox.min.css">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<!-- <div id="container"> -->

			<!-- <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader"> -->

				<!-- <div id="inner-header" class="wrap cf"> -->

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!-- <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p> -->

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php //bloginfo('description'); ?>

								
					<nav class="navbar navbar-expand-lg navbar-default navbar-custom navbar-light">
        <div class="container px-3" >
            <a class="navbar-brand logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/drestol_logo.png" alt="DRESTOL - Meble na wymiar" /></a>

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
						
						<?php wp_nav_menu([
							// 'menu'            => 'main-nav',
							'theme_location'  => 'main-nav',
							'container'       => 'div',
							'container_id'    => 'navbar-collapse-1',
							'container_class' => 'collapse navbar-collapse',
							'menu_id'         => false,
							'menu_class'      => 'navbar-nav ml-auto',
							'depth'           => 2,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
						]); ?>
						
						</div>
					</nav>

				<!-- </div> -->