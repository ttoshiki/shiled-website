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
		<div class="contact">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto" id="effect_01">CONTACT</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/contact/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <div class="contact__inner">
        <section class="contact__lead">
          <p class="contact__leadParagraph">
            お問い合わせフォームからご連絡ください。ご記入されましたら【送信】ボタンをクリックしてください。<br>
            送信後に確認メールをお送りしています。届かない場合は、お手数ですがxxx@xxx.xxxまでお問い合わせ内容をお送りください。
          </p>
        </section>
        <?php while (have_posts()) : ?>
				<?php
          the_post();
          the_content();
          endwhile;
        ?>
        <div class="contact__privacy">
          <h2 class="contact__privacyHeading">個人情報の取り扱いについて</h2>
          <ul class="contact__privacyList">
            <li class="contact__privacyItem">
              ご入力いただいた個人情報は、下記の個人情報の取扱いの内容に従い管理いたします。<br>
              必要な項目をご入力いただけない場合、適切な対応ができない場合がありますのでご了承ください。
            </li>
            <li class="contact__privacyItem">
              入力された情報は、以下に示す目的で利用させていただき、他の用途には利用いたしません。<br>
              <ul>
                <li>資料の送付</li>
                <li>お問い合わせ、ご相談への対応</li>
              </ul>
            </li>
            <li class="contact__privacyItem">
              「個人情報の第三者への提供」「個人情報の取扱い業務の委託」「個人情報提供の任意性」「個人情報の開示・提供・削除について」等、個人情報の取り扱いに関する詳細については、以下の<a href="https://www.terracom.co.jp/information/privacy_policy.html">「プライバシーポリシー」</a>ページを参照してください。
            </li>
          </ul>
        </div>
      </div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
