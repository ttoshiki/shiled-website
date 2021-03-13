<div class="swiper-slide">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
  </a>
  <div class="price__productMeta">
    <div>
      <h3 class="price__postTitle -product">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h3>
      <?php if (get_field('list-price')): ?>
        <span class="price__productPrice -pc">
          <?php the_field('list-price'); ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="price__worksMetaFooter -product">
      <span class="price__productPrice -sp">
        <?php the_field('list-price'); ?>
      </span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_arrow-right.png" alt="" class="price__worksMetaArrow">
    </div>
  </div>
</div>