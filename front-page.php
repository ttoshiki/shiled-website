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
		<div class="home">
			<?php
				echo do_shortcode('[rev_slider alias="shield"][/rev_slider]');
			?>
			<section class="home__leadContents">
				<div class="home__leadContentsText">
					<h2 class="home__leadContentsHeading"><span id="effect_01">暮らしに、安堵を。</span></h2>
					<p class="home__leadContentsParagraph">
						私たちは、新しい公衆衛生の視点で<br>
						さまざまな角度からモノやコトを創造していきます。
					</p>
					<p class="home__leadContentsParagraph">
						大切なものを守るために。<br>
						PROTECT YOUR LIFE
					</p>
					<a href="<?php echo home_url('/company/') ?>" class="home__leadContentsButton c-btn"><span class="c-btn__text">& SHIELDについて</span></a>
				</div>
				<div class="home__leadContentsPhotos fadein">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo01@2x.jpg 2x" alt="">
					<div class="home__leadContentsPhotos -lower">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo02@2x.jpg 2x" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo03.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo03@2x.jpg 2x" alt="">
					</div>
				</div>
			</section>
			<section class="home__siteLinks">
				<div class="home__siteLink service fadein">
					<span class="home__siteLinksTitleEn roboto">SERVICE</span>
					<h2 class="home__siteLinksTitle">除菌清掃サービス</h2>
					<p class="home__siteLinksParagraph">細菌やウイルスによる被害を拡大しない為に、<br>除菌清掃サービスをご提供しております。</p>
					<a href="<?php echo home_url('/service/') ?>" class="c-btn"><span class="c-btn__text">サービスについて</span></a>
				</div>
				<div class="home__siteLink product fadein">
					<span class="home__siteLinksTitleEn roboto">PRODUCTS</span>
					<h2 class="home__siteLinksTitle">除菌製品のご紹介</h2>
					<p class="home__siteLinksParagraph">ご家庭に置きたくなる、使いたくなる<br>デザイン性の高い除菌製品をご用意しております。</p>
					<a href="<?php echo home_url('/product/') ?>" class="c-btn"><span class="c-btn__text">製品について</span></a>
				</div>
			</section>
			<section class="home__news">
					<h2 class="home__newsHeading roboto"><span id="effect_02">NEWS</span></h2>
					<?php if (have_posts()): ?>
						<ul class="home__newsList">
							<?php while (have_posts()) : the_post(); ?>
								<li class="home__newsItem">
									<a href="<?php the_permalink(); ?>" class="home__newsLink">
										<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="home__newsDate"><?php echo get_the_date('Y.m.d'); ?></time>
										<h3 class="home__newsItemHeading"><?php echo get_the_title(); ?></h3>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php else: ?>
						<!-- 投稿が無い場合の処理 -->
					<?php endif; ?>
					<div class="home__newsButton">
						<a href="<?php echo home_url('/news/') ?>" class="c-btn"><span class="c-btn__text">ニュース一覧はこちら</span></a>
					</div>
			</section>
			<section class="home__footerVisual fadein">
				<h2 class="home__footerVisualHeading"><span id="effect_03">PROTECT YOUR LIFE</span></h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/footer_visual.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/footer_visual.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/footer_visual@2x.jpg 2x" alt="" class="home__footerVisualImage">
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
