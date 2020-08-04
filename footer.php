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

	<footer class="site-footer">
		<div class="footer__links">
			<div>
				<h3>フォームからお問い合わせ</h3>
				<a href="<?php echo home_url('/contact/'); ?>">お問い合わせはこちら</a>
			</div>
			<div>
				<h3>電話でのお問い合わせ</h3>
				<small>営業時間 ／ 9:00〜18:00</small>
				<address>TEL 03-0000-0000</address>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png, <?php echo get_template_directory_uri(); ?>/assets/img/logo_dark@2x.png 2x" alt="">
		<nav class="footer__nav">
			<?php
        wp_nav_menu(array(
          'theme_location' => 'primary'
        ));
      ?>
		</nav>
		<div class="footer__companyInfo">
			<div class="footer__companyOverview">
				<span class="footer__companyName">株式会社&SHIELD</span>
				<address class="footer__companyAddress">〒000-0000 東京都港区南青山1-1-1</address>
			</div>
			<p class="footer__companyText">私たちは新しい公衆衛生の視点でさまざまな角度からモノやコトを創造していきます。あなたの大切な人を守るために。&SHIELDの製品やサービスについてのお問い合わせは、お気軽にご連絡ください。</p>
		</div>
		<div class="footer__compnayCopyright">
			<small>© &SHIELD All Rights Reserved</small>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
