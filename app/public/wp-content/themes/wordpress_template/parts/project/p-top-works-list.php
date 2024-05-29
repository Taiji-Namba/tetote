<?php
$post_type = 'works';
$link_post_type = $post_type;
if (wp_is_mobile()) {
  $posts_per_page = 2;
} else {
  $posts_per_page = 4;
}

$args = array(
  'post_type' => $post_type,
  'posts_per_page' => $posts_per_page,
  'order' => 'DESC', //降順
  'orderby' => 'date', //日付で並び替える
);
?>
<section class="p-post-list">
  <div class="p-post-list__wrap">
    <div class="p-post-list__inner l-inner">
      <h2 class="p-post-list__title">
        Works
      </h2>
      <div class="p-post-list__wrap">
        <ul class="p-post-list__items">
          <?php get_template_part('parts/post/p-post-list-subloop', null, $args); ?>
        </ul>
      </div>
      <div class="p-post-list__button">
        <a class="c-button" href="<?php echo esc_url(home_url($link_post_type)); ?>">詳しく見る</a>
      </div>
    </div>
  </div>
</section>
