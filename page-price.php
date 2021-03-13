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
		<div class="price">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto" id="effect_01">PRICE</h1>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/mv.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
        </picture>
      </section>
      <section class="price__lead">
        <div class="price__leadContents">
          <picture class="price__leadPicture fadein">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/price_01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/price_01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/price_01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/price/price_01@2x.jpg 2x" alt="">
          </picture>
          <div class="price__leadText fadein">
            <h2 class="price__heading"><span id="effect_02">施工料金について</span></h2>
            <p class="price__leadParagraph">
              私たちは、お客様のオフィス、事業所、<br>設備や施設の規模や特徴に合わせ<br>最適な料金をご提示させていただいております。
            </p>
            <p class="price__leadParagraph">
              お気軽にお問い合わせください。
            </p>
          </div>
        </div>
      </section>
      <section class="price__info">
        <div class="price__infoInner">
          <h2 class="price__heading -center"><span id="effect_03">施工料金のご案内</span></h2>
          <div class="price__infoContents fadein">
            <div class="price__infoPictures">
              <picture class="price__infoPicture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/info_01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/info_01.jpg" alt="" class="service__infoImage">
              </picture>
              <picture class="price__infoPicture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/info_02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/info_02.jpg" alt="" class="service__infoImage">
              </picture>
            </div>
            <div class="price__tableWrapper fadein">
              <h3 class="price__tableHeading">料金表</h3>
              <table class="priceTable -price">
                <thead>
                  <tr>
                    <th colspan="2">中型オフィス ／ 小型店舗</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>床面積目安</td>
                    <td>151〜700㎡</td>
                  </tr>
                  <tr>
                    <td>施工人数目安</td>
                    <td>2〜3人</td>
                  </tr>
                  <tr>
                    <td>時間目安</td>
                    <td>2〜3時間</td>
                  </tr>
                  <tr>
                    <td><strong>A　除菌・清掃</strong></td>
                    <td><strong>500㎡辺り　250,000円〜（500円／㎡〜）</strong></td>
                  </tr>
                  <tr>
                    <td><strong>B　除菌コート</strong></td>
                    <td><strong>500㎡辺り　250,000円〜（500円／㎡〜）</strong></td>
                  </tr>
                  <tr>
                    <td><strong>A+B　除菌・清掃+除菌コート</strong></td>
                    <td><strong>500㎡辺り　500,000円〜（1,000円／㎡〜）</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <section class="price__scale">
        <h2 class="price__heading -center -scale fadein">各種規模に対応しております。<br>料金についてはお問合わせください</h2>
        <div role="table" class="price__scaleTable fadein">
          <div role="rowgroup" class="price__scaleRowGroup">
            <div role="row" class="price__scaleRow">規模別目安</div>
            <div role="row" class="price__scaleRow">
              <span role="columnheader" class="price__sacleTableColumnHeader">小型オフィス</span>
              <picture class="price__scalePicture -small">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_01.png" alt="" class="service__scaleImage">
              </picture>
            </div>
            <div role="row" class="price__scaleRow">
              <span role="columnheader" class="price__sacleTableColumnHeader">中型オフィス<span class="-pc">／</span><br class="-sp">小型店舗</span>
              <picture class="price__scalePicture -medium">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_02.png" alt="" class="service__scaleImage">
              </picture>
            </div>
            <div role="row" class="price__scaleRow">
              <span role="columnheader" class="price__sacleTableColumnHeader">大型オフィス<span class="-pc">／</span><br class="-sp">大型店舗</span>
              <picture class="price__scalePicture -large">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_03.png" alt="" class="service__scaleImage">
              </picture>
            </div>
            <div role="row" class="price__scaleRow">
              <span role="columnheader" class="price__sacleTableColumnHeader">大型施設</span>
              <picture class="price__scalePicture -xlarge">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price/scale_04.png" alt="" class="service__scaleImage">
              </picture>
            </div>
          </div>
          <div role="rowgroup" class="price__scaleRowGroup">
            <div role="row" class="price__scaleRow">面積目安</div>
            <div role="row" class="price__scaleRow">150㎡</div>
            <div role="row" class="price__scaleRow">151<span class="price__tilde">〜</span>700㎡</div>
            <div role="row" class="price__scaleRow">701<span class="price__tilde">〜</span>1500㎡</div>
            <div role="row" class="price__scaleRow">1501㎡〜</div>
          </div>
          <div role="rowgroup" class="price__scaleRowGroup">
            <div role="row" class="price__scaleRow">施工人数目安</div>
            <div role="row" class="price__scaleRow">1人</div>
            <div role="row" class="price__scaleRow">
              <span>2<span class="-sp price__unit">人</span></span><span class="price__tilde">〜</span>3人
            </div>
            <div role="row" class="price__scaleRow">
              <span>4<span class="-sp price__unit">人</span></span><span class="price__tilde">〜</span>６人
            </div>
            <div role="row" class="price__scaleRow">7人以上</div>
          </div>
          <div role="rowgroup" class="price__scaleRowGroup">
            <div role="row" class="price__scaleRow">施工時間目安</div>
            <div role="row" class="price__scaleRow">〜2時間</div>
            <div role="row" class="price__scaleRow"><span>2<span class="-sp price__unit">時間</span></span><span class="price__tilde">〜</span>3時間</div>
            <div role="row" class="price__scaleRow">3,4時間<span class="-pc">〜</span></div>
            <div role="row" class="price__scaleRow">お見積もり</div>
          </div>
        </div>
      </section>
      <section class="price__case">
        <h2 class="price__heading -center"><span id="effect_04">導入事例</span></h2>
        <div class="swiper-container fadein">
          <div class="price__caseSliderButtons">
            <span class="price__caseSliderButton -next"></span>
            <span class="price__caseSliderButton -prev"></span>
          </div>
					<div class="swiper-wrapper">
						<?php $args = array(
								'posts_per_page'   => 10,
								'post_type' => 'post',
                'category_name' => 'case',
							);
							$my_query = new WP_Query($args);
							if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
						?>
						<div class="swiper-slide">
							<a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
              </a>
							<div class="price__worksMeta">
								<h3 class="price__postTitle">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
                <div class="price__worksMetaFooter">
                  <time datetime="<?php the_date('Y-m-d'); ?>" class="price__postTime roboto"><?php echo get_the_date(); ?></time>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_arrow-right.png" alt="" class="price__worksMetaArrow">
                </div>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
          <div class="swiper-pagination price__sliderPagination"></div>
				</div>
        <div class="price__linksButton">
          <a href="<?php echo home_url('/category/news/case/') ?>" class="c-btn"><span class="c-btn__text">全ての導入事例を見る</span></a>
        </div>
      </section>
      <section class="price__after">
        <h2 class="price__heading -center"><span id="effect_05">施工後の対策</span></h2>
        <p class="price__headingParagraph fadein">施工後も、お客様の空間の安心安全を<br class="-sp">目指すため、<br class="-pc">衛生対策できる商品を揃えております。</p>
        <ul class="price__sectionLinksList fadein">
          <li class="price__sectionLinksItem">
            <a href="#air">空気感染対策</a>
          </li>
          <li class="price__sectionLinksItem">
            <a href="#entrance">入口対策</a>
          </li>
          <li class="price__sectionLinksItem">
            <a href="#contact">接触感染対策</a>
          </li>
          <li class="price__sectionLinksItem">
            <a href="#splash">飛沫感染対策</a>
          </li>
          <li class="price__sectionLinksItem">
            <a href="#other">その他</a>
          </li>
        </ul>
        <?php
          $slide_posts_per_page = 10;
          $display_terms = array(
            'relation' => 'OR',
            array(
              'taxonomy' => 'display_page',
              'field' => 'slug',
              'terms' => 'display_after_construction',
              'operator' => 'IN',
            ),
            array(
              'taxonomy' => 'display_page',
              'field' => 'slug',
              'terms' => array('display_all'),
              'operator' => 'IN',
            ),
          )
        ?>
        <h3 id="air" class="price__subHeading fadein">空気感染対策</h3>
        <div class="price__afterSliderWrapper fadein">
          <span class="price__afterSliderButton -air -prev"></span>
          <span class="price__afterSliderButton -air -next"></span>
          <div id="swiper-air-container" class="price__afterSliderContainer">
            <div class="swiper-wrapper">
              <?php $args = array(
                  'posts_per_page'   => $slide_posts_per_page,
                  'post_type' => 'product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',
                      'field' => 'slug',
                      'terms' => 'air',
                      'operator' => 'IN'
                    ),
                    $display_terms
                  )
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
              ?>
              <?php get_template_part('template-parts/loop-slider') ?>
              <?php endwhile; ?>
              <?php else: ?>
                <?php get_template_part('template-parts/slider-null') ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-air-pagination price__sliderPagination"></div>
          </div>
        </div>
        <h3 id="entrance" class="price__subHeading fadein">入口対策</h3>
        <div class="price__afterSliderWrapper fadein">
          <span class="price__afterSliderButton -entrance -prev"></span>
          <span class="price__afterSliderButton -entrance -next"></span>
          <div id="swiper-entrance-container" class="price__afterSliderContainer">
            <div class="swiper-wrapper">
              <?php $args = array(
                  'posts_per_page'   => $slide_posts_per_page,
                  'post_type' => 'product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',
                      'field' => 'slug',
                      'terms' => 'entrance',
                      'operator' => 'IN'
                    ),
                    $display_terms
                  )
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
              ?>
              <?php get_template_part('template-parts/loop-slider') ?>
              <?php endwhile; ?>
              <?php else: ?>
                <?php get_template_part('template-parts/slider-null') ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-entrance-pagination price__sliderPagination"></div>
          </div>
        </div>
        <h3 id="contact" class="price__subHeading fadein">接触感染対策</h3>
        <div class="price__afterSliderWrapper fadein">
          <span class="price__afterSliderButton -contact -prev"></span>
          <span class="price__afterSliderButton -contact -next"></span>
          <div id="swiper-contact-container" class="price__afterSliderContainer">
            <div class="swiper-wrapper">
              <?php $args = array(
                  'posts_per_page'   => $slide_posts_per_page,
                  'post_type' => 'product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',
                      'field' => 'slug',
                      'terms' => 'contact',
                      'operator' => 'IN'
                    ),
                    $display_terms
                  )
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
              ?>
              <?php get_template_part('template-parts/loop-slider') ?>
              <?php endwhile; ?>
              <?php else: ?>
                <?php get_template_part('template-parts/slider-null') ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-contact-pagination price__sliderPagination"></div>
          </div>
        </div>
        <h3 id="splash" class="price__subHeading fadein">飛沫感染対策</h3>
        <div class="price__afterSliderWrapper fadein">
          <span class="price__afterSliderButton -splash -prev"></span>
          <span class="price__afterSliderButton -splash -next"></span>
          <div id="swiper-splash-container" class="price__afterSliderContainer">
            <div class="swiper-wrapper">
              <?php $args = array(
                  'posts_per_page'   => $slide_posts_per_page,
                  'post_type' => 'product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',
                      'field' => 'slug',
                      'terms' => 'splash',
                      'operator' => 'IN'
                    ),
                    $display_terms
                  )
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
              ?>
              <?php get_template_part('template-parts/loop-slider') ?>
              <?php endwhile; ?>
              <?php else: ?>
                <?php get_template_part('template-parts/slider-null') ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="swiper-splash-pagination price__sliderPagination"></div>
        </div>
        <h3 id="other" class="price__subHeading fadein">その他</h3>
        <div class="price__afterSliderWrapper fadein">
          <span class="price__afterSliderButton -other -prev"></span>
          <span class="price__afterSliderButton -other -next"></span>
          <div id="swiper-other-container" class="price__afterSliderContainer">
            <div class="swiper-wrapper">
              <?php $args = array(
                  'posts_per_page'   => $slide_posts_per_page,
                  'post_type' => 'product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_category',
                      'field' => 'slug',
                      'terms' => 'other',
                      'operator' => 'IN'
                    ),
                    $display_terms
                  )
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
              ?>
              <?php get_template_part('template-parts/loop-slider') ?>
              <?php endwhile; ?>
              <?php else: ?>
                <?php get_template_part('template-parts/slider-null') ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-other-pagination price__sliderPagination"></div>
          </div>
        </div>
      </section>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
      <script>
        hbspt.forms.create({
          portalId: "9363833",
          formId: "321ddd9e-8aee-4501-8f18-600de918b064"
        });
      </script>
      <section class="service__contactLink">
        <h2 class="service__heading contact"><span id="effect_06">お問い合わせはこちら</span></h2>
        <p class="service__contactLinkParagraph">ご不明点やお見積もりなど、担当者がお客様のご相談を承ります。<br>お気軽にお問い合わせくださいませ。</p>
        <div class="service__contactLinkButtons">
          <a href="<?php echo home_url('/contact/') ?>" class="service__contactLinkButton -primary">お問い合わせ</a>
        </div>
        <div class="service__contactPhone">
          <span class="service__contactPhoneHeading">電話でのお問い合わせ</span>
          <small class="service__contactPhoneBusinessHours">営業時間 ／ 9:00〜18:00（土日祝日を除く)</small>
          <address class="service__contactPhoneAddress">TEL 045-323-4610</address>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
