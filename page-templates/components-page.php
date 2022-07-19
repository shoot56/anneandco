<?php 
/*
Template Name: Components Page Template
*/

get_header();
?>
<style>
.spacer {
	background-color: #f6f6f6;
	min-height: 40px;
	display: block;
	margin-bottom: 20px;
	text-align: center;
	padding: 10px;
}
.components-section__title {
	text-align: center;
	font-family: "aktiv-grotesk-extended",sans-serif;
	font-size: 48px;
	line-height: 1;
	margin-top: 1em;
	margin-bottom: 1em;
	border-top: 1px solid #D07D59;
	border-bottom: 1px solid #D07D59;
}
.components-section__subtitle {
	font-family: "aktiv-grotesk-extended",sans-serif;
	font-size: 24px;
	line-height: 1;
	margin-top: 1em;
	margin-bottom: 1em;
}
.icon-component-list {
	display:-ms-grid;
	display:grid;
	-ms-grid-columns:repeat(6, 1fr);
	grid-template-columns:repeat(6, 1fr);
	grid-gap: 20px;
	text-align: center;

}
.icon-component-list__item {
	padding: 16px;
	background-color: #f2f2f2;
	border-radius: 8px;
	color: #1E293A;
}
.icon-component-list .icon {
	display: inline-block;
	vertical-align: top;
	background-color: #e0e0e0;
}
.icon-component-list .icon svg {
	width: 36px;
	height: 36px;
}
.icon-component-list .name {
	margin-top: 5px;
}
</style>
<div class="site-main">
	<?php if (is_user_logged_in()): ?>
		
	<div class="components-section" style="background-color: #fff;">
		<div class="container">
			<div class="components-section__title">SVG Icons:</div>

			<div class="icon-component-list">
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus-thin"></use></svg>
					</div>
					<div class="name">icon-plus-thin</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg>
					</div>
					<div class="name">icon-plus</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-thin"></use></svg>
					</div>
					<div class="name">icon-arrow-thin</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow"></use></svg>
					</div>
					<div class="name">icon-arrow</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-down"></use></svg>
					</div>
					<div class="name">icon-arrow-down</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg>
					</div>
					<div class="name">icon-arrow-up-right</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use></svg>
					</div>
					<div class="name">icon-linkedin</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-mail"></use></svg>
					</div>
					<div class="name">icon-mail</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-email"></use></svg>
					</div>
					<div class="name">icon-email</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-phone"></use></svg>
					</div>
					<div class="name">icon-phone</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-twitter"></use></svg>
					</div>
					<div class="name">icon-twitter</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-facebook"></use></svg>
					</div>
					<div class="name">icon-facebook</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-branding"></use></svg>
					</div>
					<div class="name">icon-branding</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-ux-ui"></use></svg>
					</div>
					<div class="name">icon-ux-ui</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-packaging"></use></svg>
					</div>
					<div class="name">icon-packaging</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-web-design"></use></svg>
					</div>
					<div class="name">icon-web-design</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-marketing"></use></svg>
					</div>
					<div class="name">icon-marketing</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-campaigns"></use></svg>
					</div>
					<div class="name">icon-campaigns</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-branding"></use></svg>
					</div>
					<div class="name">icon-clear-branding</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-ux-ui"></use></svg>
					</div>
					<div class="name">icon-clear-ux-ui</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-packaging"></use></svg>
					</div>
					<div class="name">icon-clear-packaging</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-web-design"></use></svg>
					</div>
					<div class="name">icon-clear-web-design</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-marketing"></use></svg>
					</div>
					<div class="name">icon-clear-marketing</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-clear-campaigns"></use></svg>
					</div>
					<div class="name">icon-clear-campaigns</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-home"></use></svg>
					</div>
					<div class="name">icon-home</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-send-form"></use></svg>
					</div>
					<div class="name">icon-send-form</div>
				</div>
				<div class="icon-component-list__item">
					<div class="icon">
						<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-bell"></use></svg>
					</div>
					<div class="name">icon-bell</div>
				</div>





			</div>

			<div class="components-section__title">Grid:</div>
			<div class="grid-row">
				<div class="grid-col grid-col--12">
					<span class="spacer">1</span>
				</div>
			</div>
			<div class="grid-row">
				<div class="grid-col grid-col--6">
					<span class="spacer">1/2</span>
				</div>
				<div class="grid-col grid-col--6">
					<span class="spacer">1/2</span>
				</div>
			</div>
			<div class="grid-row">
				<div class="grid-col grid-col--4">
					<span class="spacer">1/3</span>
				</div>
				<div class="grid-col grid-col--4">
					<span class="spacer">1/3</span>
				</div>
				<div class="grid-col grid-col--4">
					<span class="spacer">1/3</span>
				</div>
			</div>
			<div class="grid-row">
				<div class="grid-col grid-col--3">
					<span class="spacer">1/4</span>
				</div>
				<div class="grid-col grid-col--3">
					<span class="spacer">1/4</span>
				</div>
				<div class="grid-col grid-col--3">
					<span class="spacer">1/4</span>
				</div>
				<div class="grid-col grid-col--3">
					<span class="spacer">1/4</span>
				</div>
			</div>
			<div class="grid-row">
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
				<div class="grid-col grid-col--2">
					<span class="spacer">1/6</span>
				</div>
			</div>
			<div class="grid-row">
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
				<div class="grid-col grid-col--1">
					<span class="spacer">1/12</span>
				</div>
			</div>
			<div class="components-section__title">Section divider:</div>
			<div class="section-divider"><div class="container"><span class="section-divider__item"></span></div></div>
			<div class="components-section__title">Heading:</div>
			<h1>This is a H1</h1>
			<h2>This is a H2</h2>
			<h3>This is a H3</h3>
			<h4>This is a H4</h4>
			<h5>This is a H5</h5>
			<h6>This is a H6</h6>
			<div class="components-section__title">Buttons:</div>
			<div class="components-section__subtitle">Primary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn round-btn round-btn--navy round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--blue round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--orange round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--nude round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--white round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--cream round-btn--light"><span class="round-btn__text">Button</span></a>
			</div>
			<div style="background-color: #111; padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn round-btn round-btn--navy round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--blue round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--orange round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--nude round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--white round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn round-btn round-btn--cream round-btn--dark"><span class="round-btn__text">Button</span></a>
			</div>
			<div class="components-section__subtitle">Primary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn round-btn round-btn--navy round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--blue round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--orange round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--nude round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--white round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--cream round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>
			<div style="background-color: #111; padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn round-btn round-btn--navy round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--blue round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--orange round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--nude round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--white round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn round-btn round-btn--cream round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>

			<div class="components-section__subtitle">Secondary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--blue">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--orange">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--nude">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--white">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--cream">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--filled-white">
					<span class="secondary-btn__text">Button</span>
				</a>
			</div>

			<div class="components-section__subtitle">Secondary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<button class="btn secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</button>
				<a href="#" class="btn secondary-btn secondary-btn--blue">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--orange">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--nude">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--white">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--cream">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn secondary-btn secondary-btn--filled-white">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
				</a>
			</div>

			<div class="components-section__subtitle">Teritiary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn teritiary-btn teritiary-btn--navy">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--blue">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--orange">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--nude">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--white">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--cream">
					<span class="teritiary-btn__text">Button</span>
				</a>
			</div>

			<div class="components-section__subtitle">Teritiary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn teritiary-btn teritiary-btn--navy">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--blue">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--orange">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--nude">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--white">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn teritiary-btn teritiary-btn--cream">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>



			<div class="components-section__title">Small Buttons:</div>
			<div class="components-section__subtitle">Primary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm round-btn round-btn--navy round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--blue round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--orange round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--nude round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--white round-btn--light"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--cream round-btn--light"><span class="round-btn__text">Button</span></a>
			</div>
			<div style="background-color: #111; padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm round-btn round-btn--navy round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--blue round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--orange round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--nude round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--white round-btn--dark"><span class="round-btn__text">Button</span></a>
				<a href="#" class="btn btn--sm round-btn round-btn--cream round-btn--dark"><span class="round-btn__text">Button</span></a>
			</div>

			<div class="components-section__subtitle">Primary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm round-btn round-btn--navy round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--blue round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--orange round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--nude round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--white round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--cream round-btn--light">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>
			<div style="background-color: #111; padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm round-btn round-btn--navy round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--blue round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--orange round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--nude round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--white round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm round-btn round-btn--cream round-btn--dark">
					<span class="round-btn__text">Button</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>

			<div class="components-section__subtitle">Secondary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--blue">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--orange">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--nude">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--white">
					<span class="secondary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--cream">
					<span class="secondary-btn__text">Button</span>
				</a>
			</div>

			<div class="components-section__subtitle">Secondary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--blue">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--orange">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--nude">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--white">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm secondary-btn secondary-btn--cream">
					<span class="secondary-btn__text">Button</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>

			<div class="components-section__subtitle">Teritiary Button</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--navy">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--blue">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--orange">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--nude">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--white">
					<span class="teritiary-btn__text">Button</span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--cream">
					<span class="teritiary-btn__text">Button</span>
				</a>
			</div>

			<div class="components-section__subtitle">Teritiary Button with Icon</div>
			<div style="padding: 20px; margin-bottom: 20px; display: flex; gap: 20px; flex-wrap: wrap;">
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--navy">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--blue">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--orange">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--nude">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--white">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
				<a href="#" class="btn btn--sm teritiary-btn teritiary-btn--cream">
					<span class="teritiary-btn__text">Button</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>

			<div class="components-section__title">Form Elements CF7:</div>
			<?php 
			echo do_shortcode( '[contact-form-7 id="9" title="example components form"]' );
			?>
			






			<br>
			<br>
			<br>


		</div>
	</div>
	<?php endif ?>
</div>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'navy',) );
?>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'blue',) );
?>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'orange',) );
?>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'white',) );
?>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'cream',) );
?>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
?>





<?php


the_content();

get_footer('');