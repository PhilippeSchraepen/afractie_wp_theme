<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<div class="language-balloon">
					<p class="language-balloon__text"><?php echo strtoupper(substr(get_site_url(), -2)) ?></p>
					<img src="<?php echo get_template_directory_uri() . '/images/bubble.png';?>" alt="Language" class="language-balloon__image">
				</div>
				<img src="<?php echo get_template_directory_uri() . '/images/logo.png';?>" alt="Logo" class="logo" />
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div class="dropdown" onclick="dropdown()">
				<button class="dropbtn">Language</button>
				<ul id="myDropdown" class="dropdown-content">
					<li><a href="http://afractie.be/new">Nederlands</a></li>
					<li><a href="http://afractie.be/fr">Français</a></li>
					<li><a href="http://afractie.be/en">English</a></li>
				</ul>
				<div class="triangle"></div>
			</div>


			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<script>
			var balloon = document.getElementsByClassName("language-balloon")[0]
			var balloonText = document.getElementsByClassName("language-balloon__text")[0]
			var langCode = window.location.pathname.replace(/[\/]/gi, '');
			if (langCode === 'fr' || langCode === 'en'){
				balloonText.innerHTML = window.location.pathname.replace(/[\/]/gi, '');
			} else {
				balloon.className = 'hidden'
			}

						/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function dropdown() {
					document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown menu if the user clicks outside of it
			window.onclick = function(event) {
				if (!event.target.matches('.dropbtn')) {

					var dropdowns = document.getElementsByClassName("dropdown");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}
		</script>
		<div id="main" class="site-main">
