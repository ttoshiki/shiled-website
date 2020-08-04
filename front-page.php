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
			<section class="home__leadContents">
				<div class="home__leadContents__text">
					<h2 class="home__leadContents__heading">暮らしに、安堵を。</h2>
					<p class="home__leadContents__paragraph">
						私たちは、新しい公衆衛生の視点で<br>
						さまざまな角度からモノやコトを創造していきます。
					</p>
					<p class="home__leadContents__paragraph">
						大切なものを守るために。<br>
						PROTECT YOUR LIFE
					</p>
					<a href="<?php echo home_url('/company/') ?>" class="c-btn"><span class="c-btn__text">& SHIELDについて</span></a>
				</div>
				<div class="home__leadContents__photos">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo01.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo01@2x.jpg 2x" alt="">
					<div class="home__leadContents__photos -lower">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo02.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo02@2x.jpg 2x" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo03.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/home/photo03@2x.jpg 2x" alt="">
					</div>
				</div>
			</section>
			<section class="home__products">
				<h2>PRODUCTS</h2>
				<?php
					$args = array( 'post_type' => 'Product' );
					$the_query = new WP_Query($args); if ($the_query->have_posts()):
				?>
				<ul class="home__productList">
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
						<li class="home__productItem">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>">
									<?php
										if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
											the_post_thumbnail();
										}
									?>
									<div>
										<?php
											$terms = wp_get_object_terms($post->ID, 'product_category');
											foreach ($terms as $term) {
													echo '<span>' . $term->name . '</span>';
											}
										?>
									</div>
									<?php echo get_the_title(); ?>
									<?php the_content(); ?>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
				<a href="<?php echo home_url('/company/') ?>" class="c-btn"><span class="c-btn__text">商品一覧はこちら</span></a>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
					<p>商品がありません。</p>
				<?php endif; ?>
			</section>
			<section class="">
					<h2>NEWS</h2>
					<?php if (have_posts()): ?>
						<ul class="home__newsList">
							<?php while (have_posts()) : the_post(); ?>
								<li class="home__newsItem">
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
										<a href="<?php the_permalink(); ?>">
											<h3><?php echo get_the_title(); ?></h3>
										</a>
									</div>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php else: ?>
						<!-- 投稿が無い場合の処理 -->
					<?php endif; ?>
					<a href="<?php echo home_url('/company/') ?>" class="c-btn"><span class="c-btn__text">ニュース一覧はこちら</span></a>
			</section>
			<section class="home__footerVisual">
				<h2>PROTECT YOUR LIFE</h2>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
