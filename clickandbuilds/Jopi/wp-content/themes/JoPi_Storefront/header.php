<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">

		
		<nav class="navbar navbar-light bg-secondary navbar-toggleable-sm navbar-full fixed-top sps" style="<?php if (is_admin_bar_showing())echo 'margin-top:28px !important'  ?>">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarDflt" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<div class="bodymovin" style="width:30px;height:30px;" id="menu_btn"></div>
			</button>
			<a class="navbar-brand" href="http://demo.jopi.com.mx"> <img src="https://jopi.com.mx/img/jopi_logo.svg" alt="" width="42" height="40"> </a>
			<div class="collapse navbar-collapse" id="navbarDflt">
				<ul class="navbar-nav ml-auto text-center">
					<li class="nav-item"></li>
					<li class="nav-item"> </li>
					<li class="nav-item"> </li>
					<li class="nav-item mr-2"><a class="nav-link" href="#">Reportar un incidente</a>
					</li>
				</ul>

				<!--link forma de contacto-->
				<form action="https://app.jopi.com.mx/mi-cuenta" class="form-inline align-content-center">
					<button class="btn nav-btn mx-auto"> Iniciar sesión <i class="fa fa-lg fa-user-circle-o"></i> </button>
				</form>
			</div>
		</nav>
			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
