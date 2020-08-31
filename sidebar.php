<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHIELD
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<a href="<?php echo home_url('/download/') ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/banner.jpg" alt="" class="sidebar-banner -pc">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/banner-sp.jpg" alt="" class="sidebar-banner -sp">
	</a>
</aside><!-- #secondary -->
