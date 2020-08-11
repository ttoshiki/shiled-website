<?php if (have_posts()):?>
<div class="related">
	<h2 class="related-title">RELATED POSTS</h2>
	<ul class="related-list">
	<?php while (have_posts()) : the_post(); ?>
		<li class="related-item">
			<a href="<?php the_permalink() ?>" rel="bookmark">
        <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="related-date roboto"><?php echo get_post_time('Y.m.d'); ?></time>
				<p class="entry-title"><?php echo get_the_title(); ?></p>
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
</div>
<?php endif; ?>