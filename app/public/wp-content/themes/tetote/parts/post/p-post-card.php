<li class="p-post-card">
  <a href="<?php the_permalink(); ?>" class="p-post-card__link">
    <?php
    if (has_post_thumbnail()) {
      $thumbID = get_post_thumbnail_id($post->ID);
      $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
      $image_url = get_the_post_thumbnail_url($post->ID, 'large');
    } else {
      $image_url = get_template_directory_uri() . '/assets/images/common/template.jpg';
      $thumbAlt = "";
    }
    ?>
    <div class="p-post-card__body">
      <figure class="p-post-card__img">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $thumbAlt; ?>" loading="lazy">
      </figure>
      <div class="p-post-card__info <?php if (is_archive()) echo 'p-post-card__info--beige'; ?>">
        <?php
        $categories = get_the_category();
        // カテゴリーが複数登録されている場合は1つめを表示するように
        if (!empty($categories)) :
        ?>
          <div class="p-post-card__category">
            <img class="p-post-card__category-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/category.svg'); ?>" alt="投稿カテゴリーアイコン">
            <p class="p-post-card__category-name"><?php echo esc_html($categories[0]->name); ?></p>
          </div>
        <?php endif; ?>
        <h5 class="p-post-card__title">
          <?php
          the_title();
          ?>
        </h5>
        <div class="p-post-card__date">
          <!-- 投稿日 -->
          <time datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time('Y.m.d'); ?>
          </time>
        </div>
      </div>
    </div>
  </a>
</li>