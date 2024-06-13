<?php
$post_type = get_query_var('post_type') ? get_query_var('post_type') : 'post';
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<main class="archive">
  <section class="p-post-list archive__items">
    <div class="p-post-list__wrap">
      <div class="p-post-list__inner l-inner">
        <ul class="p-post-list__cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('parts/post/p-post-card'); ?>
            <?php endwhile; ?>
          <?php else : ?>
            <li class="p-post-list__not-found">該当の記事はありません。</li>
          <?php endif; ?>
        </ul>
        <?php get_template_part('parts/common/p-pager'); ?>
      </div>
    </div>
  </section>
</main>