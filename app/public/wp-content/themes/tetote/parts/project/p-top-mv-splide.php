<div class="p-top-mv-splide">
  <div class="p-top-mv-splide__inner">
    <?php
    $args = array(
      'post_type' => 'mv_slider', //カスタム投稿タイプを設定
      'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //並び順を指定
      'orderby' => 'date',  // 並び変える項目を設定
    );
    get_template_part('parts/common/p-splide', null, $args);
    ?>
    <div class="p-top-mv-splide__catch-copy">
      <p class="p-top-mv-splide__text">後悔しないキャリアを作る、</p>
      <p class="p-top-mv-splide__text">それこそが、我々の使命だ</p>
    </div>
  </div>
</div>