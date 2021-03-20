<div class="swiper-slide">
  <?php $detail_content = get_sub_field('detail'); ?>
  <?php if(have_rows('detail')): ?>
    <a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
    </a>
  <?php else: ?>
    <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
  <?php endif; ?>
  <div class="price__productMeta">
    <div>
      <h3 class="price__postTitle -product">
        <?php if(have_rows('detail')): ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        <?php
          else:
            the_title();
          endif;
        ?>
      </h3>
      <?php if (get_field('price')): ?>
        <span class="price__productPrice -pc">
          <?php the_field('price'); ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="price__worksMetaFooter -product">
      <span class="price__productPrice -sp">
        <?php the_field('price'); ?>
      </span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_arrow-right.png" alt="" class="price__worksMetaArrow <?php if(!have_rows('detail')){ echo 'nolink'; } ?>">
    </div>
  </div>
</div>