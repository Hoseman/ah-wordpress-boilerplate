<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AH_Wordpress_Boilerplate
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


<!-- Header -->
<header class="header">
	<section class="header__layout header__container">

		<?php the_custom_logo(); ?>

		<button class="toggle">
			<span class="toggle__line"></span>
		</button>

		<nav class="navigation">
		<?php wp_boilerplate_header_menu(); ?>
		</nav>
	</section>
</header>
<!-- End Header -->
