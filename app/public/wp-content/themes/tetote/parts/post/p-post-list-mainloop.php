<?php
$post_type = get_query_var('post_type') ? get_query_var('post_type') : 'post';
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<main class="p-archive p-main">
  <section class="p-post-list p-archive__inner p-main__inner">
    <div class="p-post-list__wrapper">
      <div class="p-post-list__inner">
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