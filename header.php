<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Hello World</title>

        <!-- The wp_head() function simply calls all functions hooked to the wp_head action -->
        <?php wp_head(); ?>
	</head>
	<body>

<header>
			<nav>
				<a href="/" class="nav__home-link">Hello World</a>

				<ul class="nav__nav-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</header>

        <main>