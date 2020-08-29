<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHIELD
 */

?>

	<footer class="footer">
		<?php if ((!is_page('service'))): ?>
			<div class="footer__links">
				<div class="footer__linksBlock">
					<div class="footer__linksBlockInner">
						<h3 class="footer__linkHeading">フォームからお問い合わせ</h3>
						<a href="<?php echo home_url('/contact/'); ?>" class="footer__linkButton">お問い合わせはこちら</a>
					</div>
				</div>
				<div class="footer__linksBlock">
					<div class="footer__linksBlockInner">
						<h3 class="footer__linkHeading">電話でのお問い合わせ</h3>
						<small class="footer__businessHours">営業時間 ／ 9:00〜18:00（土日祝日を除く)</small>
						<address class="footer__address">TEL 045-323-4610</address>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png, <?php echo get_template_directory_uri(); ?>/assets/img/logo_dark@2x.png 2x" alt="" class="footer__logo">
		<nav class="footer__nav">
			<?php
        wp_nav_menu(array(
					'theme_location' => 'primary',
					'container_class' => 'menu-primary-container',
        ));
        wp_nav_menu(array(
					'theme_location' => 'footer',
					'container_class' => 'menu-footer-container',
        ));
      ?>
		</nav>
		<div class="footer__companyInfo">
			<div class="footer__companyOverview">
				<span class="footer__companyName">株式会社テラ &SHIELD事業部</span>
				<address class="footer__companyAddress">〒221-0832　神奈川県横浜市神奈川区桐畑3-6 TERRAビル</address>
			</div>
			<p class="footer__companyText">私たちは新しい公衆衛生の視点でさまざまな角度からモノやコトを創造していきます。あなたの大切な人を守るために。&SHIELDの製品やサービスについてのお問い合わせは、お気軽にご連絡ください。</p>
		</div>
		<div class="footer__companyCopyrightWrapper">
			<small class="footer__companyCopyright">© &SHIELD All Rights Reserved</small>
		</div>
		<?php if (!is_singular('product')): ?>
			<aside class="fixedMenu">
				<a href="<?php echo home_url('/contact/'); ?>" class="fixedMenu__link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble.png, <?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_speech-bubble@2x.png 2x" alt="吹き出し" class="fixedMenu__icon">
					お問い合わせ
				</a>
				<a href="<?php echo home_url('/download/'); ?>" class="fixedMenu__link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download.png, <?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_download@2x.png 2x" alt="ダウンロード" class="fixedMenu__icon">
					資料ダウンロード
				</a>
			</aside>
		<?php endif; ?>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
