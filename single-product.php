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
		<div class="singleProduct">
      <?php if (have_posts()): ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <span class="single__cat roboto"><?php the_category(' '); ?></span>
            <div class="singleProduct__productInfo">
              <div class="singleProduct__photos">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full');
                  } else { ?>
                    <img src="" alt="no-image" width="240" height="240" class="singleProduct__mainPhoto">
                <?php } ?>
                <div class="singleProduct__subPhotos">
                  <?php if (have_rows('galleries')): ?>
                    <?php while (have_rows('galleries')): the_row(); ?>
                      <img src="<?php the_sub_field('gallery'); ?>" alt="商品写真" class="singleProduct__subPhoto">
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="singleProduct__meta">
                <?php
                  if ($terms = get_the_terms($post->ID, 'product_category')) {
                    foreach ( $terms as $term ) {
                      echo ('<span class="singleProduct__cat">') ;
                      echo esc_html($term->name)  ;
                      echo ('</span>') ;
                    }
                  }
                ?>
                <h2 class="singleProduct__title"><?php echo get_the_title(); ?></h2>
                <?php if (get_field('lead-sentence')): ?>
                  <p class="singleProduct__lead">
                    <?php the_field('lead-sentence'); ?>
                  </p>
                <?php endif; ?>
                <?php if (get_field('price')): ?>
                  <span class="singleProduct__price">
                    ¥<?php the_field('price'); ?>-
                  </span>
                <?php endif; ?>
                <div class="singleProduct__description">
                  <?php the_content(); ?>
                </div>
                <div class="singleProduct__buttons">
                  <?php if (get_field('url')): ?>
                    <a href="<?php the_field('url'); ?>" class="c-btn"><span class="c-btn__text">購入はこちら</span></a>
                  <?php endif; ?>
                  <a href="<?php echo home_url('/contact/') ?>" class="c-btn"><span class="c-btn__text">お問い合わせ</span></a>
                </div>
              </div>
            </div>
            <div class="singleProduct-doubleCol">
              <div class="singleProduct-doubleCol__col -detailText">
                <div class="singleProduct__links">
                  <a href="#detail">
                    <div class="singleProduct__linkText">
                      <span class="singleProduct__linkEnName roboto">DETAIL</span>
                      <h4 class="singleProduct__linkName">製品詳細</h4>
                    </div>
                  </a>
                  <a href="#point">
                    <div class="singleProduct__linkText">
                      <span class="singleProduct__linkEnName roboto">POINT</span>
                      <h4 class="singleProduct__linkName">おすすめポイント</h4>
                    </div>
                  </a>
                  <a href="#faq">
                    <div class="singleProduct__linkText">
                      <span class="singleProduct__linkEnName roboto">FAQ</span>
                      <h4 class="singleProduct__linkName">よくある質問</h4>
                    </div>
                  </a>
                </div>
                <section id="detail" class="singleProduct__details">
                  <div class="singleProduct__subHeadingWrapper">
                    <h3 class="singleProduct__subHeading">製品詳細</h3>
                    <span class="singleProduct__subHeadingEn roboto">DETAIL</span>
                  </div>
                  <?php if (get_field('movie-code')): ?>
                    <div class="singleProduct__movie">
                      <?php the_field('movie-code'); ?>
                    </div>
                  <?php endif; ?>
                  <?php if (have_rows('detail')): ?>
                    <dl>
                      <?php while (have_rows('detail')): the_row(); ?>
                        <div class="singleProduct__definitionItem">
                          <dt>製品詳細</dt>
                          <dd><?php the_sub_field('detail-content'); ?></dd>
                        </div>
                      <?php endwhile; ?>
                    </dl>
                  <?php endif; ?>
                </section>
                <section id="point" class="singleProduct__points">
                  <div class="singleProduct__subHeadingWrapper -point">
                    <h3 class="singleProduct__subHeading">おすすめポイント</h3>
                    <span class="singleProduct__subHeadingEn roboto">POINT</span>
                  </div>
                  <?php if (have_rows('point')): ?>
                    <?php while (have_rows('point')): the_row(); ?>
                      <div class="singleProduct__pointWrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_check.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_check.png, <?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_check.png 2x" alt="チェック" class="singleProduct__pointIcon">
                        <p class="singleProduct__point"><?php the_sub_field('point-content'); ?></p>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </section>
                <?php if (have_rows('faq')): ?>
                  <section id="faq" class="singleProduct__faq">
                    <div class="singleProduct__subHeadingWrapper">
                      <h3 class="singleProduct__subHeading">よくある質問</h3>
                      <span class="singleProduct__subHeadingEn roboto">FAQ</span>
                    </div>
                      <?php while (have_rows('faq')): the_row(); ?>
                        <div class="singleProduct__faqWrapper -question">
                          <div class="singleProduct__questionWrapper">
                            <span class="singleProduct__faqLabel -question roboto">Q</span><p class="singleProduct__question"><?php the_sub_field('question'); ?></p>
                          </div>
                          <div class="singleProduct__answerWrapper">
                            <div class="singleProduct__answerWrapperInner">
                              <span class="singleProduct__faqLabel -answer roboto">A</span><p class="singleProduct__answer"><?php the_sub_field('answer'); ?></p>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                  </section>
                <?php endif; ?>
              </div>
              <div class="singleProduct-doubleCol__col -fixed">
                <div class="singleProduct__fixedInfo">
                  <img src="<?php if (get_field('float-image')): the_field('float-image'); endif; ?>" alt="商品画像" class="singleProduct__fixedImage">
                  <span class="singleProduct__fixedInfoTitle"><?php echo get_the_title(); ?></span>
                  <div class="singleProduct__fixedInfoButtons">
                    <a href="
                      <?php if (get_field('url')): ?>
                        <?php the_field('url'); ?>
                      <?php endif; ?>
                      " class="singleProduct__fixedPurchaseLink c-btn"><span class="c-btn__text">購入はこちら</span></a>
                    <a href="<?php echo home_url('/contact/') ?>" class="singleProduct__fixedContactLink c-btn"><span class="c-btn__text">お問い合わせ</span></a>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
        </article>
      <?php endif; ?>
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
