<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHIELD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header roboto<?php if (is_singular('product')) { echo ' products'; } else if (is_front_page()) { echo ' home'; } ?>">
		<div class="header__hammenu -sp">
			<?php
				the_custom_logo();
			?>
			<span class="header__trigger" href="#" @click="toggleMenu" id="trigger">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<div class="header__hammenuWrapper">
				<div class="header__hammenuInner">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary'
						));
					?>
					<a href="<?php echo home_url('/contact/'); ?>" class="header__hammenuConversion contact">
						お問い合わせ
					</a>
				</div>
			</div>
		</div>
		<nav class="header__nav -pc<?php if (!is_front_page()) { echo ' -hasLogo'; } ?>">
			<?php
				the_custom_logo();
			?>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary'
				));
			?>
		</nav>
	</header>