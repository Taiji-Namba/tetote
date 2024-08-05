<section class="c-fv p-fv">
  <div class="c-fv__slide-container c-fv-slide p-fv-slide">
    <div class="c-fv-slide__picture p-fv-slide__picture"></div>
    <div class="c-fv-slide__picture p-fv-slide__picture"></div>
  </div>
  <h2 class="p-fv__heading">BECOME A <br> CHALLENGER.</h2>
  <p class="p-fv__text">君の挑戦が、意思が、未来を変える</p>
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
  );
  $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="p-news p-fv__news">
        <h3 class="p-news__heading">NEWS</h3>
        <div class="p-news__text">
          <p class="p-news__title">
            <?php the_title() ?>
          </p>
          <p class="p-news__cta">
            <span class="p-news__cta-text">VIEW MORE</span>
            <img class="p-news__arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow.svg'); ?>" alt="">
          </p>
        </div>
      </a>
    <?php endwhile; ?>
  <?php else : ?>
    <a href="" class="p-news p-fv__news">
      <h3 class="p-news__heading">NEWS</h3>
      <div class="p-news__text">
        <p class="p-news__title">
          まだ採用ブログ記事はありません。
        </p>
        <p class="p-news__cta">
          <span class="p-news__cta-text">VIEW MORE</span>
          <img class="p-news__arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/arrow.svg'); ?>" alt="">
        </p>
      </div>
    </a>
  <?php endif;
  wp_reset_postdata(); ?>
</section>