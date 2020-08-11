<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SHIELD
 */

get_header();
?>

	<main class="site-main">
		<div class="company">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto">CONTACT</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/contact/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <section class="contact__lead">
        <div class="contact__leadInner">
          <h2 class="contact__leadHeading">暮らしに、安堵を。</h2>
          <p class="contact__leadParagraph">
            ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
            ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
          </p>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
