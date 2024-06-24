<?php get_header(); ?>

<?php get_template_part('parts/common/p-eyecatch'); ?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>


<main class="c-main p-main">
  <div class="p-main__inner p-archive__inner p-staff">
    <?php
    $args = array(
      'post_type' => $post_type,
      'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //並び順を指定
      'orderby' => 'date',  // 並び変える項目を設定
    );

    get_template_part('parts/project/p-staff-list', null, $args);
    ?>
  </div>
</main>

<?php get_footer(); ?>