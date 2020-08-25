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
        <h2 class="service__leadHeading"><span id="effect_02">抗菌コーティング&除菌清掃<br class="-sp">サービス</span></h2>
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
          </div>
        </div>
      </section>
      <section class="service__feature">
        <div class="service__featureInner">
          <h2 class="service__featureHeading"><span id="effect_03">&SHIELD除菌清掃<br class="-sp">サービスの特徴</span></h2>
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
                洗剤を使用しません
              </h3>
              <p class="service__featurePointParagraph">洗剤成分や芳香成分が残留せずニオイの元を分解して消臭します。</p>
            </div>
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">3</span>
              </div>
              <h3 class="service__featurePointHeading">
                弱酸性次亜塩素酸水を<br>
                噴霧して除菌いたします
              </h3>
              <p class="service__featurePointParagraph">新型コロナウイルスへの有効性も正式に発表されています。</p>
            </div>
            <div class="service__featurePoint fadein">
              <div class="service__featurePointNumWrapper roboto">
                <span class="service__featurePointText">POINT</span>
                <span class="service__featurePointNum">4</span>
              </div>
              <h3 class="service__featurePointHeading">
                抗菌コーティングを施し、<br>
                ２年間保証いたします
              </h3>
              <p class="service__featurePointParagraph">補償：従業員様コロナ感染発覚時除菌作業を50％引きで実施。</p>
            </div>
          </div>
          <div class="service__featurePhotos fadein">
            <figure class="service__featurePhoto">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/feature01@2x.jpg 2x" alt="&SHIELD除菌清掃サービスのイメージ">
              <figcaption class="service__featurePhotoCaption">アルカリ電解水での拭き取り</figcaption>
            </figure>
            <figure class="service__featurePhoto">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/feature02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/feature02@2x.jpg 2x" alt="&SHIELD除菌清掃サービスのイメージ">
              <figcaption class="service__featurePhotoCaption">次亜塩素酸水の噴霧</figcaption>
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
          <h2 class="service__flowHeading"><span id="effect_04">除菌清掃作業の主な流れ</span></h2>
          <div class="service__flowSteps">
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow01.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow01@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP1</span>
              <h3 class="service__flowStepHeading">アルカリ電解水によるふき取り</h3>
              <p class="service__flowStepParagraph">作業場所 埃、塵、汚れが付着している箇所。トイレや棚、デスクなど水を使用した拭き取りが可能な箇所。</p>
            </div>
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow02.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow02@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP2</span>
              <h3 class="service__flowStepHeading">次亜塩素酸水の噴霧</h3>
              <p class="service__flowStepParagraph">作業場所 室内全体に噴霧。室内の壁など普段清掃が行き届きにくい箇所も清掃、除菌することが可能。</p>
            </div>
            <div class="service__flowStep fadein">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow03.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/flow03.png, <?php echo get_template_directory_uri(); ?>/assets/img/service/flow03@2x.png 2x" alt="除菌清掃作業の流れのイメージ">
              <span class="service__flowStepNumber roboto">STEP3</span>
              <h3 class="service__flowStepHeading">抗菌コーティング</h3>
              <p class="service__flowStepParagraph">作業場所 不特定多数の人が触る箇所を中心にドアノブや壁面、ドア、テーブルを始めとした箇所。</p>
            </div>
          </div>
        </div>
      </section>
      <section class="service__coatingFeature">
        <h2 class="service__coatingFeatureHeading"><span id="effect_05">抗菌コーティングの特徴</span></h2>
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
      <section class="service__nanoCoat">
        <h2 class="service__nanoCoatHeading"><span id="effect_06">抗菌コーティング「メディカルナノコート」とは？</span></h2>
        <div class="service__nanoCoatWrapper fadein">
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
          <h2 class="service__verificationHeading"><span id="effect_07">第三者機関での検証</span></h2>
          <div class="service__verificationTestCase fadein">
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
      <section class="service__coronaFlow">
        <h2 class="service__coronaFlowHeading"><span id="effect_08">コロナ感染発覚時緊急対策<br class="-sp">フロー策定</span></h2>
        <p class="service__coronaFlowParagraph">お客様、従業員様でコロナ感染の発覚時から、<br class="-pc">各所除菌対策フローを作成、再営業開始までの除菌計画をご提案します。</p>
        <ol class="service__coronaFlowList fadein">
          <li class="service__coronaFlowItem">社内通達<br class="-pc">スキーム確認</li>
          <li class="service__coronaFlowItem">関係各所通達<br class="-pc">スキーム確認</li>
          <li class="service__coronaFlowItem">緊急連絡先<br class="-pc">設定</li>
          <li class="service__coronaFlowItem">除菌場所<br class="-pc">設定</li>
          <li class="service__coronaFlowItem">除菌優先<br class="-pc">順位設定</li>
        </ol>
        <h2 class="service__coronaFlowHeading"><span id="effect_09">導入実績</span></h2>
        <p class="service__coronaFlowParagraph">羽田空港、関西空港、市役所などの公共施設、<br class="-pc">またホテルなどのエレベーター内の感染予防として導入</p>
        <div class="service__coronaFlowCaseFacility">
          <figure class="service__coronaCaseFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case01@2x.jpg 2x" alt="羽田空港国際線">
            <figcaption class="service__coronaCasePhotoCaption">羽田空港国際線</figcaption>
          </figure>
          <figure class="service__coronaCaseFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case02@2x.jpg 2x" alt="関西国際空港">
            <figcaption class="service__coronaCasePhotoCaption">関西国際空港</figcaption>
          </figure>
          <figure class="service__coronaCaseFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case03.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case03@2x.jpg 2x" alt="市原市役所">
            <figcaption class="service__coronaCasePhotoCaption">市原市役所</figcaption>
          </figure>
        </div>
        <p class="service__coronaFlowParagraph -place">不特定多数の方が触る場所への施工</p>
        <div class="service__coronaCasePlace">
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case04.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case04@2x.jpg 2x" alt="キッズスペース">
            <figcaption class="service__coronaCasePhotoCaption">キッズスペース</figcaption>
          </figure>
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case05.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case05.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case05@2x.jpg 2x" alt="カート（羽田空港）">
            <figcaption class="service__coronaCasePhotoCaption">カート（羽田空港）</figcaption>
          </figure>
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case06.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case06.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case06@2x.jpg 2x" alt="エレベーター内（ボタン）">
            <figcaption class="service__coronaCasePhotoCaption">エレベーター内（ボタン）</figcaption>
          </figure>
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case07.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case07.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case07@2x.jpg 2x" alt="階段の手すり">
            <figcaption class="service__coronaCasePhotoCaption">階段の手すり</figcaption>
          </figure>
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case08.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case08.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case08@2x.jpg 2x" alt="自動販売機">
            <figcaption class="service__coronaCasePhotoCaption">自動販売機</figcaption>
          </figure>
          <figure class="service__coronaCasePlaceFigure fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/case09.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/service/case09.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/service/case09@2x.jpg 2x" alt="お手洗い">
            <figcaption class="service__coronaCasePhotoCaption">お手洗い</figcaption>
          </figure>
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
          <small class="service__contactPhoneBusinessHours">営業時間 ／ 9:00〜18:00</small>
          <address class="service__contactPhoneAddress">TEL 03-0000-0000</address>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
