<?php get_header(); ?>
<?php
$post_type = get_post_type();
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>

<?php get_template_part('parts/common/p-breadcrumb'); ?>

<main>
  <section <?php post_class('p-post-article p-article'); ?>>
    <div class="p-post-article__wrapper">
      <div class="p-post-article__inner">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="p-post-article__info">
              <!-- カテゴリー表示 -->
              <?php
              $categories = get_the_category();
              if (!empty($categories)) :
              ?>
                <ul class="p-post-article__categories">
                  <?php foreach ($categories as $category) : ?>
                    <li class="p-post-article__category">
                      <img class="p-post-article__category-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/category.svg'); ?>" alt="投稿カテゴリーアイコン">
                      <p class="p-post-article__category-name"><?php echo esc_html($category->name); ?></p>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <!-- 投稿日表示 -->
              <time class="p-post-article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
            <h1 class="p-post-article__title"><?php the_title() ?></h1>
            <!-- サムネイル表示 -->
            <?php if (has_post_thumbnail()) : ?>
              <figure class="p-post-article__thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php endif; ?>
            <section class="p-post-article__content">
              <div class="p-post-article__content-inner">
                <div class="p-article__contents p-post-article__contents">
                  <?php the_content(); ?>
                  <?php  // ↓複数ページ投稿のページネーション↓
                  $args = array(
                    'before' => '<div class="l-post-nav-links"><div class="post-nav-links">',
                    'after'  => '</div></div>',
                    'next_or_number' => 'next_and_number',
                    'nextpagelink' => '次のページ',
                    // 'previouspagelink' => '前のページ',
                  );
                  wp_link_pages($args); ?>
                </div>
              </div>
            </section>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <!-- 前後の投稿リンク -->
  <?php get_template_part('parts/post/p-post-nav'); ?>

</main>
<?php get_footer(); ?>