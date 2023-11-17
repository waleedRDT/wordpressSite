<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dwelio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="inner">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>	

				<!-- desktop menu -->
				<nav id="site-navigation" class="navbar__wrap d-lg-block d-none">
					<?php	
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav>
				
				<div class="header__cta">
					<a href="#" class="header__cta--btn">Contact Us</a>
				</div>
				
				<!-- <div class="searchbar d-lg-block d-none">
					<button class="search__btn">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1922 12.6064C10.0236 13.4816 8.5723 14 7 14C3.13401 14 0 10.866 0 7C0 3.13401 3.13401 0 7 0C10.866 0 14 3.13401 14 7C14 8.5723 13.4816 10.0236 12.6064 11.1922L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L11.1922 12.6064ZM12 7C12 9.7614 9.7614 12 7 12C4.23858 12 2 9.7614 2 7C2 4.23858 4.23858 2 7 2C9.7614 2 12 4.23858 12 7Z" fill="#333333"/>
						</svg>
					</button>
				</div> -->
				<button id="mobile__menu--button" class="mobile-menu-button--collapse d-lg-none" type="button">
					<span class="mobile-menu-button-box">
						<span class="mobile-menu-button-inner"></span>
					</span>
				</button>
			</div>
		</div>

		<!-- mobile menu -->
		<nav id="mobile__menu" class="mob__menu d-lg-none">
			<div class="container">
				<?php	
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>

				<div class="header__cta">
					<a href="#" class="header__cta--btn">Get Quote</a>
				</div>

				<!-- <div class="searchbar__mob">
					<form action="">
						<div class="form__item">
							<input type="text" placeholder="Search">
							<button class="search__cta">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9ZM10.7593 4.84921C10.3998 4.42988 9.7685 4.38132 9.3492 4.74074C8.92988 5.10017 8.88132 5.73147 9.2407 6.15079L10.8258 8H5C4.44772 8 4 8.44772 4 9C4 9.5523 4.44772 10 5 10H10.8258L9.2407 11.8492C8.88132 12.2685 8.92988 12.8998 9.3492 13.2593C9.7685 13.6187 10.3998 13.5701 10.7593 13.1508L13.7593 9.6508C14.0802 9.2763 14.0802 8.7237 13.7593 8.34921L10.7593 4.84921Z" fill="#404726"/>
								</svg>
							</button>
						</div>
					</form>
				</div> -->
			</div>
		</nav>
		
	</header><!-- #masthead -->
