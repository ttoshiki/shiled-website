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
            送信後に確認メールをお送りしています。届かない場合は、お手数ですがxxx@xxx.xxxまでお問い合わせ<br>
            内容をお送りください。
          </p>
        </section>
        <?php while (have_posts()) : ?>
				<?php
          the_post();
          the_content();
          endwhile;
        ?>
        <div class="contact__privacy">
          <h2 class="contact__privacyHeading">プライバシーポリシー</h2>
          <div class="contact__privacyBlock">
            <h3 class="contact__privacySubHeading">第1条（個人情報）</h3>
            <p class="contact__privacyParagraph">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
          </div>
          <div class="contact__privacyBlock">
            <h3 class="contact__privacySubHeading">第1条（個人情報）</h3>
            <p class="contact__privacyParagraph">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
          </div>
        </div>
      </div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
