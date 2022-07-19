<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anneco
 */

?>




<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, , maximum-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<style>.preloader{display:none;}.first_load .preloader{display:block;}@media (max-width: 991px){.preloader{display:none !important;}.first_load.loading #page{opacity:1}}</style>
<div class="preloader">
	<div class="preloader__bg"></div>
	<div class="preloader__logo">
		<div class="preloader__logo__el-1">
			<svg width="162" height="40" viewBox="0 0 162 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M18.4526 0C8.51807 0 1.5852 5.54663 1.12367 13.8657H11.907C12.2169 10.7075 14.9119 8.7823 18.2251 8.7823C22.0756 8.7823 24.3107 11.09 24.3107 14.7163V15.5635H18.7641C6.97688 15.5602 0.81543 20.6437 0.81543 28.4254C0.81543 35.2808 6.28458 39.9802 14.218 39.9802C18.7641 39.9802 22.3063 37.9759 24.5415 34.8951V38.9006H35.1716V15.7135C35.1716 6.31805 28.7777 0 18.4526 0ZM16.4531 31.7369C13.2175 31.7369 11.4455 30.0424 11.4455 27.654C11.4455 24.6508 13.9872 22.8739 18.9949 22.8739H24.5415C24.5415 27.9623 20.8426 31.7369 16.4531 31.7369Z" fill="#F2F2F2"/>
				<path d="M62.6854 0C58.2168 0 54.4438 1.9269 51.7471 5.00762V1.07801H41.1995V38.9006H52.062V18.1794C52.062 13.1718 55.1427 10.0152 59.3789 10.0152C63.77 10.0152 66.1585 13.3267 66.1585 17.6404V38.9039H77.0193V17.3322C77.0127 6.54551 71.2353 0 62.6854 0Z" fill="#F2F2F2"/>
				<path d="M103.894 0C99.4251 0 95.652 1.9269 92.9554 5.00762V1.07801H82.4077V38.9006H93.2702V18.1794C93.2702 13.1718 96.3509 10.0152 100.587 10.0152C104.978 10.0152 107.367 13.3267 107.367 17.6404V38.9039H118.228V17.3322C118.221 6.54551 112.444 0 103.894 0Z" fill="#F2F2F2"/>
				<path d="M142.885 0C132.102 0 122.94 8.93559 122.94 20.3371C122.94 31.5062 131.261 39.9802 142.43 39.9802C152.521 39.9802 159.377 34.0462 161.148 26.7293H150.434C149.665 29.1177 146.66 30.9672 143.116 30.9672C138.418 30.9672 134.488 27.9623 133.488 22.8013H161.295C161.497 21.3722 161.6 19.9309 161.603 18.4877C161.603 8.16582 153.593 0 142.885 0ZM134.103 15.0987C135.566 11.0933 138.883 8.7823 142.885 8.7823C147.121 8.7823 150.281 11.6323 150.588 15.0987H134.103Z" fill="#F2F2F2"/>
			</svg>
		</div>
		<div class="preloader__logo__el-2">
			<svg width="153" height="40" viewBox="0 0 153 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M72.6676 10.0911C76.4407 10.0911 79.6763 12.5636 80.3703 15.4069H91.3086C90.3064 6.54716 82.373 0 72.8209 0C61.7277 0 52.947 8.47406 52.947 20.0288C52.947 31.5062 61.7277 39.9736 72.8209 39.9736C82.5263 39.9736 90.5372 33.5039 91.3086 24.1826H80.4461C79.6763 27.4958 76.4407 29.8826 72.6676 29.8826C67.5067 29.8826 63.4996 25.7238 63.4996 20.0239C63.5046 14.174 67.5067 10.0911 72.6676 10.0911Z" fill="#F2F2F2"/>
				<path d="M115.521 0C104.274 0 95.4111 8.7823 95.4111 19.9448C95.4111 31.1913 104.269 39.972 115.521 39.972C126.69 39.972 135.63 31.1913 135.63 19.9448C135.625 8.7823 126.69 0 115.521 0ZM115.521 29.965C110.052 29.965 105.96 25.6513 105.96 19.9514C105.96 14.2515 110.043 10.0136 115.521 10.0136C120.912 10.0136 124.995 14.2515 124.995 19.9514C124.995 25.6513 120.912 29.9732 115.521 29.9732V29.965Z" fill="#F2F2F2"/>
				<path d="M152.185 27.5005H140.399V38.9003H152.185V27.5005Z" fill="#F2F2F2"/>
				<path d="M25.0985 1.35352H14.3184V15.1154H0.757568V25.134H14.3299V38.9008H25.1331V25.1158H38.6609V15.0907H25.0985V1.35352Z" fill="#F2F2F2"/>
			</svg>

		</div>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anneco' ); ?></a>

	<header class="site-header site-header--top site-header--landing <?php echo $args['header_class']; ?> <?php echo $args['header_color']; ?>">
		<div class="container">
			<div class="site-header__frame">
				<strong class="logo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel="home"><?php bloginfo( 'name' ); ?></a></strong>
				<nav id="site-navigation" class="main-navigation-landing">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-landing',
							'container'       => false,
							'menu_id'        => 'primary-menu',
							'menu_class'      => 'header-landing-menu',
						)
					);
					?>
					
				</nav>
			</div>
		</div>
	</header>


	<div class="site-header site-header--stick">
		<div class="container">
			<div class="site-header__frame">
				<strong class="logo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel="home"><?php bloginfo( 'name' ); ?></a></strong>
				<nav id="site-navigation" class="main-navigation-landing">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-landing',
							'container'       => false,
							'menu_id'        => 'primary-menu',
							'menu_class'      => 'header-landing-menu',
						)
					);
					?>
				</nav>
			</div>
		</div>
	</div>
	<div class="site-main">
