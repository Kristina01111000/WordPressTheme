<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- this is all going to match the header in the other files soon-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>

		<!-- HEADER =========================
			doesnt really need to change in php except for the nav menu -->
		<header class = "site-header" role= "banner">
			<div class="navbar-wrapper fixed-top">
				<div class="navbar navbar-inverse navbar-dark bg-dark navbar-expand-lg fixed-top" role="navigation">
					<div class="container">
					<a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
						<div class="navbar-header">
							<button type="button" class="navbar-toggler bg-dark " type="button" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="navbar-toggler-icon bg-dark float-right"></span>
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span><!-- gives the lines on the button -->
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php 
							// drop down does not work
							$args = array(
								'theme-location' 	=> 'primary',
								'container'		=> 'nav',
								'container-class'	=> 'navbar-collapse collapse',
								'menu-class' 		=> 'nav navbar-nav navbar-right ml-auto'
							);
							wp_nav_menu($args);
						?>
					</div>
				</div>
			</div><
		</header>	
