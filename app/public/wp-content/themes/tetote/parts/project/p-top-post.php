<?php
$post_type = 'post';
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<section class="p-top-post p-top-section">
  <div class="p-top-post__inner">
    <div class="p-top-section__titles p-top-section__titles--ml0">
      <h4 class="c-common-title p-top-section__title">採用ブログ</h4>
      <p class="p-top-section__background-title">BLOG</p>
    </div>
    <p class="c-common-title p-top-section__subtitle p-top-section__subtitle--multi-line p-top-section__subtitle--mt73ml0">採用情報やイベント情報、社員の紹介など、<br>
      日々の現場の様子をご紹介します。</p>
    <?php
    $args = array(
      'post_type' => $post_type,
      'posts_per_page' => 4, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //降順
      'orderby' => 'date', // 並び変える項目を設定
    );
    get_template_part('parts/post/p-post-list-subloop', null, $args);
    ?>
    <div class="p-top-post__view-more p-view-more-group">
      <a href="<?php echo esc_url(home_url() . '/blog/'); ?>" class="c-button p-arrow-button p-arrow-button--next p-arrow-button--white p-view-more-group__arrow-button"></a>
      <a href="<?php echo esc_url(home_url() . '/blog/'); ?>" class="p-view-more-group__text">VIEW MORE</a>
    </div>
  </div>
</section>
<?php
?>