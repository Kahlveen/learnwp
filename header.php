<!DOCTYPE html>

<!-- bloginfo, wp_head etc are wordpress functions that dynamically loads content from database onto website, without need to hardcode. i.e. these content can be edited using the wordpress admin page -->

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<div class="container">
		<!-- site-header -->
		<header class="site-header">
			<!-- home_url goes to the homepage -->
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>

			<nav class="site-nav">
				<?php
					$args = array(
						'theme_location' => 'header'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>

		</header>



