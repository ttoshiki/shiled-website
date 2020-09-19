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
		<div class="servicePcr">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto" id="effect_01">SERVICE</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <section class="servicePcr__system">
        <h2 class="servicePcr__heading"><span id="effect_02">ご提案するPCR検査体制</span></h2>
        <p class="servicePcr__systemParagraph">弊社は、ISO14189取得の<br class="-sp">臨床検査会社と協業し、<br>万全なバックアップ体制で貴社全国の職員・スタッフ様のPCR検査に対応いたします。</p>
        <div class="servicePcr__systemDoubleCol">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/figure.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/figure.png, <?php echo get_template_directory_uri(); ?>/assets/img/service-pcr/figure@2x.png 2x" alt="&SHIELD除菌清掃サービスのイメージ">
          <ol class="servicePcr__list fadein">
            <li class="servicePcr__item">新型コロナウイルス （SARS-CoV-2）のPCR検査です。現時点での罹患を判断するのに最適であると考えます。</li>
            <li class="servicePcr__item">各事業所単位のスタッフ自身で取得した唾液を、検体種別とします。（1カ所あたりの最小人数設定があります。）</li>
            <li class="servicePcr__item">結果は2日後に判明・報告します。</li>
            <li class="servicePcr__item">後日、会社あて報告書を発行・提出します。</li>
            <li class="servicePcr__item">費用は１人当たり20,000円（税別）〜</li>
            <li class="servicePcr__item">検査は唾液検体に適応可能な厚労省認可のIVD試薬を用いた遺伝子検査法（リアルタイムRT-PCR法）を用いて検査実施いたします。</li>
            <li class="servicePcr__item">唾液採取だけですので、飛沫感染リスクも少なく、9日以内の感染であれば喀痰・鼻咽頭ぬぐいとの相関も良いです。</li>
          </ol>
        </div>
      </section>
      <section class="servicePcr__flow">
        <div class="servicePcr__flowInner">
          <h2 class="servicePcr__heading"><span id="effect_03">PCR検査の流れ</span></h2>
          <div class="servicePcr__flowWrapper">
            <ol class="servicePcr__flowList">
              <li class="servicePcr__flowItem">
                <span class="servicePcr__flowNumber">PCR検査申込</span>
                <div class="servicePcr__flowText">
                  <p class="servicePcr__paragraph -first">検査ご希望の法人様は<a href="mailto:info@andshield.jp" class="servicePcr__mail">info@andshield.jp</a>(株式会社テラ)までお申込書をメール送付ください。<br>詳しくは担当者よりご案内いたします。</p>
                  <a href="<?php echo get_template_directory_uri(); ?>/download/SHIELDPCR_kensamoushikomisho.xlsx" download="SHIELDPCR_kensamoushikomisho.xlsx" class="servicePcr__button">申込書 ダウンロード</a>
                  <p class="servicePcr__paragraph -lineHeightBg">
                    事務局 株式会社テラあて 申込書にて、ご希望人数・日時をお知らせください。<br>
                    弊社がISO14189取得の臨床検査会社と調整し、施設（指定場所）に検査容器をお送るする日と回収予定日をお伝えし、予約とします。（最低人数設定があります。）（1回・1か所あたりの想定人数をお知らせください。）
                  </p>
                  <p class="servicePcr__paragraph -caution -lineHeightBg">※各施設から事前に貴社産業医にご相談して頂き、該当保健所にPCR検査を実施する旨、ご連絡して　頂いておくと、検査結果で陽性が出た場合、対応がよりスムーズになります。</p>
                </div>
              </li>
              <li class="servicePcr__flowItem">
                <span class="servicePcr__flowNumber">PCR検査</span>
                <div class="servicePcr__flowText">
                  <p class="servicePcr__paragraph -lineHeightBg -first">
                    法人様にて各自容器を使用して唾液を自己採取。<br>
                    予定者全員、事前にお知らせした日時までにお済ませ下さい。<br>
                    専任スタッフが回収にお伺いします。<br>
                    ラボにて遺伝子検査法（リアルタイムRT-PCR法）を用いて検査
                  </p>
                </div>
              </li>
              <li class="servicePcr__flowItem">
                <span class="servicePcr__flowNumber">PCR検査後</span>
                <div class="servicePcr__flowText">
                  <p class="servicePcr__paragraph -first">
                    陽性の方のPCR検査への誘導は、貴社産業医様に相談したうえで、保健所にご相談下さい<br>
                    ※各自治体（保健所）によって対応に開きがあります。
                  </p>
                  <p class="servicePcr__paragraph">後日、会社あて検査報告書を発行・提出いたします。※当日デジタルデータをメールにてお送りすることも可能です。</p>
                  <p class="servicePcr__paragraph">企業施設入口に貼って頂く検査済証シールをお渡しします。</p>
                  <a href="<?php echo get_template_directory_uri(); ?>/download/SHIELDPCR_kensamoushikomisho.xlsx" download="SHIELDPCR_kensamoushikomisho.xlsx" class="servicePcr__button">申込書 ダウンロード</a>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </section>
      <section class="service__contactLink">
        <h2 class="service__contactLinkHeading"><span id="effect_10">お問い合わせはこちら</span></h2>
        <p class="service__contactLinkParagraph">ご不明点やお見積もりなど、担当者がお客様のご相談を承ります。<br>お気軽にお問い合わせくださいませ。</p>
        <div class="service__contactLinkButtons">
          <a href="<?php echo home_url('/contact/') ?>" class="service__contactLinkButton -primary">お問い合わせ</a>
          <a href="<?php echo home_url('/download/') ?>" class="service__contactLinkButton">資料ダウンロード</a>
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
