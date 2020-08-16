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
		<div class="archiveProduct">
      <section class="l-mainVisual">
        <h1 class="l-mainVisualHeading roboto">PRODUCTS</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/mv.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/product/mv.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/product/mv@2x.jpg 2x" alt="" class="l-mainVisualBg">
			</section>
			<ul class="archiveProduct__list">
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 8,
					);
					$the_query = new WP_Query($args); if ($the_query->have_posts()):
				?>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<li id="post-<?php the_ID(); ?>" <?php post_class('archiveProduct__item'); ?>>
						<div class="archiveProduct__wrapper">
							<a href="<?php the_permalink(); ?>" class="">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else { ?>
										<img src="" alt="no-image" width="240" height="240">
									<?php } ?>
							</a>
							<div class="archiveProduct__meta">
								<a href="<?php the_permalink(); ?>" class="archiveProduct__metaLink"></a>
								<?php
									if ($terms = get_the_terms($post->ID, 'product_category')) {
										foreach ( $terms as $term ) {
											echo ('<span class="archiveProduct__cat">') ;
											echo esc_html($term->name)  ;
											echo ('</span>') ;
										}
									}
								?>
								<h3 class="archiveProduct__title"><?php echo get_the_title(); ?></h3>
								<?php if (get_field('lead-sentence')): ?>
									<p class="archiveProduct__lead">
										<?php the_field('lead-sentence'); ?>
									</p>
								<?php endif; ?>
								<?php if (get_field('price')): ?>
									<span class="archiveProduct__price">
										¥<?php the_field('price'); ?>-
									</span>
								<?php endif; ?>
								<span class="archiveProduct__more roboto">SEE MORE</span>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
			<p>準備中です。</p>
			<?php endif; ?>
			<section class="c-banners">
        <div>
          <a href="<?php echo home_url('/service/') ?>" class="c-banner__link">
            <div class="c-banner">
                <h2 class="c-banner__heading">SERVICE</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/banner02.jpg" alt="service" class="c-banner">
            </div>
          </a>
        </div>
        <div>
          <a href="<?php echo home_url('/product/') ?>" class="c-banner__link">
            <div class="c-banner">
              <h2 class="c-banner__heading">COMPANY</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/banner03.jpg" alt="company" class="c-banner">
            </div>
          </a>
        </div>
      </section>
	</main><!-- #main -->

<?php
get_footer();
