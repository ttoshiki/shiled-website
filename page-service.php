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
		<div class="service">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto" id="effect_01">SERVICE</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
      </section>
      <section class="service__lead fadein">
        <h2 class="service__heading"><span id="effect_02">抗菌コーティング&除菌清掃<br class="-sp">サービス</span></h2>
        <div class="service__leadContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/lead_img.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/lead_img.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/lead_img@2x.jpg 2x" alt="" class="service__leadImage">
          <div class="service__leadText">
            <h3 class="service__subHeading">細菌やウイルスから<br>働く人を守る。</h3>
            <p class="service__leadParagraph">
              オフィスや店舗など、企業活動の拠点の抗菌・除菌を身近なものにし、安心して働ける環境にします。
            </p>
            <p class="service__leadParagraph">
              私たちのサービスは、皆様のオフィスサイズや共有スペースなど、日常で気になるところや普段目に止まらないところまでチェックし、除菌清掃・抗菌コーティングを行います。
            </p>
            <p class="service__leadParagraph -primary">
              弊社では従業員の皆様の安全・安心のため、<br class="-pc">
              PCR検査サービスもご提供しております。<a href="<?php echo home_url('/service-pcr/'); ?>" class="service__leadLink">詳しくはこちら。</a>
            </p>
          </div>
        </div>
      </section>
      <section class="service__price">
        <h2 class="service__heading"><span id="effect_03">施工料金</span></h2>
        <div class="service__priceContents fadein">
          <picture class="service__pricePicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/price_image.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/price_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/price_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/service/price_image@2x.jpg 2x" alt="">
          </picture>
          <table class="service__priceTable">
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
      </section>
      <section class="service__feature">
        <div class="service__featureInner">
          <h2 class="service__heading"><span id="effect_04">&SHIELD抗菌コーティング<br class="-sp">&除菌清掃サービスの特徴</span></h2>
          <div class="service__featurePoints">
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">1</span>
              </div>
              <h3 class="service__featurePointHeading">
                細菌だけでなく、<br>
                ウイルスに効果があります
              </h3>
              <p class="service__featurePointParagraph">プロスポーツチームの除菌清掃を受託しております。</p>
            </div>
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">2</span>
              </div>
              <h3 class="service__featurePointHeading">
                安全性の高い液剤を<br>使用しています
              </h3>
              <p class="service__featurePointParagraph">人体に無害または影響の限りなく少ない液剤を使用いたします。</p>
            </div>
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">3</span>
              </div>
              <h3 class="service__featurePointHeading">
                効果的な液剤を噴霧して<br>
                除菌します
              </h3>
              <p class="service__featurePointParagraph">次亜塩素酸水、様々な細菌・ウィルスに効果が確認されている除菌洗浄液を使用いたします。</p>
            </div>
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">4</span>
              </div>
              <h3 class="service__featurePointHeading">
                抗菌コーティングは<br>
                2年間保証いたします
              </h3>
              <p class="service__featurePointParagraph">保証：効果がない場合は全額返金いたします。（条件あり）<br>施工後、従業員様コロナ感染発覚時作業を50%引きで実施いたします。</p>
            </div>
          </div>
          <div class="service__featurePhotos fadein">
            <figure class="service__featurePhoto">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/feature01@2x.jpg 2x" alt="&SHIELD除菌清掃サービスのイメージ">
              <figcaption class="service__featurePhotoCaption">アルカリ電解水での拭き取り</figcaption>
            </figure>
            <figure class="service__featurePhoto">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/feature02@2x.jpg 2x" alt="&SHIELD除菌清掃サービスのイメージ">
              <figcaption class="service__featurePhotoCaption">次亜塩素酸水、除菌洗浄剤の噴霧</figcaption>
            </figure>
            <figure class="service__featurePhoto">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature03.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/feature03@2x.jpg 2x" alt="&SHIELD除菌清掃サービスのイメージ">
              <figcaption class="service__featurePhotoCaption">アルカリ電解水での拭き取りをしたことにより除菌効果がアップ</figcaption>
            </figure>
          </div>
        </div>
      </section>
      <section class="service__flow">
        <div class="service__flowInner">
          <h2 class="service__heading"><span id="effect_05">施工の主な流れ</span></h2>
          <div class="service__flowSteps">
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow01.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow01@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP1</span>
              <h3 class="service__flowStepHeading">アルカリ電解水によるふき取り</h3>
              <p class="service__flowStepParagraph">作業場所　埃、塵、汚れが付着している箇所。トイレや棚、デスクなど水を使用した拭き取りが可能な箇所。</p>
            </div>
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow02.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow02@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP2</span>
              <h3 class="service__flowStepHeading">除菌液剤の散布</h3>
              <p class="service__flowStepParagraph">作業場所　室内全体に弱酸性次亜塩素酸水または除菌洗浄剤を噴霧。室内の壁など普段清掃が行き届きにくい箇所も清掃、除菌することが可能。</p>
            </div>
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow03.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow03.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow03@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP3</span>
              <h3 class="service__flowStepHeading">抗菌コーティング</h3>
              <p class="service__flowStepParagraph">作業場所　不特定多数の人が触る箇所を中心にドアノブや壁面、ドア、テーブルを始めとした箇所。</p>
            </div>
          </div>
        </div>
      </section>
      <section class="service__coronaFlow">
        <h2 class="service__heading"><span id="effect_06">コロナ感染発覚時緊急対策<br class="-sp">フロー策定</span></h2>
        <p class="service__headingParagraph fadein">お客様、従業員様でコロナ感染の発覚時から、<br class="-pc">各所除菌対策フローを作成、再営業開始までの除菌計画をご提案します。</p>
        <ol class="service__coronaFlowList fadein">
          <li class="service__coronaFlowItem">社内通達<br class="-pc">スキーム確認</li>
          <li class="service__coronaFlowItem">関係各所通達<br class="-pc">スキーム確認</li>
          <li class="service__coronaFlowItem">緊急連絡先<br class="-pc">設定</li>
          <li class="service__coronaFlowItem">除菌場所<br class="-pc">設定</li>
          <li class="service__coronaFlowItem">除菌優先<br class="-pc">順位設定</li>
        </ol>
      </section>
      <section class="service__coatingFeature">
        <h2 class="service__heading"><span id="effect_07">&SHIELD抗菌コーティングの特徴</span></h2>
        <p class="service__headingParagraph fadein">光触媒コーティングで長期間に渡り「安心・快適な空間作り」に貢献いたします。</p>
        <div class="service__coatingFeatures">
          <div class="service__coatingFeatureWrapper fadein">
            <h3 class="service__coatingFeatureSubHeading">複合効果で快適に</h3>
            <ul class="service__coatingFeatureList">
              <li class="service__coatingFeatureItem">ウイルス・細菌・VOC・悪臭などの有害物質を分解し安全な空間がつくれます</li>
              <li class="service__coatingFeatureItem">掃除しやすく清潔な空間がつくれます</li>
              <li class="service__coatingFeatureItem">ハウスダストやアレルゲンがつきにくい快適な空間がつくれます</li>
            </ul>
          </div>
          <div class="service__coatingFeatureWrapper fadein">
            <h3 class="service__coatingFeatureSubHeading">効果が永続的</h3>
            <ul class="service__coatingFeatureList">
              <li class="service__coatingFeatureItem">他の消臭や、抗ウイルス抗菌メカニズムですと効果が長続きしませんが、本製品は完全無機の成分特性と、触媒反応による分解で永続的に効果が持続します</li>
              <li class="service__coatingFeatureItem">2年間保証いたします。<br>保証：①効果がない場合は全額返金いたします。（条件あり）②施工後、従業員様コロナ感染発覚時作業を50%引きで実施いたします。</li>
            </ul>
          </div>
          <div class="service__coatingFeatureWrapper fadein">
            <h3 class="service__coatingFeatureSubHeading">透明で暗所に強い</h3>
            <ul class="service__coatingFeatureList">
              <li class="service__coatingFeatureItem">暗所でも、抗カビ・抗菌・抗ウイルス効果があります</li>
              <li class="service__coatingFeatureItem">LEDに対応、さらに可視光照度500LUX以下の低照度で分解能力を発揮します</li>
              <li class="service__coatingFeatureItem">コーティング液は薄膜にすると透明度が極めて高く、様々なものに施工できます</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="service__execution">
        <h2 class="service__heading"><span id="effect_08">持続性の高い「&SHIELD抗菌コーティング施工」</span></h2>
        <p class="service__headingParagraph -foldBefore fadein">
          私たち &SHIELDはお客様の施工規模、利用動線、活動人数に合わせ最適な<br>
          抗菌コーティング剤「メディカルナノコート」または「ナノゾーン」をご提案いたします。
        </p>
        <div class="service__foldWrapper">
          <picture class="service__foldPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/execution.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/execution.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/execution.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/service/execution@2x.jpg 2x" alt="">
          </picture>
          <div class="service__foldContents">
            <div class="service__executionContents">
              <div class="service__heading"><span id="effect_09">メディカルナノコート</span></div>
              <p class="service__foldParagraph">壁面等に塗布することで、細菌・ウイルスを破壊し、<br>カビの発生を抑制する特殊被膜ナノコーティング剤。</p>
            </div>
            <button class="service__executionButton service__foldButton -close">OPEN</button>
          </div>
        </div>
      </section>
      <div class="service__foldedBlock executionFolded">
        <section class="service__nanoCoat">
          <h2 class="service__heading service__nanoCoatHeading"><span id="effect_10">抗菌コーティング「メディカルナノコート」とは？</span></h2>
          <div class="service__nanoCoatWrapper">
            <div class="service__nanoCoatImages">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat01@2x.jpg 2x" alt="通常断面" class="service__nanoCoatImage">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/nano_coat02@2x.jpg 2x" alt="メディカルナノコート施工断面" class="service__nanoCoatImage">
            </div>
            <div class="service__nanoCoatCautionWrapper">
              <span class="service__nanoCoatCaution">※メディカルナノコート（シングルナノ）と<br class="-sp">通常表面の比較</span>
            </div>
            <p class="service__nanoCoatParagraph">身近にある様々な基材は、表面上は平らに見えますが、実は、目に見えない微細な凸凹があります。メディカルナノコートは壁面等に塗布することで、細菌・ウイルスを破壊し、カビの発生を抑制する特殊被膜ナノコーティング剤です。シングルナノ粒子径（1～10ナノメートル）のケイ素、プラチナ等の独自の無機系ナノ素材で目に見えないミクロ、ナノレベルの凹凸をコーティングし、抗菌抗カビ抗ウイルス性能を付与します。さらに、コーティング面には帯電防止機能もあるため、微生物や微細なチリやほこりを付着させません。また、メディカルナノコートを塗布するとコーティング表面は超親水性になりますので、水滴や汚れがつかず、カビや微生物の繁殖できない清潔な環境を作り出し効果が持続します。</p>
          </div>
        </section>
        <section class="service__verification">
          <div class="service__verificationInner">
            <h2 class="service__heading service__verificationHeading"><span id="effect_11">第三者機関での検証</span></h2>
            <div class="service__verificationTestCase">
              <div class="service__verificationNumWrapper roboto">
                <span class="service__verificationText">TEST</span>
                <span class="service__verificationNum">1</span>
              </div>
              <h3 class="service__verificationCaseHeading">第三者機関試験で確かな効果を検証済みです。</h3>
              <div class="service__verificationCaseContents -doubleCol -first">
                <div class="service__verificationCaseContent">
                  <h4 class="service__verificationCaseSubHeading">国際空港にて効果持続検証試験 拭取り検査</h4>
                  <p class="service__verificationParagraph">国際空港でコーディング施工後16ヶ月と28ヶ月後の細菌   拭取り検査を行い、実空間での抗菌効果が確認され、その結果が国際学会で発表されています。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/verification01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/verification01.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/verification01@2x.png 2x" alt="拭き取り検査グラフ" class="service__verificationGraph">
              </div>
              <div class="service__verificationCaseContents -doubleCol">
                <div class="service__verificationCaseContent">
                  <h4 class="service__verificationCaseSubHeading">インフルエンザ不活性化試験 / 食環境研究所</h4>
                  <p class="service__verificationParagraph">メディカルナノコートは、15秒間以上インフルエンザウイルスに反応させることによって、インフルエンザウイルスを99.99%不活性（無力化）することが確認されました。<br>（減菌生理食塩水ではほとんど無力化されていません。）</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/verification02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/verification02.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/verification02@2x.png 2x" alt="インフルエンザ不活性化試験結果表" class="service__verificationGraph">
              </div>
              <div class="service__verificationCaseContents">
                <h4 class="service__verificationCaseSubHeading">無光抗菌試験 / 一般財団法人カケンテストセンター</h4>
                <p class="service__verificationParagraph">光の無い環境下で黄色ぶどう球菌・膀炎かん菌・大腸菌等様々なウイルスに対して抗菌効果が認められました。無光レジオネラ菌試験においてもメディカルナノコートを塗布したディスクの周りに細菌の発育は見られませんでした。</p>
              </div>
            </div>
            <div class="service__verificationTestCase fadein">
              <div class="service__verificationNumWrapper roboto">
                <span class="service__verificationText">TEST</span>
                <span class="service__verificationNum">2</span>
              </div>
              <h3 class="service__verificationCaseHeading">子供が舐めてもOKな基準をクリア、肌への影響もテスト済み、安心して使用できます。</h3>
              <div class="service__verificationCaseContents -first">
                <h4 class="service__verificationCaseSubHeading">閉鎖パッチテスト（24時間皮膚貼り付け）/ 総合健康開発研究所</h4>
                <p class="service__verificationParagraph">被験者22名がメディカルナノコートで浸したディスクを24時間皮膚に張り付け、剥離後60分後と24時間後の2回判定を行ったところ被験者全員が陰性だったので、皮膚刺激指数は0であり安全性が確認された。</p>
              </div>
              <div class="service__verificationCaseContents -textOnly">
                <h4 class="service__verificationCaseSubHeading">食品衛生法・食品、添加物の規格基準 / 財団法人化学研究評価機構 高分子試験・評価センター</h4>
                <p class="service__verificationParagraph">食品衛生法で定められた安全性を確認し、子供が口に入れる可能性のあるおもちゃへの塗膜及び、おもちゃの製造に用いるポリ塩化ビニルを主体とする材料に使用できます。</p>
              </div>
            </div>
          </div>
        </section>
        <section class="service__achievement">
          <h2 class="service__heading"><span id="effect_12">導入実績</span></h2>
          <p class="service__headingParagraph fadein">羽田空港、関西空港、市役所などの公共施設、<br class="-pc">またホテルなどのエレベーター内の感染予防として導入</p>
          <div class="service__achievementPlace">
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case01@2x.jpg 2x" alt="羽田空港国際線">
              <figcaption class="service__coronaCasePhotoCaption">羽田空港国際線</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case02@2x.jpg 2x" alt="関西国際空港">
              <figcaption class="service__coronaCasePhotoCaption">関西国際空港</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case03.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case03@2x.jpg 2x" alt="市原市役所">
              <figcaption class="service__coronaCasePhotoCaption">市原市役所</figcaption>
            </figure>
          </div>
          <p class="service__headingParagraph -place fadein">不特定多数の方が触る場所への施工</p>
          <div class="service__achievementPlace">
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case04.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case04@2x.jpg 2x" alt="キッズスペース">
              <figcaption class="service__coronaCasePhotoCaption">キッズスペース</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case05.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case05.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case05@2x.jpg 2x" alt="カート（羽田空港）">
              <figcaption class="service__coronaCasePhotoCaption">カート（羽田空港）</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case06.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case06.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case06@2x.jpg 2x" alt="エレベーター内（ボタン）">
              <figcaption class="service__coronaCasePhotoCaption">エレベーター内（ボタン）</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case07.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case07.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case07@2x.jpg 2x" alt="階段の手すり">
              <figcaption class="service__coronaCasePhotoCaption">階段の手すり</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case08.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case08.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case08@2x.jpg 2x" alt="自動販売機">
              <figcaption class="service__coronaCasePhotoCaption">自動販売機</figcaption>
            </figure>
            <figure class="service__achievementFigure fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case09.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case09.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case09@2x.jpg 2x" alt="お手洗い">
              <figcaption class="service__coronaCasePhotoCaption">お手洗い</figcaption>
            </figure>
          </div>
        </section>
      </div>
      <section class="service__nanozoneCoat">
        <div class="service__foldWrapper">
          <div class="service__foldContents">
            <h2 class="service__heading"><span id="effect_13">nanozoneCOAT</span></h2>
            <p class="service__foldParagraph fadein">
              自己結合性酸化チタン分散液（＝ナノゾーンソリューション）<br>
              を塗布する光触媒コーティング施工です。
            </p>
            <button class="service__nanozoneCoatButton service__foldButton -close">OPEN</button>
          </div>
          <picture class="service__foldPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_image.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_image.jpg" alt="">
          </picture>
        </div>
        <div class="service__foldedBlock nanozoneCoatFolded">
          <div class="service__aboutNanoCoat">
            <h2 class="service__heading"><span id="effect_14">“nanozone COAT”（ナノゾーンコート）とは？</span></h2>
            <div class="service__aboutNanoCoatContents fadein">
              <p class="service__aboutNanoCoatParagraph">
                自己結合性酸化チタン分散液（＝ナノゾーンソリューション）を塗布する光触媒コーティング施工です。ナノゾーンコート施工面では酸化チタンによる光触媒により、ウイルス、菌の繁殖、悪臭、PM2.5など有機物の種類を問わず酸化分解し、水とCO2に分解します。（無害化）<br>
                ナノゾーンソリューション には経口毒性も皮膚刺激もない成分を使用、人体にも環境にも優しく安心な防汚・消臭・抗菌コーティングです。
              </p>
              <h3 class="service__aboutNanoCoatHeading">ナノゾーンソリューション ＝「自己結合」の利点</h3>
              <div class="service__aboutNanoCoatInner">
                <h4 class="service__aboutNanoCoatSubHeading">ナノゾーンソリューションの酸化チタン</h4>
                <p class="service__aboutNanoCoatParagraph">施工後、水が蒸発してしまうと酸化チタン粒子自体があらゆる表面に長期間にわたり強い結合を行います。</p>
                <div class="service__aboutNanoCoatIllust">
                  <ul class="service__aboutNanoCoatList">
                    <li class="service__aboutNanoCoatItem">
                      自力で施工面に結合できるため<strong>バインダー（接着剤）不要</strong>
                    </li>
                    <li class="service__aboutNanoCoatItem">
                      バインダー（接着剤）を使用していないため<strong>一緒に剥がれない</strong>
                    </li>
                    <li class="service__aboutNanoCoatItem">
                      バインダー（接着剤）がなく、粒子が露出しているため
                      <strong>わずかな光（可視光線）で、<br>すべての酸化チタン粒子が効果を発揮</strong>
                    </li>
                  </ul>
                  <picture class="service__aboutNanoCoatPicture">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_illust.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_illust.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_illust.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_illust@2x.png 2x" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
          <div class="service__nanoCoatCase">
            <div class="service__nanoCoatCaseBlock">
              <span class="service__nanoCoatCaseLabel fadein">店舗<span class="service__newLine">施工</span></span>
              <h2 class="service__nanoCoatCaseHeading fadein">対象：店舗・オフィス</h2>
              <div class="service__nanoCoatCaseContents fadein">
                <div class="service__nanoCoatCaseContentsInner -store">
                  <h3 class="service__nanoCoatCaseSubHeading">概要のご紹介</h3>
                  <h4 class="service__nanoCoatCaseSmallHeading">施工内容(例)</h4>
                  <ul class="service__nanoCoatCaseList">
                    <li class="service__nanoCoatCaseItem">タブレット</li>
                    <li class="service__nanoCoatCaseItem">パソコン</li>
                    <li class="service__nanoCoatCaseItem">キッズコーナー</li>
                    <li class="service__nanoCoatCaseItem">タッチパネル</li>
                    <li class="service__nanoCoatCaseItem">カウンター、テーブル、椅子</li>
                    <li class="service__nanoCoatCaseItem">発券機</li>
                    <li class="service__nanoCoatCaseItem">アクリルボード</li>
                    <li class="service__nanoCoatCaseItem">壁　など</li>
                  </ul>
                  <h4 class="service__nanoCoatCaseSmallHeading">施工時間</h4>
                  <span class="service__nanoCoatCaseSpan">60㎡　約1時間</span>
                  <h4 class="service__nanoCoatCaseSmallHeading">準備</h4>
                  <span class="service__nanoCoatCaseSpan">拭き掃除程度 ※養生不要</span>
                </div>
                <div class="fadein">
                  <h3 class="service__nanoCoatCaseSubHeading">実際の施工風景</h3>
                  <picture class="service__nanoCoatCasePicture -large">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat01.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat01.jpg" alt="">
                  </picture>
                  <div class="service__nanoCoatCasePictures -case">
                    <picture class="service__nanoCoatCasePicture">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat02.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat02.jpg" alt="">
                    </picture>
                    <picture class="service__nanoCoatCasePicture">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat03.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat03.jpg" alt="">
                    </picture>
                    <picture class="service__nanoCoatCasePicture">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat04.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat04.jpg" alt="">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div class="service__nanoCoatCaseBlock">
              <span class="service__nanoCoatCaseLabel fadein">施工<span class="service__newLine">事例</span></span>
              <div class="service__nanoCoatCaseInner">
                <div class="service__nanoCoatCaseUpper fadein">
                  <div>
                    <h3 class="service__nanoCoatCaseSubHeading">施工事例のご紹介</h3>
                    <h4 class="service__nanoCoatCaseSmallHeading">キッコーマン　バイオケミファ株式会社</h4>
                    <span class="service__nanoCoatCaseSpan">測定器：ルミテスターSmart</span>
                    <span class="service__nanoCoatCaseSpan">測定：ATP拭き取り専用ポータブルルミノメーター</span>
                    <span class="service__nanoCoatCaseSpan">内容：洗浄後の清浄度を数値化</span>
                  </div>
                  <div class="service__nanoCoatCasePictures -store">
                    <picture class="service__nanoCoatCasePicture -measureMachine">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat05.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat05.jpg" alt="">
                    </picture>
                    <picture class="service__nanoCoatCasePicture -measure">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat06.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat06.jpg" alt="">
                    </picture>
                  </div>
                </div>
                <div class="service__nanoCoatCaseLower fadein">
                  <ul class="service__nanoCoatCaseListBlock">
                    <li class="service__nanoCoatCaseItemBlock">
                      <h3 class="service__nanoCoatCaseItemHeading">カウンター</h3>
                      <picture class="service__nanoCoatCasePicture -before">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before01.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before01.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan -before">施工前測定　6,360(RLU)</span>
                      <picture class="service__nanoCoatCasePicture">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after01.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after01.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan">施工後測定　1,235(RLU)</span>
                    </li>
                    <li class="service__nanoCoatCaseItemBlock">
                      <h3 class="service__nanoCoatCaseItemHeading">発券機・タッチパネル</h3>
                      <picture class="service__nanoCoatCasePicture -before">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before02.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before02.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan -before">施工前測定　17,291(RLU)</span>
                      <picture class="service__nanoCoatCasePicture">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after02.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after02.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan">施工後測定　671(RLU)</span>
                    </li>
                    <li class="service__nanoCoatCaseItemBlock">
                      <h3 class="service__nanoCoatCaseItemHeading">発券機・タッチパネル</h3>
                      <picture class="service__nanoCoatCasePicture -before">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before03.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_before03.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan -before">施工前測定　11,504(RLU)</span>
                      <picture class="service__nanoCoatCasePicture">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after03.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_after03.jpg" alt="">
                      </picture>
                      <span class="service__nanoCoatCaseItemSpan">施工後測定　1,035(RLU)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service__nanoCoatCaseBlock -verification fadein">
              <span class="service__nanoCoatCaseLabel">効果<span class="service__newLine">検証</span></span>
              <div class="service__nanoCoatVerificationContents">
                <h3 class="service__nanoCoatCaseHeading">接触機会の多いドアノブを測定し、効果検証を実施</h3>
                <div class="service__nanoCoatCaseLabels">
                  <span class="service__nanoCoatCaseFlowLabel">除菌効果の検証</span>
                  <span class="service__nanoCoatCaseFlowLabel">抗菌効果の立証</span>
                </div>
                </div>
                <picture class="service__nanoCoatVerificationPicture">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_verification.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_verification.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_verification.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/service/nanozone_coat_verification@2x.png 2x" alt="">
                </picture>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="service__merit">
        <h2 class="service__heading"><span id="effect_15">除菌清掃&抗菌コートのメリット</span></h2>
        <p class="service__headingParagraph fadein">光触媒コーティングで長期間に渡り「安心・快適な空間作り」に貢献いたします。</p>
        <div class="service__coatingFeatures">
          <div class="service__meritItem fadein">
            <h3 class="service__meritSubHeading">安心・安全な環境づくり</h3>
            <p class="service__meritParagraph">除菌清掃・抗菌コーティングをすることで、今存在する細菌やウイルスを不活化し、接触感染リスクを軽減することが可能です。消臭・防カビ効果もございます。貴社の従業員様やお客様のご不安を軽減し、安心な環境作りに貢献いたします。</p>
          </div>
          <div class="service__meritItem fadein">
            <h3 class="service__meritSubHeading">負担・コスト削減</h3>
            <p class="service__meritParagraph">加湿器等の機器と異なり、抗菌コーティングは効果が長期間持続し、メンテナンス等のコストがかかりません。日々の消毒や除菌作業等に関わる負荷軽減・コスト削減に貢献いたします。</p>
          </div>
          <div class="service__meritItem fadein">
            <h3 class="service__meritSubHeading">「貴社ならでは」の一つとして</h3>
            <p class="service__meritParagraph">除菌清掃・抗菌コーティングでの感染症対策を積極的に実施していることは貴社ならではの差別化ポイントになりえます。安心な環境整備に取り組むことで、貴社のお客様の店舗ご来店の動機にも繋がります。</p>
          </div>
        </div>
        <div class="service__pcr fadein">
          <div class="service__pcrImage">
            <a href="<?php echo home_url('/service-pcr/'); ?>" class="service__pcrLink">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/pcr.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/pcr@2x.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/pcr@2x.jpg 2x" alt="PCR検査サービスについて">
              <div class="service__pcrText">
                <p class="service__pcrParagraph">PCR検査<br>サービスについて</p>
                <span class="service__pcrSpan roboto">PCR TEST SERVICE</span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_arrow-right.png" alt="" class="service__pcrArrowIcon">
            </a>
          </div>
        </div>
      </section>
      <section class="service__contactLink">
        <h2 class="service__heading contact"><span id="effect_16">お問い合わせはこちら</span></h2>
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
