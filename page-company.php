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
        <h1 class="l-mainVisualHeading roboto">COMPANY</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/company/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <section class="company__lead fadein">
        <div class="company__leadInner">
          <h2 class="company__leadHeading">暮らしに、安堵を。</h2>
          <p class="company__leadParagraph">
            ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
            ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。<br>
          </p>
          <p class="company__leadParagraph">
            ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト 。
          </p>
        </div>
      </section>
      <section class="company__message">
        <div class="company__messageInner fadein">
          <h2 class="company__messageHeading roboto">MESSAGE</h2>
          <div class="company__messageContents">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/president.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/president.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/company/president@2x.jpg 2x" alt="" class="">
            <div class="company__messageText">
              <h3 class="company__messageSubHeading">ダミーテキスト<br>ダミーテキストダミー。</h3>
              <p class="company__messageParagraph">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
              <p class="company__messageParagraph">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
              <p class="company__messagePresidentName">
                代表　お名前
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="company__overview">
        <h2 class="company__overviewHeading roboto">COMPANY</h2>
        <dl>
          <div class="company__overviewRow">
            <dt>会社名</dt>
            <dd>&SHIELD</dd>
          </div>
          <div class="company__overviewRow">
            <dt>代表者</dt>
            <dd>代表者お名前</dd>
          </div>
          <div class="company__overviewRow">
            <dt>所在地</dt>
            <dd>◯◯県◯◯◯市◯◯◯◯◯◯◯◯◯◯</dd>
          </div>
          <div class="company__overviewRow">
            <dt>事業内容</dt>
            <dd>ダミーテキストダミーテキストダミーテキスト</dd>
          </div>
          <div class="company__overviewRow">
            <dt>設立</dt>
            <dd>0000年00月</dd>
          </div>
        </dl>
      </section>
      <section class="c-banners">
        <div>
          <a href="<?php echo home_url('/product/') ?>" class="c-banner__link">
            <div class="c-banner">
                <h2 class="c-banner__heading">PRODUCTS</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/banner01.jpg" alt="" class="c-banner">
            </div>
          </a>
        </div>
        <div>
          <a href="<?php echo home_url('/service/') ?>" class="c-banner__link">
            <div class="c-banner">
              <h2 class="c-banner__heading">SERVICE</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/banner02.jpg" alt="" class="c-banner">
            </div>
          </a>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
