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
			<nav role="navigation">
				<h2>Main Navigation</h2>
				<ul class="clearfix">
					<li><a href="">PROJECTS</a></li>
					<li><a href="">ABOUT US</a></li>
					<li><a href="">WHAT WE DO</a></li>
					<li><a href="">CONTACT US</a></li>
				</ul>
			</nav><!-- #site-navigation -->
			<hr>
		</div><!-- .wrapper -->
	</header><!-- .main-header -->

	<div id="content" class="site-content">
