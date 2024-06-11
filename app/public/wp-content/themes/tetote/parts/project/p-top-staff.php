<?php
global $slider_library;
$post_type = 'staff';
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<div class="p-top-staff p-top-section">
  <div class="p-top-staff__inner">
    <!-- 投稿記事のラベルをタイトルにする場合は、以下を使用します -->
    <h4 class="c-common-title p-top-section__title">人を知る</h4>
    <p class="p-top-section__background-title">MEMBER</p>
    <p class="c-common-title p-top-section__subtitle">TETOTEの社員がどういった信念を持って働いているのか、<br></br>一日のスケジュールや仕事内容などを紹介します。</p>
    <?php
    $args = array(
      'post_type' => $post_type,
      'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //並び順を指定
      'orderby' => 'date',  // 並び変える項目を設定
    );

    get_template_part('parts/common/p-splide-staff', null, $args);
    ?>
    <a class="c-button p-button p-button__view-more p-top-staff__button" href="<?php echo esc_url(home_url() . '/staff/'); ?>">VIEW MORE<img class="c-arrow p-button__arrow--view-more" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow.svg'); ?>" alt=""></a>
  </div>
</div>
<?php
?>