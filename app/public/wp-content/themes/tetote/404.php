<?php get_header(); ?>
<main class="l-main">
  <div class="p-404">
    <div class="p-404__inner l-inner">
      <h2 class="p-404__title c-common-title">お探しのページは見つかりませんでした。</h2>
      <div class="p-404__button">
        <a class="c-button p-button" href="<?php echo esc_url(home_url($page)); ?>">TOPページへ</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>