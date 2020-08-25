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
        <h1 class="l-mainVisualHeading roboto" id="effect_01">COMPANY</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/company/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <section class="company__lead fadein">
        <div class="company__leadInner">
          <h2 class="company__leadHeading"><span id="effect_02">暮らしに、安堵を。</span></h2>
          <p class="company__leadParagraph fadein">
            &SHIELDのミッションは「守る」ことです。<br>
            私たちのシンボルであるロゴマークは、盾を意味する「SHIELD」と、ミッションである「守る」の漢字からデザインしています。
          </p>
          <p class="company__leadParagraph fadein">
            日々の暮らしや企業の役に立つ衛生関連情報やサービスを提供することで、皆様と皆様にとって大切な人を様々なリスクの不安からお守りしたいと考えております。
          </p>
        </div>
      </section>
      <section class="company__message">
        <div class="company__messageInner">
          <h2 class="company__messageHeading roboto"><span id="effect_03">MESSAGE</span></h2>
          <div class="company__messageContents fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/president.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/president.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/company/president@2x.jpg 2x" alt="" class="">
            <div class="company__messageText">
              <h3 class="company__messageSubHeading">大切な人を「守る」存在でありたい</h3>
              <p class="company__messageParagraph">
                &SHIELDは「社員とその家族を守りたい」、その想いから始まりました。
              </p>
              <p class="company__messageParagraph">
                新型コロナウイルスが世界的に拡がりを見せ、日々不安を抱え、働く社員を目の当たりにし、少しでも社員とその家族の不安を解消できることが無いか模索いたしました。その中で世の中の衛生関連商品を適切に取り扱い、使用することがリスクから守るということにたどり着きました。皆様が様々なリスクから自分や大切な人を「守る」。そのための高品質なサービスや商品を誠意を持って提供いたします。
              </p>
              <p class="company__messagePresidentName">
                代表　佐藤　渉
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="company__overview">
        <h2 class="company__overviewHeading roboto"><span id="effect_04">COMPANY</span></h2>
        <dl>
          <div class="company__overviewRow">
            <dt>会社名</dt>
            <dd>株式会社AND SHIELD（通称：&SHIELD）</dd>
          </div>
          <div class="company__overviewRow">
            <dt>代表</dt>
            <dd>代表取締役社長　佐藤　渉</dd>
          </div>
          <div class="company__overviewRow">
            <dt>本社所在地</dt>
            <dd>〒221-0832　神奈川県横浜市神奈川区桐畑3-6 TERRAビル</dd>
          </div>
          <div class="company__overviewRow">
            <dt>電話番号</dt>
            <dd>045-323-4610</dd>
          </div>
          <div class="company__overviewRow">
            <dt>設立</dt>
            <dd>1989年6月</dd>
          </div>
          <div class="company__overviewRow">
            <dt>事業内容</dt>
            <dd>ソリューション事業、モバイルショップ事業、アクセサリー事業、法人アプリ事業、モバイル関連各種事業開発</dd>
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
