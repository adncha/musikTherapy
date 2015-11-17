<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<!-- site-header -->
	<header class="site-header">

		<!-- hd-search -->
		<!--<div class="hd-search">
				<?php get_search_form(); ?>
			</div>--><!-- /hd-search -->
		<div class="mtu-header">
			<h1 class="mtu-title"><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?></a></h1>
		</div>

		<div class="col-md-4 col-md-offset-4">
			<nav class="site-nav">

				<?php

					$args = array(
							'theme_location' => 'primary'
					);

				?>

				<?php wp_nav_menu(  $args ); ?>
			</nav>
		</div>

	</header><!-- /site-header -->

	<div class="container">
