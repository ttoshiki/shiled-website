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
      <section class="company__mainVisual">
        <h1 class="company__mainVisualHeading">COMPANY</h1>
      </section>
      <section class="company__lead">
        <h2 class="company__leadHeading">暮らしに、安堵を。</h2>
        <p class="copmany__leadParagraph">
          ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
          ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
        </p>
        <p class="copmany__leadParagraph">
          ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。
        </p>
      </section>
      <section class="company__mesasge">
        <h2 class="company__messageHeading">MESSAGE</h2>
        <h3 class="company__messageSubHeading">ダミーテキスト<br>ダミーテキストダミー。</h3>
        <p class="comapny__messageParagraph">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
        <p class="comapny__messageParagraph">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
        <p class="comapny__messageParagraph">
          代表　お名前
        </p>
      </section>
      <section class="company__overview">
        <h3 class="company__overviewHeading">COMPANY</h3>
        <dl>
          <dt>会社名</dt>
          <dd>&SHIELD</dd>
          <dt>代表者</dt>
          <dd>代表者お名前</dd>
          <dt>所在地</dt>
          <dd>◯◯県◯◯◯市◯◯◯◯◯◯◯◯◯◯</dd>
          <dt>事業内容</dt>
          <dd>ダミーテキストダミーテキストダミーテキスト</dd>
          <dt>設立</dt>
          <dd>0000年00月</dd>
        </dl>
      </section>
      <section class="c-banners">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/banner01.jpg" alt="" class="c-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/banner02.jpg" alt="" class="c-banner">
      </section>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
