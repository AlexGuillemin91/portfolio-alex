<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio_Alex
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">


		<nav class="navbar">
			<div class="navbar-brand">
				<a href="../"><h2>Alex Guillemin</h2></a>
			</div>
			<div class="navbar-list">
				<ul>
					<?php
					$items = wp_get_nav_menu_items(
						get_nav_menu_locations("main-menu")["main-menu"]
					);
					foreach ($items as $menuItem) :
					?>
						<li>
							<a href="<?= $menuItem->url ?>"><?= $menuItem->title; ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</nav>


