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

	<header id="masthead" class="site-header">
		<div class="nav">
			<div class="grid-x">
				<div class="cell large-3 medium-3 show-for-large-up hide-for-medium-only hide-for-small-only main_icons">
					<a href="https://www.twitter.com">
						<svg class="icons" id="twitter" viewBox="0 -47 512.00004 512" xmlns="http://www.w3.org/2000/svg"><path d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
						</svg>
					</a>
					<a href="https://www.facebook.com">
						<svg class="icons" id="facebook" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
					</a>
					<a href="https://www.instagram.com">
						<svg class="icons" id="instagram" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510.9 511"><path d="M510.5,150.24c-1.2-27.16-5.59-45.82-11.88-62a130.86,130.86,0,0,0-74.77-74.76C407.58,7.19,389,2.8,361.86,1.6,334.51.3,325.83,0,256.45,0S178.39.3,151.13,1.5s-45.81,5.59-62,11.87A124.84,124.84,0,0,0,43.82,42.92,125.81,125.81,0,0,0,14.37,88.15C8.08,104.42,3.69,123,2.5,150.13,1.2,177.49.9,186.17.9,255.55s.3,78.06,1.49,105.31,5.6,45.82,11.89,62a125.86,125.86,0,0,0,29.54,45.32A125.75,125.75,0,0,0,89,497.62c16.28,6.29,34.84,10.68,62,11.88S187,511,256.35,511s78.06-.3,105.31-1.5,45.82-5.59,62-11.88a130.68,130.68,0,0,0,74.77-74.76c6.29-16.28,10.68-34.84,11.88-62s1.5-35.93,1.5-105.31S511.7,177.49,510.5,150.24Zm-46,208.63c-1.1,24.95-5.29,38.43-8.78,47.41a84.78,84.78,0,0,1-48.52,48.52c-9,3.49-22.56,7.69-47.41,8.78-27,1.2-35,1.5-103.22,1.5s-76.37-.3-103.22-1.5c-25-1.09-38.43-5.29-47.42-8.78a78.44,78.44,0,0,1-29.34-19.07A79.32,79.32,0,0,1,57.5,406.39c-3.5-9-7.69-22.57-8.78-47.42-1.21-27-1.5-35-1.5-103.22s.29-76.37,1.5-103.22c1.09-25,5.28-38.43,8.78-47.41A77.56,77.56,0,0,1,76.67,75.76,79.34,79.34,0,0,1,106,56.7c9-3.49,22.57-7.68,47.42-8.78,26.95-1.2,35-1.5,103.22-1.5s76.36.3,103.22,1.5c24.95,1.1,38.43,5.29,47.41,8.78a78.58,78.58,0,0,1,29.35,19.06,79.44,79.44,0,0,1,19.07,29.36c3.49,9,7.68,22.55,8.78,47.41,1.2,26.95,1.5,35,1.5,103.22S465.68,331.92,464.48,358.87Z" transform="translate(-0.9 0)"/> <path d="M256.45,124.28A131.27,131.27,0,1,0,387.72,255.55,131.31,131.31,0,0,0,256.45,124.28Zm0,216.42a85.15,85.15,0,1,1,85.15-85.15A85.16,85.16,0,0,1,256.45,340.7Z" transform="translate(-0.9 0)"/><path d="M423.56,119.09a30.65,30.65,0,1,1-30.65-30.64A30.66,30.66,0,0,1,423.56,119.09Z" transform="translate(-0.9 0)"/>
						</svg>
					</a>
				</div>
				<div class="cell large-6 medium-6 small-4 logo_box">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 581.34 116.56">
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
					</svg></a>
				</div>
				<div class="cell small-1 show-for-small-only"></div>
				<div class="cell large-3 medium-5 main_icons when_small small-7 ">
					<svg  class="icons" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="310.42px" height="310.42px" viewBox="0 0 310.42 310.42" style="enable-background:new 0 0 310.42 310.42;"
						xml:space="preserve">
						<g>
							<path d="M273.587,214.965c49.11-49.111,49.109-129.021,0-178.132c-49.111-49.111-129.02-49.111-178.13,0
								C53.793,78.497,47.483,140.462,76.51,188.85c0,0,2.085,3.498-0.731,6.312c-16.065,16.064-64.263,64.263-64.263,64.263
								c-12.791,12.79-15.836,30.675-4.493,42.02l1.953,1.951c11.343,11.345,29.229,8.301,42.019-4.49c0,0,48.096-48.097,64.128-64.128
								c2.951-2.951,6.448-0.866,6.448-0.866C169.958,262.938,231.923,256.629,273.587,214.965z M118.711,191.71
								c-36.288-36.288-36.287-95.332,0.001-131.62c36.288-36.287,95.332-36.288,131.619,0c36.288,36.287,36.288,95.332,0,131.62
								C214.043,227.996,155,227.996,118.711,191.71z"/>
							<g>
								<path d="M126.75,118.424c-1.689,0-3.406-0.332-5.061-1.031c-6.611-2.798-9.704-10.426-6.906-17.038
									c17.586-41.559,65.703-61.062,107.261-43.476c6.611,2.798,9.704,10.426,6.906,17.038c-2.799,6.612-10.425,9.703-17.039,6.906
									c-28.354-11.998-61.186,1.309-73.183,29.663C136.629,115.445,131.815,118.424,126.75,118.424z"/>
							</g>
						</g>
					</svg>
					
					<a href="<?php echo esc_url( content_url( '/my-account' ) ); ?>" rel="my-account"><svg version="1.1" id="account" class="icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
						<g>
							<g id="account-circle">
								<path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
									c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
									c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z"/>
							</g>
						</g>
					</svg></a>
					<a href="<?php echo esc_url( content_url( '/cart' ) ); ?>" rel="cart"><svg id="cart" class="icons" height="512pt" viewBox="0 -31 512.00033 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"/>
					</svg></a>
					<svg id="nav" class="icons hide-for-large-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 231 188">
						<g id="navigation" data-name="Layer 2">
							<g id="ham_nav">
								<rect id="bottom_bar" class="cls-1" y="76" width="231" height="34"/>
								<rect id="middle_bar" class="cls-1" y="154" width="231" height="34"/>
								<rect id="top_bar" class="cls-1" width="231" height="34"/>
							</g>
						</g>
					</svg>
				</div>				
				<div class="cell large-12 medium-12 navigation hide-for-medium-up">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sample-theme' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
