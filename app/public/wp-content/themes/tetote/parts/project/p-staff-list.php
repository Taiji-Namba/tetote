<main class="c-main p-main">
  <div class="p-main__inner p-archive__inner">
    <ul class="p-staff__list">
      <?php
      $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
        'order' => 'DESC', //並び順を指定
        'orderby' => 'date',  // 並び変える項目を設定
      );
      get_template_part('parts/project/p-staff-card', null, $args);
      ?>
    </ul>
  </div>
</main>