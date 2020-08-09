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
	<header id="header" class="header roboto">
		<nav class="header__nav">
			<?php
        wp_nav_menu(array(
          'theme_location' => 'primary'
        ));
      ?>
		</nav>
	</header><!-- #page -->
	<aside class="fixedMenu">
		<a href="<?php echo home_url('/contact/'); ?>" class="fixedMenu__link">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble.png, <?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble@2x.png 2x" alt="吹き出し" class="fixedMenu__icon">
			お問い合わせ
		</a>
		<a href="<?php echo home_url('/contact/'); ?>" class="fixedMenu__link">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download.png, <?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download@2x.png 2x" alt="ダウンロード" class="fixedMenu__icon">
			資料ダウンロード
		</a>
	</aside>
