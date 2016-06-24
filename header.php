<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://s.mlcdn.co/animate.css">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>


<div id="slidenav-wrap">

	<!-- The Slide Nav -->
	<?php wp_nav_menu(
		array(
			'theme_location' 	=> 'slide-nav',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'slidenav',
			'menu_class' 		=> 'nav navbar-nav',
			'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
			'menu_id'			=> 'main-menu',
			'walker' 			=> new wp_bootstrap_navwalker()
		)); ?>

</div>

<div id="tf-slide-nav">

	<div class="container nopad">
		<div class="row">
			<div class="col-xs-12">

				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<i class="fa fa-rocket"></i>&nbsp; quikstart
				</a>

				<!-- <ul class="tk-main-areas nav navbar-nav">
					<li id="" class="<?php if( is_page_template('themes-plugins.php') ) { echo 'active current-menu-item'; } ?>"><a href="<?php echo home_url(); ?>/products">Themes &amp; Plugins</a></li>
					<li id="" class="<?php if( is_page_template('buddyforms.php') ) { echo 'active current-menu-item'; } ?>"><a href="<?php echo home_url(); ?>/buddyforms">BuddyForms</a></li>
					<li id="" class="<?php if( is_page_template('custom-work.php') ) { echo 'active current-menu-item'; } ?>"><a href="<?php echo home_url(); ?>/wordpress-custom-development-design">Custom Work</a></li>
				</ul> -->

			</div>
		</div>
	</div>

	<a class="tk-cart-nav" href="/checkout/">
			<i class="fa fa-shopping-cart"></i>
	</a>
	<a class="tf-burger">
			<span></span>
	</a>


</div>

<div id="sitewrap">

<header id="masthead" class="site-header">


	<div id="topnav">
		<div class="container nopad">
			<div class="row">
				<div class="col-xs-12">

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<i class="fa fa-rocket"></i>&nbsp; quikstart
					</a>

					<div class="tk-menu-group">

						<!-- The Primary Nav - Top Nav -->
						<?php wp_nav_menu(
							array(
								'theme_location' 	=> 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => '',
								'menu_class' 		=> 'nav navbar-nav',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'menu_id'			=> 'main-menu',
								'walker' 			=> new wp_bootstrap_navwalker()
							)
						); ?>

					</div>

				</div>
			</div>
		</div>
	</div>

</header><!-- #masthead -->

<?php do_action( 'tk_after_header' ); ?>

<div id="mainwrap">
