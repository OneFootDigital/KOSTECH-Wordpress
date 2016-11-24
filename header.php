<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kostech
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Kostech</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kostech' ); ?></a>

	<header class="main-header">
		<div class="wrapper clearfix">
			<h2 class="logo">Kostech</h2>
			<img src="<?php echo(get_template_directory_uri()); ?>//images/logo-Kostech.png">
			<nav role="navigation" class="nav">
				<a id="menu-toggle" class="anchor-link" href="">&#9776;</a>
				<h2>Main Navigation</h2>
				<ul id="menu" class="clearfix simple-toggle">
					<li><a href="#page">PROJECTS</a></li>
					<li><a href="#about-us">ABOUT US</a></li>
					<li><a href="#culture">WHAT WE DO</a></li>
					<li><a href="#contact">CONTACT US</a></li>
				</ul>
			</nav><!-- #site-navigation -->
			<hr>
		</div><!-- .wrapper -->
	</header><!-- .main-header -->

	<div id="content" class="site-content">
