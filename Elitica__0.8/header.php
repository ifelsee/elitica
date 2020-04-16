<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elitica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/ias4bow.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
	<script src="https://kit.fontawesome.com/df20487a1a.js" crossorigin="anonymous"></script>
	<script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

	<!-- other head elements from your page -->

	<?php wp_head(); ?>
</head>










<body <?php body_class(); ?>>
	<?php if (is_active_sidebar('custom-side-bar-nav')) : ?>
		<div class="sidebar-nav">
			<div class="ads-area" id="ads-area">
				<?php dynamic_sidebar('custom-side-bar-nav'); ?>
			</div>
		</div>
	<?php endif; ?>
	<div id="Navbar-b" class="nav-b ">

		<div class="nav-b-a">
			<div class="nav-title ">
				<?php
				the_custom_logo();
				?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

			</div>
			<div class="nav-b-links ">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'top-menu',
					'menu_id'        => 'primary-menu',
				));
				?>
			</div>

			<div class="nav-search">
				<input type="checkbox" id="btnControl" class="checkboxa" />
				<i class="fas fa-search"></i>
				<?php get_search_form(); ?>


			</div>
		</div>

	</div>
	<div class="container-a"> 