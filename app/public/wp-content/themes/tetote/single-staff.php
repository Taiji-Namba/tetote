<?php get_header(); ?>
<main class="c-main p-main">
  <div class="p-main__inner">
    <article class="<?php post_class('p-article p-staff-article'); ?>">
      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('parts/project/p-staff-fv'); ?>

        <?php get_template_part('parts/common/p-breadcrumb'); ?>

        <section class="p-article__contents p-staff-article__contents l-staff">
          <div class="p-staff-article__contents-inner">
            <div class="p-staff-article__main-contents">
              <?php the_content(); ?>
            </div>
            <div class="p-staff-article__index">
              <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
              <?php endif; ?>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    </article>
    <section class="p-staff-related-post">
      <div class="p-staff-related-post__inner">
        <h2 class="p-staff-related-post__title">その他のメンバー</h2>
        <div class="p-staff-related-post__list-wrapper">
          <?php
          $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 3, // 取得する投稿数を設定（−1は無制限）
            'order' => 'rand', //並び順を指定
            'orderby' => 'date',  // 並び変える項目を設定
          );

          get_template_part('parts/project/p-staff-list', null, $args);
          ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>