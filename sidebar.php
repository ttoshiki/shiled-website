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
	<!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/banner.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/news/banner.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/news/banner@2x.jpg 2x" alt="" class="sidebar-banner"></a> -->
</aside><!-- #secondary -->
