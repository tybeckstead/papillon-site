<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Papillon_Store_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pappilon-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="nav">
			<div class="grid-x">
				<div class="cell large-3 medium-3 hide-for-small-only main_icons">
					<img src="/assets/img/twitter.png" alt="Twitter Icon" class="icons">
					<img src="/assets/img/facebook.png" alt="Facebook Icon" class="icons">
					<img src="/assets/img/instagram.png" alt="Instagram Icon" class="icons">
				</div>
				<div class="cell large-6 medium-6 logo_box">
					<svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 581.34 116.56">
						<defs>
							<style>
							.logo_colour {
								fill: #cabc3c;
							}
							</style>
						</defs>
						<g id="Layer_2" data-name="Layer 2">
							<g id="Layer_1-2" data-name="Layer 1">
							<g id="papillon">
								<path id="p" class="logo_colour" d="M22,2.32c19.54,0,29.8,10.43,29.8,31.79,0,22.35-12.25,33.78-32.45,33.78H14.24v46.52H0V2.32ZM19.21,64.9c10.43,0,16.89-9.76,16.89-30.3S30.3,5.3,19.37,5.3H14.24V64.9Z"/>
								<path id="a" class="logo_colour" d="M105.47,76.16H79.15l-8.61,38.25H67.06L90.73,9.77,89.08,2.32h14.73l24.84,112.09H113.92Zm-.66-3-12.42-56-12.58,56Z"/>
								<path id="p-2" data-name="p" class="logo_colour" d="M178.16,2.32c19.54,0,29.8,10.43,29.8,31.79,0,22.35-12.25,33.78-32.45,33.78h-5.13v46.52H156.14V2.32ZM175.34,64.9c10.44,0,16.89-9.76,16.89-30.3S186.44,5.3,175.51,5.3h-5.13V64.9Z"/>
								<path id="i" class="logo_colour" d="M236.61,114.41V2.32h14.24V114.41Z"/>
								<path id="l" class="logo_colour" d="M334.63,114.41h-49V2.32h14.24V111.43h34.77Z"/>
								<path id="l-2" data-name="l" class="logo_colour" d="M409.47,114.41h-49V2.32H374.7V111.43h34.77Z"/>
								<path id="o" class="logo_colour" d="M495.07,58.12c0,38.41-12.09,58.44-34.94,58.44-23,0-35.1-19.87-35.1-58.11C425,20,437.28,0,460.47,0,483.15,0,495.07,19.87,495.07,58.12ZM440.6,58c0,36.59,6.62,55.63,19.53,55.63,12.75,0,19.38-18.38,19.38-55S472.88,3,460,3,440.6,21.86,440.6,58Z"/>
								<path id="n" class="logo_colour" d="M581.34,2.32V114.41H566.6L529.84,20v94.38h-3.31V12.75L522.39,2.32h15.07L578,105.64V2.32Z"/>
							</g>
							</g>
						</g>
						</svg>

				</div>
				<div class="cell large-3 medium-3 main_icons">
					<img src="/assets/img/search.png" alt="Search Icon" class="icons">
					<img src="/assets/img/account.png" alt="Account Icon" class="icons">
					<img src="/assets/img/cart.png" alt="Cart Icon" class="icons">
				</div>				
				<div class="cell large-12 medium-12 navigation">
					<ul class="nav_list vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
						<li class="nav_item">What's New</li>
						<li class="nav_item">Women</li>
						<li class="nav_item">Men</li>
						<li class="nav_item">Kids</li>
						<li class="nav_item">Handbags</li>
						<li class="nav_item">Fragerance</li>
						<li class="nav_item">Accessories</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$pappilon_theme_description = get_bloginfo( 'description', 'display' );
			if ( $pappilon_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pappilon_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pappilon-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
