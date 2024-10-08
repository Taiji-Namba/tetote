<?php
// 新規WP_Queryオブジェクトを作成し、クエリを実行
$the_query = new WP_Query($args);
if ($the_query->have_posts()) : // 投稿がある場合
  while ($the_query->have_posts()) : $the_query->the_post(); // 投稿ループの開始
    // 各フィールドの情報を取得
    if (has_post_thumbnail()) : ?>
      <li class="<?php echo (is_front_page()) ? esc_html("splide__slide") : esc_html("p-staff__item"); ?>">
        <a href="<?php the_permalink(); ?>" class="p-staff__card">
          <?php the_post_thumbnail('full', ['class' => 'p-staff__thumbnail']); ?>
          <div class="p-staff__texts">
            <p class="p-staff__message-1"><?php the_field('staff_message_1'); ?></p>
            <p class="p-staff__message-2"><?php the_field('staff_message_2'); ?></p>
            <p class="p-staff__brief-introduction">
              <span class="p-staff__occupation"><?php the_field('occupation'); ?></span>
              <span class="p-staff__year-of-entry"><?php the_field('year_of_entry'); ?>入社</span>
            </p>
            <h5 class="p-staff__name"><?php the_field('staff_name'); ?></h5>
          </div>
        </a>
      </li>
<?php
    endif;
  endwhile;
endif;
wp_reset_postdata(); // クエリをリセット
?>